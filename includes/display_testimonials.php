<?php
define('BASE_DIR', dirname(__DIR__));
session_start();

// Set the default language if not already set
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';

// Include language file
require_once BASE_DIR . '/includes/lang/' . $lang . '.php';

$jsonFile = BASE_DIR . '/formation/data/testimonials.json';
$testimonials = json_decode(file_get_contents($jsonFile), true)['testimonials'];
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimonials |
    <?php echo $lang_data['page_title']; ?>
  </title>
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/css/testimonials.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" type="image/png" href="../assets/images/favicon.png" />
 
</head>

<body>
  <div id="wrapper">
    <!-- Add scroll to top button -->
    <div id="scroll-to-top">
      <i class="fas fa-chevron-up"></i>
    </div>
    <div class="site-content">
      <?php require_once BASE_DIR . '/includes/header.php';?>

      <main>
        <section id="testimonials" class="section">
          <div class="container testimonials-container">
            <h2 class="section-title text-center mb-4">Testimonials</h2>
            
            <!-- Add Testimonial Button -->
            <a href="add_testimonial.php" class="add-testimonial-btn">
               Add Testimonial
            </a>

            <div class="testimonial-grid">
              <?php foreach ($testimonials as $testimonial): ?>
              <div class="testimonial-card">
                <?php if (!empty($testimonial['profile_picture'])): ?>
                  <img src="../<?php echo htmlspecialchars($testimonial['profile_picture']); ?>" 
                       alt="<?php echo htmlspecialchars($testimonial['name']); ?>" 
                       class="testimonial-avatar">
                <?php endif; ?>
                <div class="testimonial-content">
                  <p class="testimonial-text">"
                    <?php echo htmlspecialchars($testimonial['testimonial']); ?>"
                  </p>
                  <div class="testimonial-author">
                    <h3 class="author-name">
                      <?php echo htmlspecialchars($testimonial['name']); ?>
                    </h3>
                    <p class="author-details">
                      <?php echo htmlspecialchars($testimonial['role']); ?>,
                      <?php echo htmlspecialchars($testimonial['company']); ?>
                    </p>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </section>
      </main>
      <?php require_once BASE_DIR . '/includes/footer.php';?>
    </div>
  </div>
  
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/testimonials.js"></script>
</body>

</html>