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
    <link rel="icon" type="image/png" href="assets/images/favicon.png" />
</head>

<body>
    <div id="wrapper">
        <div class="site-content">
            <header>
                <div class="header-container">
                    <div class="top-bar-container">
                        <div class="row">
                            <div class="col-xs-12 header-top">
                                <ul class="list-inline info-list">
                                    <li>
                                        <a href="tel:&#43;&#50;&#49;&#50;&#54;&#54;&#51;&#56;&#50;&#56;&#52;&#48;&#53;">
                                            <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" alt="Phone"
                                                width="21" height="21"> &nbsp;
                                            &#43;&#50;&#49;&#50;&#54;&#54;&#51;&#56;&#50;&#56;&#52;&#48;&#53;
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="mailto:&#97;&#105;&#116;&#111;&#117;&#102;&#107;&#105;&#114;&#98;&#114;&#97;&#104;&#105;&#109;&#97;&#98;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;">
                                            <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png"
                                                alt="Envelope" width="21" height="21" style="filter: invert(100%);">
                                            &nbsp;
                                            &#97;&#105;&#116;&#111;&#117;&#102;&#107;&#105;&#114;&#98;&#114;&#97;&#104;&#105;&#109;&#97;&#98;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;
                                        </a>
                                    </li>
                                </ul>
                                <div id="social-links">
                                    <a href="https://www.linkedin.com/in/brahim-aitoufkir-74506021a" target="_blank">
                                        <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png"
                                            alt="LinkedIn Profile" width="21" height="21">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav>
                        <div class="logo">
                            <a href="index.php">
                                <img src="<?php echo $img_data['picture']; ?>" alt="AIT OUFKIR BRAHIM" width="50"
                                    height="50" />
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
                            <li><a href="#about">
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
                        <img src="assets/images/slide1.jpg" alt="ANALYSTE-PROGRAMMEUR SENIOR"
                            data-bgposition="left center" data-kenburns="on" data-duration="14000"
                            data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130"
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


                    <section id="portfolio">
                        <h2>
                            <?php echo $lang_data['portfolio_title']; ?>
                        </h2>
                        <!-- Portfolio projects -->
                    </section>

                    <section id="about">
                        <h2>
                            <?php echo $lang_data['about_title']; ?>
                        </h2>
                        <!-- About me content -->
                    </section>

                    <section id="contact">
                        <h2>
                            <?php echo $lang_data['contact_title']; ?>
                        </h2>
                        <form method="post">
                            <!-- Contact form fields -->
                        </form>
                    </section>
                </div>
            </main>

            <footer>
                <div class="footer-container">
                    <p>&copy;
                        <?php echo date('Y') . ' ' . $lang_data['name']; ?>
                    </p>
                </div>
            </footer>

        </div>
    </div>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/animations.js"></script>
</body>

</html>