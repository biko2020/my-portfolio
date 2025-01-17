<?php
session_start();

// Check if a language is selected via URL
if (isset($_GET['lang'])) {
    $selected_lang = $_GET['lang'];
    // Validate the selected language
    if (in_array($selected_lang, ['en', 'fr'])) {
        $_SESSION['lang'] = $selected_lang; // Update the session variable
    }
    // Redirect to avoid query parameters in the URL after setting the session
    header("Location: index.php");
    exit();
}

// Set the default language if not already set
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';
require_once 'includes/lang/' . $lang . '.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $lang_data['page_title']; ?>
  </title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" type="image/png" href="assets/images/favicon.png" />
</head>

<body>
  <div id="wrapper">
    <!-- Add scroll to top button -->
    <div id="scroll-to-top">
      <i class="fas fa-chevron-up"></i>
    </div>

    <div class="site-content">
      <header>
        <div class="header-container">
          <div class="top-bar-container">
            <div class="row">
              <div class="col-xs-12 header-top">
                <ul class="list-inline info-list">
                  <li>
                    <a href="tel:&#43;&#50;&#49;&#50;&#54;&#54;&#51;&#56;&#50;&#56;&#52;&#48;&#53;">
                      <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" alt="Phone" width="21"
                        height="21"> &nbsp;
                      &#43;&#50;&#49;&#50;&#54;&#54;&#51;&#56;&#50;&#56;&#52;&#48;&#53;
                    </a>
                  </li>
                  <li>
                    <a
                      href="mailto:&#97;&#105;&#116;&#111;&#117;&#102;&#107;&#105;&#114;&#98;&#114;&#97;&#104;&#105;&#109;&#97;&#98;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;">
                      <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Envelope" width="21"
                        height="21" style="filter: invert(100%);">
                      &nbsp;
                      &#97;&#105;&#116;&#111;&#117;&#102;&#107;&#105;&#114;&#98;&#114;&#97;&#104;&#105;&#109;&#97;&#98;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;
                    </a>
                  </li>
                </ul>
                <div id="social-links">
                  <a href="https://www.linkedin.com/in/brahim-aitoufkir-74506021a" target="_blank">
                    <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn Profile" width="21"
                      height="21">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <nav>
            <div class="logo">
              <a href="index.php">
                <img src="<?php echo $img_data['picture']; ?>" alt="AIT OUFKIR BRAHIM" width="50" height="50" />
              </a>
            </div>
            <button id="menu-toggle" class="menu-toggle" aria-label="Toggle Menu">
              <span class="hamburger-icon"></span>
            </button>
            <ul id="menu" class="nav-menu">
              <li><a href="#services">
                  <?php echo $lang_data['menu_services']; ?>
                </a></li>
              <li><a href="#skills">
                  <?php echo $lang_data['menu_skills']; ?>
                </a></li>
              <li><a href="#portfolio">
                  <?php echo $lang_data['menu_portfolio']; ?>
                </a></li>
              <li><a href="#about-me">
                  <?php echo $lang_data['menu_about']; ?>
                </a></li>
              <li><a href="#contact">
                  <?php echo $lang_data['menu_contact']; ?>
                </a></li>
            </ul>
            <div class="language-switcher">
              <button id="language-toggle" aria-label="Toggle Language">
                <span id="current-lang">
                  <?php echo strtoupper($lang); ?>
                </span>
                <i class="arrow-icon"></i>
              </button>
              <ul id="language-options" class="hidden">
                <?php if ($lang !== 'fr'): ?>
                <li><a href="?lang=fr">FR</a></li>
                <?php endif; ?>
                <?php if ($lang !== 'en'): ?>
                <li><a href="?lang=en">EN</a></li>
                <?php endif; ?>
              </ul>
            </div>
          </nav>
        </div>
      </header>

      <div id="slider-container">
        <div class="slide">
          <div class="slide-content">
            <img src="assets/images/slide1.jpg" alt="ANALYSTE-PROGRAMMEUR SENIOR" data-bgposition="left center"
              data-kenburns="on" data-duration="14000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130"
              data-bgpositionend="right center">

            <div class="slide-text">
              <h2 class="slide-title">
                <?php echo $lang_data['slide1_title']; ?>
              </h2>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="slide-content">
            <img src="assets/images/slide2.jpg" alt="Conception & Implémentation">
            <div class="slide-text">
              <h2 class="slide-title">
                <?php echo $lang_data['slide2_title']; ?>
              </h2>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="slide-content">
            <img src="assets/images/slide3.jpg" alt="Analyse des Données">
            <div class="slide-text">
              <h2 class="slide-title">
                <?php echo $lang_data['slide3_title']; ?>
              </h2>
            </div>
          </div>
        </div>
      </div>

      <main>
        <div class="main-container">
          <!-- SERVICES SECTION -->
          <section id="services" class="services-section">
            <div class="container">
              <h2 class="section-title">
                <?php echo $lang_data['services_title']; ?>
              </h2>
              <p class="section-description">
                <?php echo $lang_data['services_subtitle']; ?>
              </p>

              <div class="services-grid">
                <div class="services-category">
                  <h3>
                    <?php echo $lang_data['services_prestations_title']; ?>
                  </h3>
                  <p>
                    <?php echo $lang_data['services_prestations_description']; ?>
                  </p>
                  <ul>
                    <li>
                      <?php echo $lang_data['services_prestations_web']; ?>
                    </li>
                    <li>
                      <?php echo $lang_data['services_prestations_desktop']; ?>
                    </li>
                    <li>
                      <?php echo $lang_data['services_prestations_mobile']; ?>
                    </li>
                    <li>
                      <?php echo $lang_data['services_prestations_seo']; ?>
                    </li>
                  </ul>
                </div>

                <div class="services-category">
                  <h3>
                    <?php echo $lang_data['services_training_title']; ?>
                  </h3>
                  <ul>
                    <li>
                      <?php echo $lang_data['services_training_frontend']; ?>
                    </li>
                    <li>
                      <?php echo $lang_data['services_training_backend']; ?>
                    </li>
                    <li>
                      <?php echo $lang_data['services_training_office']; ?>
                    </li>
                    <li>
                      <?php echo $lang_data['services_training_database']; ?>
                    </li>
                  </ul>
                </div>

                <div class="services-category">
                  <h3>
                    <?php echo $lang_data['services_analyst_title']; ?>
                  </h3>
                  <ul>
                    <li>
                      <?php echo $lang_data['services_analyst_data_analysis']; ?>
                    </li>
                    <li>
                      <?php echo $lang_data['services_analyst_data_collection']; ?>
                    </li>
                    <li>
                      <?php echo $lang_data['services_analyst_report_management']; ?>
                    </li>
                    <li>
                      <?php echo $lang_data['services_analyst_tool_management']; ?>
                    </li>
                    <li>
                      <?php echo $lang_data['services_analyst_result_distribution']; ?>
                    </li>
                  </ul>
                </div>

                <div class="services-category">
                  <h3>
                    <?php echo $lang_data['services_solutions_title']; ?>
                  </h3>
                  <ul>
                    <li>
                      <?php echo $lang_data['services_solutions_needs_assessment']; ?>
                    </li>
                    <li>
                      <?php echo $lang_data['services_solutions_custom_design']; ?>
                    </li>
                    <li>
                      <?php echo $lang_data['services_solutions_implementation']; ?>
                    </li>
                    <li>
                      <?php echo $lang_data['services_solutions_training']; ?>
                    </li>
                    <li>
                      <?php echo $lang_data['services_solutions_optimization']; ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>

          <!-- SKILLS BANNER -->
          <div class="skills-banner">
            <img src="assets/images/skills-banner.jpg" alt="<?php echo $lang_data['skills_title']; ?>"
              class="img-fluid w-100">
          </div>

          <section id="skills">
            <div class="container">
              <h2 class="section-title">
                <?php echo $lang_data['skills_title']; ?>
              </h2>
              <p class="section-subtitle">
                <?php echo $lang_data['skills_subtitle']; ?>
              </p>
              <div class="skills-wrapper">
                <!-- Left Column: Domains -->
                <div class="skills-domains">
                  <div class="domain">
                    <h3>
                      <?php echo $lang_data['skills_design_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['skills_design_description']; ?>
                    </p>
                    <span>
                      <?php echo $lang_data['skills_design_technologies']; ?>
                    </span>
                  </div>
                  <div class="domain">
                    <h3>
                      <?php echo $lang_data['skills_data_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['skills_data_description']; ?>
                    </p>
                    <span>
                      <?php echo $lang_data['skills_data_technologies']; ?>
                    </span>
                  </div>
                  <div class="domain">
                    <h3>
                      <?php echo $lang_data['skills_training_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['skills_training_description']; ?>
                    </p>
                  </div>
                  <div class="domain">
                    <h3>
                      <?php echo $lang_data['skills_solutions_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['skills_solutions_description']; ?>
                    </p>
                  </div>
                  <div class="domain">
                    <h3>
                      <?php echo $lang_data['skills_methods_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['skills_methods_description']; ?>
                    </p>
                  </div>
                </div>
                <!-- Right Column: Technologies -->
                <div class="skills-technologies">
                  <h3>Technologies</h3>
                  <ul class="technologies-list">
                    <li>
                      <span>HTML / Pug · CSS / SASS · Bootstrap</span>
                      <div class="bar" style="width: 90%;"></div>
                    </li>
                    <li>
                      <span>JavaScript</span>
                      <div class="bar" style="width: 80%;"></div>
                    </li>
                    <li>
                      <span>MySQL · SQL Server · SQL</span>
                      <div class="bar" style="width: 85%;"></div>
                    </li>
                    <li>
                      <span>PHP</span>
                      <div class="bar" style="width: 75%;"></div>
                    </li>
                    <li>
                      <span>ASP</span>
                      <div class="bar" style="width: 60%;"></div>
                    </li>
                    <li>
                      <span>Java</span>
                      <div class="bar" style="width: 70%;"></div>
                    </li>
                    <li>
                      <span>C#</span>
                      <div class="bar" style="width: 50%;"></div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>

          <section id="custom-solutions">
            <div class="container">
              <h2 class="quote">
                <span>"</span>
                <?php echo $lang_data['custom_solutions_quote']; ?><span>"</span>
              </h2>
              <div class="solutions-grid">
                <div class="solution-item">
                  <img src="https://cdn-icons-png.flaticon.com/512/2951/2951388.png"
                    alt="<?php echo $lang_data['custom_solutions_needs_assessment_alt']; ?>">
                  <p>
                    <?php echo $lang_data['custom_solutions_needs_assessment']; ?>
                  </p>
                </div>
                <div class="solution-item">
                  <img src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png"
                    alt="<?php echo $lang_data['custom_solutions_design_alt']; ?>">
                  <p>
                    <?php echo $lang_data['custom_solutions_design']; ?>
                  </p>
                </div>
                <div class="solution-item">
                  <img src="https://cdn-icons-png.flaticon.com/512/3478/3478121.png"
                    alt="<?php echo $lang_data['custom_solutions_implementation_alt']; ?>">
                  <p>
                    <?php echo $lang_data['custom_solutions_implementation']; ?>
                  </p>
                </div>
                <div class="solution-item">
                  <img src="https://cdn-icons-png.flaticon.com/512/1250/1250620.png"
                    alt="<?php echo $lang_data['custom_solutions_training_alt']; ?>">
                  <p>
                    <?php echo $lang_data['custom_solutions_training']; ?>
                  </p>
                </div>
                <div class="solution-item">
                  <img src="https://cdn-icons-png.flaticon.com/512/1040/1040216.png"
                    alt="<?php echo $lang_data['custom_solutions_evaluation_alt']; ?>">
                  <p>
                    <?php echo $lang_data['custom_solutions_evaluation']; ?>
                  </p>
                </div>
                <div class="solution-item">
                  <img src="https://cdn-icons-png.flaticon.com/512/582/582650.png"
                    alt="<?php echo $lang_data['custom_solutions_delivery_alt']; ?>">
                  <p>
                    <?php echo $lang_data['custom_solutions_delivery']; ?>
                  </p>
                </div>
              </div>
            </div>
          </section>

          <section id="portfolio">
            <div class="container">
              <h2 class="section-title">
                <?php echo $lang_data['portfolio_title']; ?>
              </h2>
              <p class="section-subtitle">
                <?php echo $lang_data['portfolio_subtitle']; ?>
              </p>
              <div class="portfolio-grid">
                <div class="portfolio-item">
                  <div class="portfolio-image">
                    <img src="assets/images/vignettes/askoach-project.jpg"
                      alt="<?php echo $lang_data['portfolio_project1_title']; ?>">
                  </div>
                  <div class="portfolio-content">
                    <h3>
                      <?php echo $lang_data['portfolio_project1_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['portfolio_project1_description']; ?>
                    </p>
                    <div class="portfolio-technologies">
                      <?php echo $lang_data['portfolio_project1_technologies']; ?>
                    </div>
                    <a href="http://www.askoach.fr/" target="_blank" class="btn btn-primary">
                      <?php echo $lang_data['portfolio_view_project']; ?>
                    </a>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="portfolio-image">
                    <img src="assets/images/vignettes/coreasusa-project.jpg"
                      alt="<?php echo $lang_data['portfolio_project2_title']; ?>">
                  </div>
                  <div class="portfolio-content">
                    <h3>
                      <?php echo $lang_data['portfolio_project2_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['portfolio_project2_description']; ?>
                    </p>
                    <div class="portfolio-technologies">
                      <?php echo $lang_data['portfolio_project2_technologies']; ?>
                    </div>
                    <a href="https://coreasusa.ma/" target="_blank" class="btn btn-primary">
                      <?php echo $lang_data['portfolio_view_project']; ?>
                    </a>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="portfolio-image">
                    <img src="assets/images/vignettes/3rosesmenage-project.jpg"
                      alt="<?php echo $lang_data['portfolio_project3_title']; ?>">
                  </div>
                  <div class="portfolio-content">
                    <h3>
                      <?php echo $lang_data['portfolio_project3_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['portfolio_project3_description']; ?>
                    </p>
                    <div class="portfolio-technologies">
                      <?php echo $lang_data['portfolio_project3_technologies']; ?>
                    </div>
                    <a href="https://www.3rosesmenage.net/" target="_blank" class="btn btn-primary">
                      <?php echo $lang_data['portfolio_view_project']; ?>
                    </a>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="portfolio-image">
                    <img src="assets/images/vignettes/touretfere-project.jpg"
                      alt="<?php echo $lang_data['portfolio_project4_title']; ?>">
                  </div>
                  <div class="portfolio-content">
                    <h3>
                      <?php echo $lang_data['portfolio_project4_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['portfolio_project4_description']; ?>
                    </p>
                    <div class="portfolio-technologies">
                      <?php echo $lang_data['portfolio_project4_technologies']; ?>
                    </div>
                    <a href="https://touretfere.ma/" target="_blank" class="btn btn-primary">
                      <?php echo $lang_data['portfolio_view_project']; ?>
                    </a>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="portfolio-image">
                    <img src="assets/images/vignettes/horizonequipement-project.jpg"
                      alt="<?php echo $lang_data['portfolio_project5_title']; ?>">
                  </div>
                  <div class="portfolio-content">
                    <h3>
                      <?php echo $lang_data['portfolio_project5_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['portfolio_project5_description']; ?>
                    </p>
                    <div class="portfolio-technologies">
                      <?php echo $lang_data['portfolio_project5_technologies']; ?>
                    </div>
                    <a href="https://horizonequipement.ma/" target="_blank" class="btn btn-primary">
                      <?php echo $lang_data['portfolio_view_project']; ?>
                    </a>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="portfolio-image">
                    <img src="assets/images/vignettes/m3alem-project.jpg"
                      alt="<?php echo $lang_data['portfolio_project6_title']; ?>">
                  </div>
                  <div class="portfolio-content">
                    <h3>
                      <?php echo $lang_data['portfolio_project6_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['portfolio_project6_description']; ?>
                    </p>
                    <div class="portfolio-technologies">
                      <?php echo $lang_data['portfolio_project6_technologies']; ?>
                    </div>
                    <a href="https://web.archive.org/web/20140517191508/http://m3alem.com/" target="_blank"
                      class="btn btn-primary">
                      <?php echo $lang_data['portfolio_view_project']; ?>
                    </a>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="portfolio-image">
                    <img src="assets/images/vignettes/perrybellgard-project.jpg"
                      alt="<?php echo $lang_data['portfolio_project7_title']; ?>">
                  </div>
                  <div class="portfolio-content">
                    <h3>
                      <?php echo $lang_data['portfolio_project7_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['portfolio_project7_description']; ?>
                    </p>
                    <div class="portfolio-technologies">
                      <?php echo $lang_data['portfolio_project7_technologies']; ?>
                    </div>
                    <a href="https://test.3rosesmenage.net/" target="_blank" class="btn btn-primary">
                      <?php echo $lang_data['portfolio_view_project']; ?>
                    </a>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="portfolio-image">
                    <img src="assets/images/vignettes/portfolio-project.jpg"
                      alt="<?php echo $lang_data['portfolio_project8_title']; ?>">
                  </div>
                  <div class="portfolio-content">
                    <h3>
                      <?php echo $lang_data['portfolio_project8_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['portfolio_project8_description']; ?>
                    </p>
                    <div class="portfolio-technologies">
                      <?php echo $lang_data['portfolio_project8_technologies']; ?>
                    </div>
                    <a href="https://portfolio.3rosesmenage.net/" target="_blank" class="btn btn-primary">
                      <?php echo $lang_data['portfolio_view_project']; ?>
                    </a>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="portfolio-image">
                    <img src="assets/images/vignettes/edificesbrillants-project.jpg"
                      alt="<?php echo $lang_data['portfolio_project9_title']; ?>">
                  </div>
                  <div class="portfolio-content">
                    <h3>
                      <?php echo $lang_data['portfolio_project9_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['portfolio_project9_description']; ?>
                    </p>
                    <div class="portfolio-technologies">
                      <?php echo $lang_data['portfolio_project9_technologies']; ?>
                    </div>
                    <a href="https://edificesbrillants.com/" target="_blank" class="btn btn-primary">
                      <?php echo $lang_data['portfolio_view_project']; ?>
                    </a>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="portfolio-image">
                    <img src="assets/images/vignettes/groupbelsa-project.jpg"
                      alt="<?php echo $lang_data['portfolio_project10_title']; ?>">
                  </div>
                  <div class="portfolio-content">
                    <h3>
                      <?php echo $lang_data['portfolio_project10_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['portfolio_project10_description']; ?>
                    </p>
                    <div class="portfolio-technologies">
                      <?php echo $lang_data['portfolio_project10_technologies']; ?>
                    </div>
                    <a href="https://groupbelsa.com/" target="_blank" class="btn btn-primary">
                      <?php echo $lang_data['portfolio_view_project']; ?>
                    </a>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="portfolio-image">
                    <img src="assets/images/vignettes/tik-project.jpg"
                      alt="<?php echo $lang_data['portfolio_project11_title']; ?>">
                  </div>
                  <div class="portfolio-content">
                    <h3>
                      <?php echo $lang_data['portfolio_project11_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['portfolio_project11_description']; ?>
                    </p>
                    <div class="portfolio-technologies">
                      <?php echo $lang_data['portfolio_project11_technologies']; ?>
                    </div>
                    <a href="docs/Tik-App.pdf" target="_blank" class="btn btn-primary">
                      <?php echo $lang_data['portfolio_view_project']; ?>
                    </a>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="portfolio-image">
                    <img src="assets/images/vignettes/at-project.jpg"
                      alt="<?php echo $lang_data['portfolio_project12_title']; ?>">
                  </div>
                  <div class="portfolio-content">
                    <h3>
                      <?php echo $lang_data['portfolio_project12_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['portfolio_project12_description']; ?>
                    </p>
                    <div class="portfolio-technologies">
                      <?php echo $lang_data['portfolio_project12_technologies']; ?>
                    </div>
                    <a href="https://github.com/biko2020?tab=repositories" target="_blank" class="btn btn-primary">
                      <?php echo $lang_data['portfolio_view_project']; ?>
                    </a>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="portfolio-image">
                    <img src="assets/images/vignettes/tik-mobile-project.jpg"
                      alt="<?php echo $lang_data['portfolio_project13_title']; ?>">
                  </div>
                  <div class="portfolio-content">
                    <h3>
                      <?php echo $lang_data['portfolio_project13_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['portfolio_project13_description']; ?>
                    </p>
                    <div class="portfolio-technologies">
                      <?php echo $lang_data['portfolio_project13_technologies']; ?>
                    </div>
                    <a href="docs/Tik-App.pdf" target="_blank" class="btn btn-primary">
                      <?php echo $lang_data['portfolio_view_project']; ?>
                    </a>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="portfolio-image">
                    <img src="assets/images/vignettes/sogf-project.jpg"
                      alt="<?php echo $lang_data['portfolio_project14_title']; ?>">
                  </div>
                  <div class="portfolio-content">
                    <h3>
                      <?php echo $lang_data['portfolio_project14_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['portfolio_project14_description']; ?>
                    </p>
                    <div class="portfolio-technologies">
                      <?php echo $lang_data['portfolio_project14_technologies']; ?>
                    </div>
                    <a href="https://github.com/biko2020?tab=repositories" target="_blank" class="btn btn-primary">
                      <?php echo $lang_data['portfolio_view_project']; ?>
                    </a>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="portfolio-image">
                    <img src="assets/images/vignettes/gemap-project.jpg"
                      alt="<?php echo $lang_data['portfolio_project15_title']; ?>">
                  </div>
                  <div class="portfolio-content">
                    <h3>
                      <?php echo $lang_data['portfolio_project15_title']; ?>
                    </h3>
                    <p>
                      <?php echo $lang_data['portfolio_project15_description']; ?>
                    </p>
                    <div class="portfolio-technologies">
                      <?php echo $lang_data['portfolio_project15_technologies']; ?>
                    </div>
                    <a href="https://github.com/biko2020?tab=repositories" target="_blank" class="btn btn-primary">
                      <?php echo $lang_data['portfolio_view_project']; ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="static-background">
            <h1>Solutions personnalisées pour votre secteur d'activité !</h1>
          </section>

          <section id="about-me">
            <div class="container">
              <h2>
                <?php echo $lang_data['about_title']; ?>
              </h2>
              <div class="about-content">
                <div class="intro">
                  <h3>
                    <?php echo $lang_data['about_subtitle']; ?>
                  </h3>
                  <p>
                    <?php echo $lang_data['about_description_paragraph1']; ?>
                  </p>
                  <p>
                    <?php echo $lang_data['about_description_paragraph2']; ?>
                  </p>
                  <p>
                    <?php echo $lang_data['about_description_paragraph3']; ?>
                  </p>
                  <p>
                    <?php echo $lang_data['about_description_paragraph4']; ?>
                  </p>
                  <p>
                    <strong>
                      <?php echo $lang_data['about_contact_message']; ?>
                    </strong>
                  </p>
                </div>
                <div class="skills">
                  <h3>
                    <?php echo $lang_data['about_key_skills_title']; ?>
                  </h3>
                  <ul>
                    <li><strong>
                        <?php echo $lang_data['about_skill_1_title']; ?>
                      </strong>
                      <?php echo $lang_data['about_skill_1_description']; ?>
                    </li>
                    <li><strong>
                        <?php echo $lang_data['about_skill_2_title']; ?>
                      </strong>
                      <?php echo $lang_data['about_skill_2_description']; ?>
                    </li>
                    <li><strong>
                        <?php echo $lang_data['about_skill_3_title']; ?>
                      </strong>
                      <?php echo $lang_data['about_skill_3_description']; ?>
                    </li>
                    <li><strong>
                        <?php echo $lang_data['about_skill_4_title']; ?>
                      </strong>
                      <?php echo $lang_data['about_skill_4_description']; ?>
                    </li>
                    <li><strong>
                        <?php echo $lang_data['about_skill_5_title']; ?>
                      </strong>
                      <?php echo $lang_data['about_skill_5_description']; ?>
                    </li>
                    <li><strong>
                        <?php echo $lang_data['about_skill_6_title']; ?>
                      </strong>
                      <?php echo $lang_data['about_skill_6_description']; ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>

          <section id="contact">
            <div class="container">
              <h2>
                <?php echo $lang_data['contact_title']; ?>
              </h2>
              <p class="contact-subtitle">
                <?php echo $lang_data['contact_description']; ?>
              </p>

              <div class="contact-info">
                <div class="contact-info-item">
                  <i class="fas fa-phone"></i>
                  <h3>
                    <?php echo $lang_data['contact_phone_label']; ?>
                  </h3>
                  <p>
                    <?php echo $lang_data['contact_phone']; ?>
                  </p>
                </div>
                <div class="contact-info-item">
                  <i class="fas fa-envelope"></i>
                  <h3>
                    <?php echo $lang_data['contact_email_label']; ?>
                  </h3>
                  <p>
                    <?php echo $lang_data['contact_email']; ?>
                  </p>
                </div>
              </div>

              <form class="contact-form" action="send_message.php" method="post">
                <input type="text" name="name" placeholder="<?php echo $lang_data['contact_form_name']; ?>" required>
                <input type="email" name="email" placeholder="<?php echo $lang_data['contact_form_email']; ?>" required>
                <textarea name="message" placeholder="<?php echo $lang_data['contact_form_message']; ?>"
                  required></textarea>
                <button type="submit" class="btn-submit">
                  <?php echo $lang_data['contact_form_submit']; ?>
                </button>
              </form>
            </div>
          </section>
        </div>
      </main>

      <footer>
        <div class="footer-content">
          <div class="footer-section">
            <h4>
              <?php echo $lang_data['footer_quick_links']; ?>
            </h4>
            <ul class="footer-links">
              <li><a href="#about-me">
                  <?php echo $lang_data['footer_menu_about']; ?>
                </a></li>
              <li><a href="#portfolio">
                  <?php echo $lang_data['footer_menu_portfolio']; ?>
                </a></li>
              <li><a href="#contact">
                  <?php echo $lang_data['footer_menu_contact']; ?>
                </a></li>
            </ul>
          </div>
          <div class="footer-section">
            <h4>
              <?php echo $lang_data['footer_social_connect']; ?>
            </h4>
            <div class="social-icons">
              <a href="https://www.linkedin.com/in/brahim-aitoufkir-74506021a/" target="_blank" aria-label="LinkedIn">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="https://github.com/biko2020" target="_blank" aria-label="GitHub">
                <i class="fab fa-github"></i>
              </a>
              <a href="https://x.com/AitOufkir" target="_blank" aria-label="Twitter">
                <i class="fab fa-twitter"></i>
              </a>
            </div>
          </div>
          <div class="footer-section">
            <a href="formation/index.php">
              <h4>
                <?php echo $lang_data['footer_mentions_formation']; ?>
              </h4>
            </a>

            <ul class="footer-links">
              <li><a href="#">
                  <?php echo $lang_data['footer_en_ligne']; ?>
                </a></li>
              <li><a href="#">
                  <?php echo $lang_data['footer_en_entreprise']; ?>
                </a></li>
              <li><a href="#">
                  <?php echo $lang_data['footer_lieu_public']; ?>
                </a></li>
            </ul>
          </div>
        </div>

        <!-- New Footer Menu -->
        <nav class="footer-menu">
          <div class="footer-menu-item">
            <a href="#skills">
              <?php echo $lang_data['footer_skills']; ?>
            </a>
          </div>
          <div class="footer-menu-item">
            <a href="#testimonials">
              <?php echo $lang_data['footer_testimonials']; ?>
            </a>
          </div>
          <div class="footer-menu-item">
            <a href="docs/cv.pdf" download>
              <?php echo $lang_data['footer_download_cv']; ?>
            </a>
          </div>
        </nav>

        <div class="footer-bottom">
          <?php echo $lang_data['footer_copyright']; ?>
        </div>
      </footer>

    </div>
  </div>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/animations.js"></script>
</body>

</html>