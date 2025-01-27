<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('BASE_DIR', dirname(__DIR__));
session_start();

// Set the default language if not already set
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';

// Include language file
require_once BASE_DIR . '/includes/lang/' . $lang . '.php';

// Create a configuration file for credentials
$config_file = BASE_DIR . '/includes/config/testimonial_admin.php';

// Force reset flag
$force_reset = false; // Set back to false to preserve credentials

// Check if config file exists
if (!file_exists($config_file) || $force_reset) {
    // Generate a new, secure password
    $original_password = bin2hex(random_bytes(8)); // 16 character password
    
    $config_content = "<?php
return [
    'username' => 'admin',
    'password' => '" . password_hash($original_password, PASSWORD_DEFAULT) . "',
    'original_password' => '" . $original_password . "'
];
";
    
    // Ensure the config directory exists
    @mkdir(dirname($config_file), 0755, true);
    
    // Write the config file
    file_put_contents($config_file, $config_content);
    
    // Display the credentials
    $initial_setup = true;
    $displayed_password = $original_password;
}

// Load credentials
$credentials = require $config_file;

$login_error = '';
$testimonial_success = '';
$testimonial_error = '';

// Handle login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // IMPORTANT: Use the original password for verification
    if ($username === $credentials['username'] && 
        $password === $credentials['original_password']) {
        $_SESSION['admin_logged_in'] = true;
    } else {
        $login_error = 'Invalid credentials. Please check your username and password.';
    }
}

// Handle testimonial submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && 
    isset($_POST['submit_testimonial']) && 
    isset($_SESSION['admin_logged_in']) && 
    $_SESSION['admin_logged_in'] === true) {
    
    $jsonFile = BASE_DIR . '/formation/data/testimonials.json';
    $uploadDir = BASE_DIR . '/assets/images/testimonials/';
    
    try {
        // Ensure upload directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Read existing testimonials
        $data = ['testimonials' => []];
        if (file_exists($jsonFile)) {
            $jsonContent = file_get_contents($jsonFile);
            if ($jsonContent !== false) {
                $parsedData = json_decode($jsonContent, true);
                if (json_last_error() === JSON_ERROR_NONE && is_array($parsedData)) {
                    $data = $parsedData;
                } else {
                    error_log('JSON Decode Error: ' . json_last_error_msg());
                }
            } else {
                error_log('Failed to read JSON file: ' . $jsonFile);
            }
        }
        
        // Generate new ID
        $newId = count($data['testimonials']) + 1;

        // Handle file upload
        $profilePicture = '';
        if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
            $tmpName = $_FILES['profile_picture']['tmp_name'];
            $fileName = $newId . '_' . basename($_FILES['profile_picture']['name']);
            $uploadPath = $uploadDir . $fileName;
            
            // Validate and move uploaded file
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            $maxFileSize = 5 * 1024 * 1024; // 5MB

            $fileType = mime_content_type($tmpName);
            $fileSize = filesize($tmpName);

            if (!in_array($fileType, $allowedTypes)) {
                throw new Exception('Invalid file type. Only JPEG, PNG, GIF, and WebP are allowed.');
            }

            if ($fileSize > $maxFileSize) {
                throw new Exception('File is too large. Maximum size is 5MB.');
            }

            if (move_uploaded_file($tmpName, $uploadPath)) {
                $profilePicture = 'assets/images/testimonials/' . $fileName;
            } else {
                throw new Exception('Failed to upload profile picture');
            }
        }


        $testimonial = trim($_POST['testimonial'] ?? '');
        $testimonial = html_entity_decode($testimonial, ENT_QUOTES, 'UTF-8');
            
        // Prepare the new testimonial array
        $newTestimonial = [
            'id' => $newId,
            'name' => trim($_POST['name'] ?? ''),
            'role' => trim($_POST['role'] ?? ''),
            'company' => trim($_POST['company'] ?? ''),
            'testimonial' => $testimonial,
            'profile_picture' => $profilePicture,
            'date' => date('Y-m-d')
        ];

        // Validate input
        if (empty($newTestimonial['name'])) {
            throw new Exception('Name is required');
        }
        
        if (empty($newTestimonial['testimonial'])) {
            throw new Exception('Testimonial text is required');
        }

        if (strlen($newTestimonial['testimonial']) > 200) {
            throw new Exception('Testimonial must be 200 characters or less');
        }
        // Sanitize input
        $newTestimonial['name'] = trim($newTestimonial['name']);
        $newTestimonial['role'] = trim($newTestimonial['role']);
        $newTestimonial['company'] = trim($newTestimonial['company']);
        $newTestimonial['testimonial'] = trim($newTestimonial['testimonial']);

        // Add new testimonial
        $data['testimonials'][] = $newTestimonial;
        
        // Write back to file
        $result = file_put_contents($jsonFile, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        
        if ($result === false) {
            throw new Exception('Failed to write testimonial to file');
        }
        
        $testimonial_success = 'Testimonial added successfully';
    } catch (Exception $e) {
        $testimonial_error = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Testimonial | <?php echo $lang_data['page_title']; ?></title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/testimonials.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" type="image/png" href="../assets/images/favicon.png" />
</head>
<body>
    <div id="wrapper">
        <div class="site-content">
            <?php require_once BASE_DIR . '/includes/header.php';?>

            <main>
                <div class="container">
                    <?php if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true): ?>
                        <form method="POST" class="admin-form">
                            <h2>Admin Login</h2>
                            <?php if ($login_error): ?>
                                <div class="error"><?php echo $login_error; ?></div>
                            <?php endif; ?>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" required>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </form>
                    <?php else: ?>
                        <form method="POST" class="admin-form" enctype="multipart/form-data">
                            <h2>Add Testimonial</h2>
                            <?php if ($testimonial_error): ?>
                                <div class="error"><?php echo $testimonial_error; ?></div>
                            <?php endif; ?>
                            <?php if ($testimonial_success): ?>
                                <div class="success"><?php echo $testimonial_success; ?></div>
                            <?php endif; ?>
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <input type="text" id="role" name="role">
                            </div>
                            <div class="form-group">
                                <label for="company">Company</label>
                                <input type="text" id="company" name="company">
                            </div>
                            <div class="form-group">
                                <label for="testimonial">Testimonial *</label>
                                <textarea 
                                    id="testimonial" 
                                    name="testimonial" 
                                    rows="4" 
                                    required 
                                    maxlength="200" 
                                    placeholder="Enter your testimonial (max 200 characters)"
                                ></textarea>
                                <small class="character-count">0 / 200 characters</small>
                            </div>
                            <div class="form-group">
                                <label for="profile_picture">Profile Picture (optional)</label>
                                <input type="file" id="profile_picture" name="profile_picture" accept="image/jpeg,image/png,image/gif,image/webp">
                                <small>Max file size: 5MB. Allowed types: JPEG, PNG, GIF, WebP</small>
                            </div>
                            <button type="submit" name="submit_testimonial" class="btn-primary submit-testimonial">Add Testimonial</button>
                        </form>
                    <?php endif; ?>
                </div>
            </main>

            <?php require_once BASE_DIR . '/includes/footer.php';?>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/testimonials.js"></script>
</body>
</html>