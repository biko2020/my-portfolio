<?php
session_start();
// Set default language
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';
require_once 'includes/lang/' . $lang . '.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang_data['page_title']; ?></title>
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
                                                width="21" height="21">  &nbsp;
                                            &#43;&#50;&#49;&#50;&#54;&#54;&#51;&#56;&#50;&#56;&#52;&#48;&#53;
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="mailto:&#97;&#105;&#116;&#111;&#117;&#102;&#107;&#105;&#114;&#98;&#114;&#97;&#104;&#105;&#109;&#97;&#98;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;">
                                            <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png"
                                                alt="Envelope" width="21" height="21" style="filter: invert(100%);"> &nbsp;
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
                           <img src="<?php echo $img_data['picture']; ?>" alt="AIT OUFKIR BRAHIM" width="50" height="50" />
                        </div>
                        <ul>
                            <li><a href="#services"><?php echo $lang_data['menu_services']; ?></a></li>
                            <li><a href="#skills"><?php echo $lang_data['menu_skills']; ?></a></li>
                            <li><a href="#portfolio"><?php echo $lang_data['menu_portfolio']; ?></a></li>
                            <li><a href="#about"><?php echo $lang_data['menu_about']; ?></a></li>
                            <li><a href="#contact"><?php echo $lang_data['menu_contact']; ?></a></li>
                        </ul>
                        <div class="language-switcher">
                            <a href="?lang=fr">FR</a>
                            <a href="?lang=en">EN</a>
                        </div>
                    </nav>
                </div>
            </header>

            <div class="slider">
            </div>

            <main>
                <div class="main-container">
                    <section id="services">
                        <h2><?php echo $lang_data['services_title']; ?></h2>
                        <!-- Services content -->
                    </section>

                    <section id="skills">
                        <h2><?php echo $lang_data['skills_title']; ?></h2>
                        <!-- Skills content -->
                    </section>

                    <section id="portfolio">
                        <h2><?php echo $lang_data['portfolio_title']; ?></h2>
                        <!-- Portfolio projects -->
                    </section>

                    <section id="about">
                        <h2><?php echo $lang_data['about_title']; ?></h2>
                        <!-- About me content -->
                    </section>

                    <section id="contact">
                        <h2><?php echo $lang_data['contact_title']; ?></h2>
                        <form method="post">
                            <!-- Contact form fields -->
                        </form>
                    </section>
                </div>
            </main>

            <footer>
                <div class="footer-container">
                    <p>&copy; <?php echo date('Y') . ' ' . $lang_data['name']; ?></p>
                </div>
            </footer>

        </div>
    </div>
    <script src="assets/js/main.js"></script>
</body>

</html>