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
require_once BASE_DIR . '../includes/lang/' . $lang . '.php';

?>


<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $lang_data['page_title']; ?>
  </title>
  <link rel="stylesheet" href="../../assets/css/styles.css">
  <link rel="stylesheet" href="../../assets/css/formations.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" type="image/png" href="../../assets/images/favicon.png" />

</head>

<body>

  <div id="wrapper">
    <!-- Add scroll to top button -->
    <div id="scroll-to-top">
      <i class="fas fa-chevron-up"></i>
    </div>
    <div class="site-content">
      <?php require_once BASE_DIR . '../includes/header.php'; ?>

      <header class="banner">
        <img src="../../assets/images/bg_animate_01_small.jpg" alt="Training Image">
        <div class="banner-text">
          <h1>
            <?php echo $lang_data['mes_formations']; ?>
          </h1>
        </div>
      </header>
      <!--SECTIONS Main-->
      <main id="main">
        <div class="learning-container">

          <!-- PROJECT-->
          <section class="learning-module">
            <div class="learning-header-row padding-top-90">

              <div class="learning-column">
                <header class="learning-section-header">
                  <div class="learning-heading">
                    <h1 class="learning-title text-capitalize font-medium">
                      <?php echo $lang_data['excel_learning_title']; ?>
                    </h1>
                    <hr>
                  </div>
                </header>
              </div>
            </div>
            <section class="learning-media padding-bottom-30">
              <div class="learning-media-row">
                <div class="learning-media-column">
                  <img src="../../assets/images/Excel-logo.png" alt="Excel" class="learning-image img-responsive"
                    width="100" height="100" />
                </div>
              </div>
            </section>
            <div class="learning-description-row">
              <div class="learning-full-width">
                <h2 class="learning-subtitle">
                  <?php echo $lang_data['excel_about_course_title']; ?>
                </h2>
                <p class="learning-description">
                  <?php echo $lang_data['excel_course_description']; ?>
                </p>
                <hr />
                <h3 class="learning-subtitle">
                  <?php echo $lang_data['excel_programs_title']; ?>
                </h3>
                <ul class="learning-list list-style4">
                  <li> <a href="excel.php#FarctionnerTexte"><strong>
                        <?php echo $lang_data['excel_text_split_title']; ?>
                      </strong></a></li>
                  <li> <a href="excel.php#Fonctions"><strong>
                        <?php echo $lang_data['excel_functions_title']; ?>
                      </strong></a></li>
                </ul>
              </div>
              <div class="learning-full-width">
              </div>
            </div>
          </section>

          <!--Fractionner le texte en colonnes -->
          <section id="FarctionnerTexte" class="learning-module">
            <div class="learning-row">
              <div class="learning-full-width">
                <p class="learning-section-title"><span class="learning-module-title">
                    <?php echo $lang_data['excel_text_split_title']; ?>
                  </span></p>
                <h2 class="learning-subtitle">Introduction</h2>
                <p class="learning-description">
                  <?php echo $lang_data['excel_text_split_intro']; ?>
                </p>
                <hr />
                <iframe class="responsive-iframe" width="560" height="315"
                  src="https://www.youtube.com/embed/HgtB0PnekIo" title="Fractionner le Texte" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>

              </div>
            </div>
          </section>

          <!--Fonctions -->
          <section id="Fonctions" class="learning-module">
            <div class="learning-row">
              <div class="learning-full-width">

                <p class="learning-section-title"><span class="learning-module-title">
                    <?php echo $lang_data['excel_functions_title']; ?>
                  </span></p>

                <h2 class="learning-subtitle">
                  <?php echo $lang_data['excel_cell_merge_title']; ?>
                </h2>
                <p class="learning-description">
                  <?php echo $lang_data['excel_cell_merge_description']; ?>
                </p>
                <iframe class="responsive-iframe" width="560" height="315"
                  src="https://www.youtube.com/embed/c2LHruCusSU" title="Fractionner le Texte" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>

                <div class="learning-exercise">
                  <h2 class="learning-subtitle">Question</h2>
                  <p class="learning-description">
                    <?php echo $lang_data['excel_exercise_question']; ?>
                  </p>
                  <?php foreach ($lang_data['excel_exercise_options'] as $option): ?>
                    <span class="learning-description"> <span class="learning-output-leftSpace">-
                        <?php echo $option; ?>
                      </span> </span>
                    <br>
                  <?php endforeach; ?>
                </div>
                <!--Input-->
                <div class="learning-showMeResult">
                  <a class="learning-description" id="showMeResult" href="#">
                    <?php echo $lang_data['excel_exercise_answer_button']; ?>
                  </a>
                </div>
                <div class="learning-console-input hidden" id="resultBlock">
                  <pre class="console-line">
                <code class="console-code">
                  <br>
                  <span class="keyword-print">&nbsp;&nbsp  COUNTIF </span>
                  <br>
                </code>
              </pre>
                </div>

              </div>
            </div>
          </section>
          <hr />

        </div>
      </main>

      <?php
      require_once BASE_DIR . '../includes/footer.php';
      ?>
    </div>
  </div>
  <script src="../../assets/js/main.js"></script>
  <script src="../../assets/js/formations.js"></script>
</body>

</html>