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
  <script src="https://cdn.jsdelivr.net/npm/mermaid/dist/mermaid.min.js"></script>
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

      <main id="main">
        <div class="learning-container">

          <!-- PROJECT-->
          <section class="learning-module">
            <div class="learning-header-row padding-top-90">
              <div class="learning-column">
                <header class="learning-section-header">
                  <div class="learning-heading">
                    <h1 class="learning-title text-capitalize font-medium">
                      <?php echo $lang_data['powerbi_learning_title']; ?>
                    </h1>
                    <hr>
                  </div>
                </header>
              </div>
            </div>
            <section class="learning-media padding-bottom-30">
              <div class="learning-media-row">
                <div class="learning-media-column">
                  <img src="../../assets/images/PowerBI-logo.png" alt="PowerBI" class="learning-image img-responsive" width="100" height="100" />
                </div>
              </div>
            </section>
            <div class="learning-description-row">
              <div class="learning-full-width">
                <h2 class="learning-subtitle">
                  <?php echo $lang_data['powerbi_project_title']; ?>
                </h2>
                <p class="learning-description">
                  <?php echo $lang_data['powerbi_project_description']; ?>
                </p>
                <hr />
                <h3 class="learning-subtitle">
                  <?php echo $lang_data['powerbi_project_steps_title']; ?>
                </h3>
                <ul class="learning-list list-style4">
                  <li><a href="powerBI.php#Comparaison"><strong>1- <?php echo $lang_data['powerbi_step_comparison']; ?></strong></a></li>
                  <li><a href="powerBI.php#Install-PowerBI"><strong>2- <?php echo $lang_data['powerbi_step_install']; ?></strong></a></li>
                  <li><a href="powerBI.php#Diagrammes"><strong>3- <?php echo $lang_data['powerbi_step_diagrams']; ?></strong></a></li>
                  <li><a href="powerBI.php#DataCollection"><strong>4- <?php echo $lang_data['powerbi_step_data_collection']; ?></strong></a></li>
                  <li><a href="powerBI.php#DataCleaning"><strong>5- <?php echo $lang_data['powerbi_step_data_cleaning']; ?></strong></a></li>
                  <li><a href="powerBI.php#DataAnalyse"><strong>6- <?php echo $lang_data['powerbi_step_data_analysis']; ?></strong></a></li>
                  <li><a href="powerBI.php#DataModelisation"><strong>7- <?php echo $lang_data['powerbi_step_data_modeling']; ?></strong></a></li>
                  <li><a href="powerBI.php#DataVisualisation"><strong>8- <?php echo $lang_data['powerbi_step_data_visualization']; ?></strong></a></li>
                  <li><a href="powerBI.php#DataDecision"><strong>9- <?php echo $lang_data['powerbi_step_decision_making']; ?></strong></a></li>
                </ul>
              </div>
            </div>
          </section>

          <!--Comparison Section-->
          <section id="Comparaison" class="learning-module">
            <div class="learning-row">
              <div class="learning-full-width">
                <p class="learning-section-title"><span class="learning-module-title">
                    <?php echo $lang_data['powerbi_comparison_title']; ?>
                  </span></p>
                
                <div class="learning-description-section">
                  <h2 class="learning-subtitle"><?php echo $lang_data['powerbi_desktop_title']; ?></h2>
                  <p class="learning-description">
                    <strong><?php echo $lang_data['powerbi_desktop_free_app']; ?></strong>
                    <?php echo $lang_data['powerbi_desktop_description']; ?>
                  </p>
                  <p class="learning-description">
                    <strong><?php echo $lang_data['powerbi_desktop_flexibility_title']; ?></strong>
                    <?php echo $lang_data['powerbi_desktop_flexibility_description']; ?>
                  </p>
                  <!-- Add more learning-description paragraphs as needed -->
                </div>

                <div class="learning-description-section">
                  <h2 class="learning-subtitle"><?php echo $lang_data['powerbi_service_title']; ?></h2>
                  <p class="learning-description">
                    <strong><?php echo $lang_data['powerbi_service_cloud_title']; ?></strong>
                    <?php echo $lang_data['powerbi_service_description']; ?>
                  </p>
                  <!-- Add more learning-description paragraphs as needed -->
                </div>
              </div>
            </div>
          </section>

          <!--Install PowerBI Section-->
          <section id="Install-PowerBI" class="learning-module">
            <div class="learning-row">
              <div class="learning-full-width">
                <p class="learning-section-title"><span class="learning-module-title">
                    <?php echo $lang_data['powerbi_install_title']; ?>
                  </span></p>
                
                <p class="learning-description">
                  <?php echo $lang_data['powerbi_install_description']; ?>
                </p>
              </div>
            </div>
          </section>

          <!--Diagrammes Section-->
          <section id="Diagrammes" class="learning-module">
            <div class="learning-row">
              <div class="learning-full-width">
                <p class="learning-section-title"><span class="learning-module-title">
                    <?php echo $lang_data['powerbi_diagrams_title']; ?>
                  </span></p>
                
                <div class="learning-description-section">
                  <h2 class="learning-subtitle"><?php echo $lang_data['powerbi_diagrams_subtitle']; ?></h2>
                  <pre class="mermaid">
                    flowchart TB
                      subgraph **Collecte des données**
                          A(Ventes en magasin)
                          B(Ventes en ligne)
                          C(Retours)
                      end
                  
                      subgraph **Analyse exploratoire**
                          D(Analyse par produit)
                          E(Analyse par région)
                          F(Analyse par saison)
                      end
                  
                      subgraph **Modélisation**
                          G(Régression linéaire)
                          H(Forêts aléatoires)
                      end
                  
                      A --> B --> C --> D
                      D --> E --> F
                      F --> G
                      F --> H
                      G --> I(Visualisation)
                      H --> I
                      I --> J(Prise de décision)
                  </pre>
                </div>
              </div>
            </div>
          </section>

          <!--Collecte des données Section-->
          <section id="DataCollection" class="learning-module">
            <div class="learning-row">
              <div class="learning-full-width">
                <p class="learning-section-title"><span class="learning-module-title">
                    <?php echo $lang_data['powerbi_data_collection_title']; ?>
                  </span></p>
                
                <div class="learning-description-section">
                  <h2 class="learning-subtitle"><?php echo $lang_data['powerbi_data_collection_subtitle']; ?></h2>
                  <p class="learning-description">
                    <?php echo $lang_data['powerbi_data_collection_description']; ?>
                  </p>
                  <h3 class="learning-subtitle"><?php echo $lang_data['powerbi_data_collection_database_title']; ?></h3>
                  <pre class="mermaid">
                    erDiagram
                      PRODUITS {
                          string ID_Produit PK "Primary Key"
                          string Nom_Produit
                          string ID_Categorie FK "Foreign Key"
                          float Prix_Achat
                          float Prix_Vente
                          float Marge
                          string ID_Fournisseur FK "Foreign Key"
                      }
      
                      CATEGORIE {
                          string ID_Categorie PK "Primary Key"
                          string Libelle_Categorie
                      }
      
                      CLIENTS {
                          string ID_Client PK "Primary Key"
                          string Nom
                          string Prenom
                          string Adresse
                          string Email
                          string Telephone
                          date Date_Naissance
                          string Carte_Fidelite
                          float Note_Satisfaction
                          float Panier_moyen
                      }
      
                      COMMANDES {
                          string ID_Commande PK "Primary Key"
                          string ID_Client FK "Foreign Key"
                          date Date_Commande
                          float Montant_Total
                          string Mode_Paiement
                      }
      
                      LIGNES_COMMANDE {
                          string ID_Ligne_Commande PK "Primary Key"
                          string ID_Commande FK "Foreign Key"
                          string ID_Produit FK "Foreign Key"
                          int Quantite_Commandee
                          float Prix_Unitaire
                      }
      
                      VENTES {
                          string ID_Vente PK "Primary Key"
                          string ID_Produit FK "Foreign Key"
                          date Date_Vente
                          int Quantite_Vendue
                          float Montant_Total
                      }
      
                      FOURNISSEURS {
                          string ID_Fournisseur PK "Primary Key"
                          string Nom_Fournisseur
                          string Categorie_Produit
                          string Adresse
                          string Ville
                          string Code_Postal
                          string Localisation
                      }
      
                      STOCKS {
                          string ID_Stock PK "Primary Key"
                          string ID_Produit FK "Foreign Key"
                          int Quantite_En_Stock
                          date Date_Mise_A_Jour
                      }
      
                      PRODUITS ||--o{ CATEGORIE : "Reference"
                      PRODUITS ||--o{ FOURNISSEURS : "Reference"
                      CLIENTS ||--o{ COMMANDES : "Reference"
                      COMMANDES ||--o{ LIGNES_COMMANDE : "Contient"
                      PRODUITS ||--o{ LIGNES_COMMANDE : "Reference"
                      PRODUITS ||--o{ VENTES : "Reference"
                      PRODUITS ||--o{ STOCKS : "Reference"
                  </pre>
                  <h3 class="learning-subtitle"><?php echo $lang_data['powerbi_data_collection_excel_title']; ?></h3>
                  <iframe class="responsive-iframe"
                    src="https://docs.google.com/spreadsheets/d/19bTNvAv2YBKdNvquQ1C-z0hIMHFPJCIB-Wn3HdSe0VE/edit?usp=sharing"
                    width="1178" height="800"></iframe>
                </div>
              </div>
            </div>
          </section>

          <!--Nettoyage des données Section-->
          <section id="DataCleaning" class="learning-module">
            <div class="learning-row">
              <div class="learning-full-width">
                <p class="learning-section-title"><span class="learning-module-title">
                    <?php echo $lang_data['powerbi_data_cleaning_title']; ?>
                  </span></p>
                
                <div class="learning-description-section">
                  <h2 class="learning-subtitle"><?php echo $lang_data['powerbi_data_cleaning_subtitle']; ?></h2>
                  <p class="learning-description">
                    <?php echo $lang_data['powerbi_data_cleaning_description']; ?>
                  </p>
                  <iframe class="responsive-iframe" width="560" height="315" src="https://www.youtube.com/embed/gYs1-0euTSQ"
                    title="Fractionner le Texte" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </section>

          <!--Analyse exploratoire Section-->
          <section id="DataAnalyse" class="learning-module">
            <div class="learning-row">
              <div class="learning-full-width">
                <p class="learning-section-title"><span class="learning-module-title">
                    <?php echo $lang_data['powerbi_data_analysis_title']; ?>
                  </span></p>
                
                <div class="learning-description-section">
                  <h2 class="learning-subtitle"><?php echo $lang_data['powerbi_data_analysis_subtitle']; ?></h2>
                  <p class="learning-description">
                    <?php echo $lang_data['powerbi_data_analysis_description']; ?>
                  </p>
                  <p class="learning-description">
                    <strong><?php echo $lang_data['powerbi_data_analysis_understand_data_title']; ?></strong>
                    <?php echo $lang_data['powerbi_data_analysis_understand_data_description']; ?>
                  </p>
                  <p class="learning-description">
                    <strong><?php echo $lang_data['powerbi_data_analysis_identify_trends_title']; ?></strong>
                    <?php echo $lang_data['powerbi_data_analysis_identify_trends_description']; ?>
                  </p>
                  <p class="learning-description">
                    <strong><?php echo $lang_data['powerbi_data_analysis_discover_relationships_title']; ?></strong>
                    <?php echo $lang_data['powerbi_data_analysis_discover_relationships_description']; ?>
                  </p>
                  <p class="learning-description">
                    <strong><?php echo $lang_data['powerbi_data_analysis_formulate_hypotheses_title']; ?></strong>
                    <?php echo $lang_data['powerbi_data_analysis_formulate_hypotheses_description']; ?>
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!--Modélisation Section-->
          <section id="DataModelisation" class="learning-module">
            <div class="learning-row">
              <div class="learning-full-width">
                <p class="learning-section-title"><span class="learning-module-title">
                    <?php echo $lang_data['powerbi_data_modeling_title']; ?>
                  </span></p>
                
                <div class="learning-description-section">
                  <h2 class="learning-subtitle"><?php echo $lang_data['powerbi_data_modeling_subtitle']; ?></h2>
                  <p class="learning-description">
                    <?php echo $lang_data['powerbi_data_modeling_description']; ?>
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!--Visualisation Section-->
          <section id="DataVisualisation" class="learning-module">
            <div class="learning-row">
              <div class="learning-full-width">
                <p class="learning-section-title"><span class="learning-module-title">
                    <?php echo $lang_data['powerbi_data_visualization_title']; ?>
                  </span></p>
                
                <div class="learning-description-section">
                  <h2 class="learning-subtitle"><?php echo $lang_data['powerbi_data_visualization_subtitle']; ?></h2>
                  <p class="learning-description">
                    <?php echo $lang_data['powerbi_data_visualization_description']; ?>
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!--Prise de décision Section-->
          <section id="DataDecision" class="learning-module">
            <div class="learning-row">
              <div class="learning-full-width">
                <p class="learning-section-title"><span class="learning-module-title">
                    <?php echo $lang_data['powerbi_decision_making_title']; ?>
                  </span></p>
                
                <div class="learning-description-section">
                  <h2 class="learning-subtitle"><?php echo $lang_data['powerbi_decision_making_subtitle']; ?></h2>
                  <p class="learning-description">
                    <?php echo $lang_data['powerbi_decision_making_description']; ?>
                  </p>
                </div>
              </div>
            </div>
          </section>
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