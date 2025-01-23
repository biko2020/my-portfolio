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
                      <?php echo $lang_data['python_learning_title']; ?>
                    </h1>
                    <hr>
                  </div>
                </header>
              </div>
            </div>
            <section class="learning-media padding-bottom-30">
              <div class="learning-media-row">
                <div class="learning-media-column">
                  <img src="../../assets/images/Python-logo.png" alt="Python"
                    class="learning-image learning-image img-responsive" width="100" height="100" />
                </div>
              </div>
            </section>
            <div class="learning-description-row">
              <div class="learning-full-width">
                <h2 class="learning-subtitle">
                  <?php echo $lang_data['python_about_course_title']; ?>
                </h2>
                <p class="learning-description">
                  <?php echo $lang_data['python_module1_description']; ?>
                </p>
                <hr />
                <h3 class="learning-subtitle">
                  <?php echo $lang_data['python_programs_title']; ?>
                </h3>
                <ul class="learning-list list-style4">
                  <li> <a href="#python"><strong>
                        <?php echo $lang_data['python_module1_title']; ?>
                      </strong></a></li>
                  <li> <a href="#pythonandNumpy"><strong>
                        <?php echo $lang_data['python_module2_title']; ?>
                      </strong></a></li>
                  <li> <a href="#moreNumpy"><strong>
                        <?php echo $lang_data['python_module3_title']; ?>
                      </strong></a> </li>
                  <li> <a href="#pandas"><strong>
                        <?php echo $lang_data['python_module4_title']; ?>
                      </strong></a> </li>
                </ul>
              </div>
            </div>
          </section>

          <!--Python -->
          <section id="python" class="learning-module">
            <div class="learning-header-row padding-top-90">
              <div class="learning-column">
                <header class="learning-section-header">
                  <div class="learning-heading">
                    <h1 class="learning-title text-capitalize font-medium">
                      <?php echo $lang_data['python_module1_title']; ?>
                    </h1>
                    <hr>
                  </div>
                </header>
              </div>
            </div>
            <div class="learning-description-row">
              <div class="learning-full-width">
                <h2 class="learning-subtitle">
                  <?php echo $lang_data['python_fundamentals']; ?>
                </h2>
                <p class="learning-description">
                  <?php echo $lang_data['python_module1_title']; ?>
                  <?php echo $lang_data['python_module1_description']; ?>
                </p>
                <hr />
                <h3 class="learning-subtitle">
                  <?php echo $lang_data['python_module1_content_title']; ?>
                </h3>
                <ul class="learning-list list-style4">
                  <?php foreach($lang_data['python_module1_content_items'] as $item): ?>
                  <li><strong>
                      <?php echo $item; ?>
                    </strong></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </section>

          <!--Python and Numpy -->
          <section id="pythonandNumpy" class="learning-module">
            <div class="learning-row">
              <div class="learning-full-width">
                <p class="learning-section-title">
                  <span class="learning-module-title">
                    <?php echo $lang_data['python_module1_title']; ?>
                  </span>
                </p>
                <h2 class="learning-subtitle">
                  <?php echo $lang_data['python_module2_input_output_subtitle']; ?>
                </h2>
                <p class="learning-description">
                  <?php echo $lang_data['python_module2_input_output_description']; ?>
                </p>
                <hr />

                <!--Console Block-->

                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                        <span class="keyword">print(<span class="datatype">"Hello world!"</span>)</span>
                      </code>
                  </div>
                </div>

                <!--Output-->
                <span class="learning-description">
                  <span class="txt-output-leftSpace">Hello world!</span>
                </span>

                <hr />
                <p class="learning-description">
                  <?php echo $lang_data['python_description_print_function']; ?>
                </p>

                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                      <span class="keyword">print(<span class="datatype">1, "plus", 2, "equals", 1+2</span>)</span>
                    </code>
                  </div>
                </div>

                <!--Output-->
                <span class="learning-description"> <span class="txt-output-leftSpace">1 plus 2 equals 3</span>
                </span>


                <hr />
                <p class="learning-description">
                  <?php echo $lang_data['python_description_input_function']; ?>
                </p>

                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                      <span id="field">name=</span><span class="keyword">input(<span class="datatype">"Enter your name: " </span>)</span><br>
                      <span class="field">print(<span class="datatype">"Hello,", name </span>)</span>
                    </code>
                  </div>
                </div>

                <!--Output-->
                <span class="learning-description"> <span class="txt-output-leftSpace">Enter your name: AIT OUFKIR
                  </span>
                </span> <br>
                <span class="learning-description"><span class="txt-output-leftSpace">Hello, AIT OUFKIR </span>
                </span>

                <hr />
                <br />
                <h2 class="learning-subtitle">
                  <?php echo $lang_data['python_loops_subtitle']; ?>
                </h2>
                <p class="learning-description">
                  <?php echo $lang_data['python_loops_description']; ?>
                </p>

                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                      <span class="datatype" > 5 </span><span class="keyword"> # Literal expression</span><br>
                      <span class="datatype" > 3 / (5 + 0.2) </span><span class="keyword"> # Arithmetic expression</span><br>
                      <span class="datatype" > a </span><span class="keyword"> # Variable expression</span><br>
                      <span class="datatype" > cos(0) </span><span class="keyword"> # Function call expression </span><br>
                      <span class="datatype" > obj.attr </span><span class="keyword"> # Attribute reference expression</span><br>
                    </code>
                  </div>
                </div>

                <hr />
                <br>

                <h2 class="learning-subtitle">
                  <?php echo $lang_data['python_statements_subtitle']; ?>
                </h2>
                <p class="learning-description">
                  <?php echo $lang_data['python_statements_description']; ?>
                </p>

                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                      <span class="datatype" > a = 5 </span><span class="keyword"> # Variable assignment</span><br>
                      <span class="datatype" > a = a + 1 </span><span class="keyword"> # Assignment and increment by 1</span><br>
                      <span class="datatype" > a += 1 </span><span class="keyword"> # shorthand for incrementing</span><br>
                    </code>
                  </div>
                </div>

                <br>
                <p class="learning-description">
                  <?php echo $lang_data['python_augmented_assignment_description']; ?>
                </p>



                <hr />
                <br>

				<h2 class="learning-subtitle">
                  <?php echo $lang_data['python_loops_subtitle']; ?>
                </h2>
                <p class="learning-description">
                  <?php echo $lang_data['python_loops_description']; ?>
                </p>


                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">

                    <code>
                <span class="datatype">i</span> <span class="keyword">=</span> <span class="datatype">1</span>
                <span class="keyword">while</span> <span class="datatype">i</span> <span class="keyword">*</span> <span class="datatype">i</span> <span class="keyword"><</span> <span class="datatype">100</span>:
                    <span class="keyword">print</span>(<span class="datatype">"Square of"</span>, <span class="datatype">i</span>, <span class="datatype">"is"</span>, <span class="datatype">i</span> <span class="keyword">*</span> <span class="datatype">i</span>)
                    <span class="datatype">i</span> <span class="keyword">=</span> <span class="datatype">i</span> <span class="keyword">+</span> <span class="datatype">1</span>
                      </code>

                  </div>
                </div>

                <!--Output-->
                <p class="learning-description">
                  <span class="txt-output-leftSpace">Square of 1 is 1 </span><br>
                  <span class="txt-output-leftSpace">Square of 2 is 4 </span><br>
                  <span class="txt-output-leftSpace">Square of 3 is 9 </span><br>
                  <span class="txt-output-leftSpace">Square of 4 is 16</span><br>
                  <span class="txt-output-leftSpace">Square of 5 is 25</span><br>
                  <span class="txt-output-leftSpace">Square of 6 is 36</span><br>
                  <span class="txt-output-leftSpace">Square of 7 is 49</span><br>
                  <span class="txt-output-leftSpace">Square of 8 is 64</span><br>
                  <span class="txt-output-leftSpace">Square of 9 is 81</span><br>
                  <span class="txt-output-leftSpace">The squares below 100.</span><br>
                </p><br><br>
                <p class="learning-description">
                  <?php echo $lang_data['python_for_statement_description']; ?>
                </p>



                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                      <span class="datatype">t</span> <span class="keyword">=</span> <span class="datatype">0</span>
                      <span class="keyword">for</span> <span class="datatype">i</span> <span class="keyword">in</span> <span class="datatype">[0, 1, 2, 3, 4, 5, 6, 7, 8, 9]</span>:
                      <span class="datatype">t</span> <span class="keyword">=</span> <span class="datatype">t</span> <span class="keyword">+</span> <span class="datatype">i</span>
                    </code>
                  </div>
                </div>



                <!--Outpiut-->
                <p class="learning-description">
                  <span class="txt-output-leftSpace">The sum is 45</span><br>
                </p>
                <hr />
                <br>





              </div>
            </div>
          </section>


          <!--Python and Numpy -->
          <section id="pythonandNumpy" class="learning-module">
            <div class="learning-media-row">

                <span class="formation-title">Python and Numpy</span>
                <h2 class="learning-subtitle">Introduction</h2>
                <p class="learning-description">
                  The classic "Hello, world!" program in Python is quite straightforward. To run it, click on the cell
                  with your mouse and press Ctrl + Enter on your keyboard. You can also experiment by changing the text
                  inside the quotes and running the program again.
                </p>
                <hr />

            </div>
          </section>



          <!-- More Numpy -->
          <section id="moreNumpy" class="learning-module">
            <div class="learning-media-row">

                <span class="formation-title">More Numpy</span>
                <h2 class="learning-subtitle">Introduction</h2>
                <p class="learning-description">
                  The classic "Hello, world!" program in Python is quite straightforward. To run it, click on the cell
                  with your mouse and press Ctrl + Enter on your keyboard. You can also experiment by changing the text
                  inside the quotes and running the program again.
                </p>
                <hr />
           
            </div>
          </section>



          <!-- Pandas -->
          <section id="pandas" class="learning-module">
            <div class="learning-media-row">

                <span class="formation-title">Pandas</span>
                <h2 class="learning-subtitle">Introduction</h2>
                <p class="learning-description">
                  The classic "Hello, world!" program in Python is quite straightforward. To run it, click on the cell
                  with your mouse and press Ctrl + Enter on your keyboard. You can also experiment by changing the text
                  inside the quotes and running the program again.
                </p>
                <hr />
            
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