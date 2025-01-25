<?php
define('BASE_DIR', dirname(__DIR__) . '/');
session_start();

// Check if a language is selected via URL
if (isset($_GET['lang'])) {
    $selected_lang = $_GET['lang'];
    // Validate the selected language
    if (in_array($selected_lang, ['en', 'fr'])) {
        $_SESSION['lang'] = $selected_lang; // Update the session variable
    }
    
    // Get the current page URL without query parameters
    $current_page = strtok($_SERVER["REQUEST_URI"], '?');
    
    // Redirect back to the current page
    header("Location: " . $current_page);
    exit();
}

// Set the default language if not already set
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';

// Include configuration and necessary files
// require_once BASE_DIR . '/config.php';
require_once BASE_DIR . 'includes/lang/' . $lang . '.php';

?>


<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $lang_data['page_title']; ?>
  </title>
  <link rel="stylesheet" href="/assets/css/styles.css">
  <link rel="stylesheet" href="/assets/css/formations.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" type="image/png" href="/assets/images/favicon.png" />

</head>

<body>

  <div id="wrapper">
    <!-- Add scroll to top button -->
    <div id="scroll-to-top">
      <i class="fas fa-chevron-up"></i>
    </div>
    <div class="site-content">
      <?php require_once BASE_DIR . 'includes/header.php';?>

      <header class="banner">
        <img src="/assets/images/bg_animate_01_small.jpg" alt="Training Image">
        <div class="banner-text">
          <h1>
            <?php echo $lang_data['mes_formations']; ?>
          </h1>
        </div>
      </header>
      <main>
        <section class="programs">
          <h2>
            <?php echo $lang_data['programs_title']; ?>
          </h2>
          <p>
            <?php echo $lang_data['programs_intro']; ?>
          </p>
          <p>
            <?php echo $lang_data['programs_description_1']; ?>
          </p>
          <p>
            <?php echo $lang_data['programs_description_2']; ?>
          </p>
          <h3>
            <?php echo $lang_data['programs_delivery_title']; ?>
          </h3>
          <ul>
            <li>
              <?php echo $lang_data['programs_delivery_online']; ?>
            </li>
            <li>
              <?php echo $lang_data['programs_delivery_corporate']; ?>
            </li>
            <li>
              <?php echo $lang_data['programs_delivery_public']; ?>
            </li>
          </ul>
        </section>
        <aside class="courses">
          <h2>
            <?php echo $lang_data['programs_list_of_learning']; ?>
          </h2>
          <div class="course-category">
            <h3>
              <?php echo $lang_data['programs_levels']; ?>
            </h3>
            <p>
              <?php echo $lang_data['programs_category_data_analysis']; ?>
            </p>
            <div class="tags">
              <span id="active"><a href="./details/excel.php">EXCEL</a></span>
              <span id="active"><a href="./details/powerBI.php">POWER BI</a></span>
              <span>TABLEAUX</span>
              <span id="active"><a href="./details/sql.php">SQL</a></span>
              <span>STATISTIQUES</span>
            </div>
          </div>
          <div class="course-category">
            <p>
              <?php echo $lang_data['programs_category_programming_languages']; ?>
            </p>
            <div class="tags">
              <span id="active"><a href="./details/python.php">PYTHON</a></span>
              <span>PHP</span>
              <span>JAVASCRIPT</span>
              <span>JAVA</span>
            </div>
          </div>
          <div class="course-category">
            <p>
              <?php echo $lang_data['programs_category_frameworks']; ?>
            </p>
            <div class="tags">
              <span>NODE.JS</span>
              <span>VUE.JS</span>
              <span>REACT.JS</span>
              <span>DJANGO</span>
              <span>ANGULAR</span>
            </div>
          </div>
          <div class="course-category">
            <p>
              <?php echo $lang_data['programs_category_web_development']; ?>
            </p>
            <div class="tags">
              <span>HTML</span>
              <span>SASS/CSS</span>
              <span>Web API</span>
              <span>Sécurité Web</span>
            </div>
          </div>
          <div class="course-category">
            <p>
              <?php echo $lang_data['programs_category_cyber_security']; ?>
            </p>
            <div class="tags">
              <span id="active"><a href="./details/cyberIntroduction.pdf">Ethical Hacker-Introduction</a></span>
              <span id="active"><a href="./details/cyberVulnerabilityScanning.pdf">Information Gathering and Vulnerability Scanning</a></span>
              <span id="active"><a href="./details/cyberExploitingNetworks.pdf">Exploiting Wired and Wireless Networks</a></span>

            </div>
          </div>
        </aside>

      </main>
      <?php
require_once BASE_DIR . 'includes/footer.php';
?>
    </div>
  </div>
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/formations.js"></script>
</body>

</html>