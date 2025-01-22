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
      <?php require_once BASE_DIR . '../includes/header.php';?>

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
                      <?php echo $lang_data['sql_learning_title']; ?>
                    </h1>
                    <hr>
                  </div>
                </header>
              </div>
            </div>
            <section class="learning-media padding-bottom-30">
              <div class="learning-media-row">
                <div class="learning-media-column">
                  <img src="../../assets/images/Sql-logo.png" alt="SQL" class="learning-image img-responsive" width="100" height="100" />
                </div>
              </div>
            </section>
            <div class="learning-description-row">
              <div class="learning-full-width">
                <h2 class="learning-subtitle">
                  <?php echo $lang_data['sql_about_course_title']; ?>
                </h2>
                <p class="learning-description">
                  <?php echo $lang_data['sql_course_description']; ?>
                </p>
                <hr />
                <h3 class="learning-subtitle">
                  <?php echo $lang_data['sql_programs_title']; ?>
                </h3>
                <ul class="learning-list list-style4">
                  <li><a href="sql.php#CreateSQL"><strong>
                        <?php echo $lang_data['sql_create_database_title']; ?>
                      </strong></a></li>
                  <li><a href="sql.php#InsertSQL"><strong>
                        <?php echo $lang_data['sql_data_transfer_title']; ?>
                      </strong></a></li>
                </ul>
              </div>
            </div>
          </section>

          <!--Créer une base de données -->
          <section id="CreateSQL" class="learning-module">
            <div class="learning-row">
              <div class="learning-full-width">
                <p class="learning-section-title"><span class="learning-module-title">
                    <?php echo $lang_data['sql_create_database_title']; ?>
                  </span></p>
                <h2 class="learning-subtitle">Introduction</h2>
                <p class="learning-description">
                  <?php echo $lang_data['sql_create_database_intro']; ?>
                </p>
                <hr />
                <iframe class="responsive-iframe" width="560" height="315" src="https://www.youtube.com/embed/kU3iGFDQaFg"
                  title="Créer une base de données" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>

                <div class="learning-exercise">
                  <h2 class="learning-subtitle">Tables</h2>
                  <p class="learning-description">
                    <?php echo $lang_data['sql_tables_description']; ?>
                  </p>
                  <?php foreach ($lang_data['sql_tables'] as $table): ?>
                  <span class="learning-description"> <span class="learning-output-leftSpace">-
                      <?php echo $table; ?>
                    </span> </span>
                  <br>
                  <?php endforeach; ?>
                </div>

              </div>
            </div>
          </section>

          <hr />

          <!--Créer une base de données -->
          <section id="CreateSQL" class="learning-module">
  <div class="learning-row">
    <div class="learning-full-width">
      <p class="learning-section-title">
        <span class="learning-module-title">
          <?php echo $lang_data['sql_create_database_title']; ?>
        </span>
      </p>
      <h2 class="learning-subtitle">1- Création de la base de données</h2>
      <div class="console">
        <div class="console-header">
          <span class="console-title"> SQL Console</span>
        </div>
        <div class="console-body">
          <code>
            <span class="keyword">CREATE DATABASE</span> <span class="datatype">VenteAuDetail</span>;<br>
            <span class="keyword">USE</span> <span class="datatype">VenteAuDetail</span>;
          </code>
        </div>
      </div>

      <h2 class="learning-subtitle">2- Création de la table Clients</h2>
      <div class="console">
        <div class="console-header">
          <span class="console-title">SQL Console</span>
        </div>
        <div class="console-body">
          <code>
            <span class="keyword">CREATE TABLE</span> <span class="identifier">Clients</span> (<br>
              &nbsp;&nbsp;<span class="field">Client_ID</span> <span class="datatype">INT</span> <span class="keyword">PRIMARY KEY</span>,<br>
              &nbsp;&nbsp;<span class="field">Nom</span> <span class="datatype">VARCHAR(100)</span>,<br>
              &nbsp;&nbsp;<span class="field">Age</span> <span class="datatype">INT</span>,<br>
              &nbsp;&nbsp;<span class="field">Genre</span> <span class="datatype">CHAR(1)</span>,<br>
              &nbsp;&nbsp;<span class="field">Ville</span> <span class="datatype">VARCHAR(100)</span><br>
            );
          </code>
        </div>
      </div>


      <h2 class="learning-subtitle">3- Création de la table Produits</h2>
      <div class="console">
        <div class="console-header">
          <span class="console-title">SQL Console</span>
        </div>
        <div class="console-body">
          <code>
            <span class="keyword">CREATE TABLE</span> <span class="identifier">Produits</span> (<br>
            &nbsp;&nbsp;<span class="field">Produit_ID</span> <span class="datatype">INT</span> <span class="keyword">PRIMARY KEY</span>,<br>
            &nbsp;&nbsp;<span class="field">Nom_Produit</span> <span class="datatype">VARCHAR(100)</span>,<br>
            &nbsp;&nbsp;<span class="field">Categorie</span> <span class="datatype">VARCHAR(50)</span>,<br>
            &nbsp;&nbsp;<span class="field">Prix_Unitaire</span> <span class="datatype">DECIMAL(10, 2)</span>,<br>
            &nbsp;&nbsp;<span class="field">Stock</span> <span class="datatype">INT</span><br>
            );
          </code>
        </div>
      </div>


      <h2 class="learning-subtitle">4- Création de la table Ventes</h2>
      <div class="console">
        <div class="console-header">
          <span class="console-title">SQL Console</span>
        </div>
        <div class="console-body">
          <code>
            <span class="keyword">CREATE TABLE</span> <span class="identifier">Ventes</span> (<br>
            &nbsp;&nbsp;<span class="field">Vente_ID</span> <span class="datatype">INT</span> <span class="keyword">PRIMARY KEY</span>,<br>
            &nbsp;&nbsp;<span class="field">Date</span> <span class="datatype">DATE</span> <span class="keyword">NOT NULL</span>,<br>
            &nbsp;&nbsp;<span class="field">Client_ID</span> <span class="datatype">INT</span>,<br>
            &nbsp;&nbsp;<span class="field">Produit_ID</span> <span class="datatype">INT</span>,<br>
            &nbsp;&nbsp;<span class="field">QUantite</span> <span class="datatype">INT</span>,<br>
            &nbsp;&nbsp;<span class="field">Prix_Unitaire</span> <span class="datatype">DECIMAL(10, 2)</span>,<br>
            &nbsp;&nbsp;<span class="field">Montant_Total</span> <span class="datatype">DECIMAL(10, 2)</span>,<br>
            &nbsp;&nbsp;<span class="keyword">FOREIGN KEY</span> <span class="field">(Client_ID)</span> <span class="keyword">REFERENCES</span> <span class="field">Clients(Client_ID)</span>,<br>
            &nbsp;&nbsp;<span class="keyword">FOREIGN KEY</span> <span class="field">(Produit_ID)</span> <span class="keyword">REFERENCES</span> <span class="field">Produits(Produit_ID)</span><br>
            );
          </code>
        </div>
      </div>


      <h2 class="learning-subtitle">5- Création de la table Satisfaction_Client</h2>
      <div class="console">
        <div class="console-header">
          <span class="console-title">SQL Console</span>
        </div>
        <div class="console-body">
          <code>
            <span class="keyword">CREATE TABLE</span> <span class="identifier">Satisfaction_Client</span> (<br>
            &nbsp;&nbsp;<span class="field">Satisfaction_ID</span> <span class="datatype">INT</span> <span class="keyword">PRIMARY KEY</span>,<br>
            &nbsp;&nbsp;<span class="field">Client_ID</span> <span class="datatype">INT</span>,<br>
            &nbsp;&nbsp;<span class="field">Vente_ID</span> <span class="datatype">INT</span>,<br>
            &nbsp;&nbsp;<span class="field">Evaluation</span> <span class="datatype">INT</span> <span class="keyword">CHECK</span> <span class="field">(Evaluation</span> <span class="keyword">BETWEEN</span> <span class="datatype">1</span> <span class="keyword">AND</span> <span class="datatype">5</span> <span class="field">)</span>,<br>
            &nbsp;&nbsp;<span class="field">Commentaires</span> <span class="datatype">TEXT</span>,<br>
            &nbsp;&nbsp;<span class="keyword">FOREIGN KEY</span> <span class="field">(Client_ID)</span> <span class="keyword">REFERENCES</span> <span class="field">Clients(Client_ID)</span>,<br>
            &nbsp;&nbsp;<span class="keyword">FOREIGN KEY</span> <span class="field">(Vente_ID)</span> <span class="keyword">REFERENCES</span> <span class="field">Ventes(Vente_ID)</span><br>
            );
            
          </code>
        </div>
      </div>
    </div>
  </div>
</section>

          <!--Créer une base de données -->
          <section id="InsertSQL" class="learning-module">
            <div class="learning-row">
              <div class="learning-full-width">
                <p class="learning-section-title"><span class="learning-module-title">
                    <?php echo $lang_data['sql_data_transfer_title']; ?>
                  </span></p>
                <h2 class="learning-subtitle">Transférer les données d'un fichier Excel vers une base de données MySQL.</h2>
                <iframe class="responsive-iframe" width="560" height="315" src="https://www.youtube.com/embed/T11LZ7csPyY"
                  title="Fractionner le Texte" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
            </div>
          </section>

        </div>

        <?php
require_once BASE_DIR . '../includes/footer.php';
?>
    </div>
  </div>
  <script src="../../assets/js/main.js"></script>
  <script src="../../assets/js/formations.js"></script>
</body>

</html>