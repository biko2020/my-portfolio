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
                  In the <strong class="keyword">print</strong> function, numerical expressions are first
                  evaluated and then automatically converted to
                  strings. Subsequently the strings are concatenated with spaces:
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
                  To read user <strong class="datatype">input</strong>, use the input function with a string
                  parameter that prompts the user. The entered
                  string is stored in the variable name. Run the example below by pressing Control + Enter!
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
                <h2 class="col-xs-12">Indentation</h2>
                <p class="learning-description">
                  Repetition can be achieved using a for <strong class="keyword">loop</strong>. Note that the body
                  of the for loop is indented with a tab
                  or four spaces. Unlike some other languages, braces aren't required to define the loop's body. The
                  loop's body ends when the indentation ends.
                </p>

                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                      <span class="keyword">for <span class="datatype"> i <span class="keyword"> in </span> range(3): </span> </span><br>
                      <span class="keyword">&nbsp;&nbsp;&nbsp;&nbsp;  print(<span class="datatype">"Hello" </span>)</span><br>
                      <span class="keyword">print(<span class="datatype">"Bye!" </span>)</span>
                    </code>
                  </div>
                </div>

                <!--Output-->
                <span class="learning-description"> <span class="txt-output-leftSpace">Hello </span> </span> <br>
                <span class="learning-description"> <span class="txt-output-leftSpace">Hello </span> </span> <br>
                <span class="learning-description"> <span class="txt-output-leftSpace">Hello </span> </span> <br>
                <span class="learning-description"><span class="txt-output-leftSpace">Bye!</span> </span>
                <br><br>

                <p class="learning-description">Indentation is also used in function bodies, if statement branches,
                  and while
                  loops, as we’ll see later.</p>
                <p class="learning-description">
                  The range(3) expression generates the sequence 0, 1, 2, making it a half-open interval with the
                  endpoint excluded. Generally, range(n) produces integers from <strong>0 to n-1.</strong> Modify the
                  program to print the value of i in each iteration, then rerun it with Control + Enter.</p>
                <hr />
                <br>
                <div class="learning-exercise">
                  <h2 class="col-xs-12">Exercise (Multiplication)</h2>
                  <p class="learning-description">
                    Write a program that generates the following output using a for <strong
                      class="keyword">loop</strong> in your solution.
                  </p>
                  <!--Output-->
                  <span class="learning-description"> <span class="txt-output-leftSpace">3 multiplied by 0 is 0
                    </span> </span>
                  <br>
                  <span class="learning-description"> <span class="txt-output-leftSpace">3 multiplied by 1 is 3
                    </span> </span>
                  <br>
                  <span class="learning-description"> <span class="txt-output-leftSpace">3 multiplied by 2 is 6
                    </span> </span>
                  <br>
                </div>
                <!--Input-->
                <div class="showMeResult">
                  <a class="learning-description" id="showMeResult" href="#"> Show me result</a>
                </div>

                <!--Input-->
                <div class="console hidden" id="resultBlock">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                      <span class="keyword">for <span class="datatype"> i <span class="keyword"> in </span> range(3): </span> </span><br>
                      <span class="keyword">&nbsp;&nbsp;&nbsp;&nbsp;  print(<span class="datatype">3, "multiplied by", i, "is", 3 * i </span>)</span><br>
                    </code>
                  </div>
                </div>

                <hr />
                <h2 class="col-xs-12">Variables and data types</h2>
                <p class="learning-description">
                  We previously demonstrated that assigning a value to a <strong id="keyword">variable</strong> is
                  very simple :
                </p>

                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                      <span id="field">a=</span><span class="keyword">1</span> </span><br>
                      <span class="keyword">print(<span class="datatype">a</span>)</span>
                    </code>
                  </div>
                </div>

                <!--Output-->
                <span class="learning-description"> <span class="txt-output-leftSpace">1</span>
                </span>
                <br>
                <br>
                <p class="learning-description">Note that we did not need to explicitly define the variable a or
                  specify its
                  <strong>type</strong>.
                  Python automatically inferred that a is an integer (int). You can check the type of a variable using
                  the built-in type function:
                </p>

                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                      <span class="keyword">type(<span class="datatype">a</span>)</span>
                    </code>
                  </div>
                </div>


                <!--Output-->
                <span class="learning-description"> <span class="txt-output-leftSpace">int</span>
                </span>
                <br><br>

                <p class="learning-description">Note also that the type of a <strong id="keyword">variable</strong>
                  is not
                  fixed:</p>


                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                      <span id="field">a=</span><span class="datatype">"this is text"</span> </span><br>
                      <span class="keyword">type(<span class="datatype">a</span>)</span>
                    </code>
                  </div>
                </div>


                <!--Output-->
                <span class="learning-description"> <span class="txt-output-leftSpace">str</span>
                </span> <br>


                <br><br>

                <p class="learning-description">In Python, a <strong id="keyword">variable's </strong> type is
                  not
                  associated with its name, like in C, but
                  rather with the value it holds. This is known as <strong>dynamic typing.</strong></p>

                <img src="../../assets/images/dynamic-variable.png" alt="dynamic-variable"
                  class="learning-image img-responsive" />

                <p class="learning-description">
                  A variable is a name that refers to a value, and the assignment operator links the name to that
                  value.</p>
                <p class="learning-description">
                  Python's basic data types include <strong>int</strong>, <strong>float</strong>,
                  <strong>complex</strong>, <strong>str</strong>, <strong>bool</strong>(True/False), and
                  <strong>bytes</strong>.
                </p>
                <p class="learning-description"> Here are
                  some examples of their use.
                </p>


                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                      <span id="field">a=</span><span class="datatype">7</span> </span><br>
                      <span id="field">b=</span><span class="datatype">3.5</span> </span><br>
                      <span id="field">c=</span><span class="datatype">b = a==5</span> </span><br>
                      <span class="keyword">print(<span class="datatype">"Result of comparison:", c </span>)</span><br>

                      <span id="keyword">i=</span><span class="datatype">0+2j</span> </span><br>
                      <span class="keyword">print(<span class="datatype">"Complex multiplication:", i*i </span>)</span>
                    </code>
                  </div>
                </div>

                <!--Output-->
				<div class="learning-exercise">

				
                <span class="learning-description"> <span class="txt-output-leftSpace">Result of comparison:
                    False</span></span><br>
                <span class="learning-description"> <span class="txt-output-leftSpace">Complex multiplication:
                    (-4+0j)</span>
                </span> <br>
                <hr />


                <div class="showExplanation">
                  <a class="learning-description" id="explanation" href="#"> Understanding Complex Numbers:</a>
                </div>
                <div class="resultBlock hidden">
                  <p class="learning-description">
                    A complex number is in the form <strong> a+bj</strong><br>
                    In this case, <strong>i=0+2j </strong><br>
                    Here, <strong>a=0 </strong>(real part) and <strong>b=2</strong> (imaginary part).<br>
                    (0+2j)×(0+2j)<br>
                    (0×0−2×2)+(0×2+2×0)j<br>
                  </p>
                </div>
			</div>
                <hr />
                <br>
                <p class="learning-description">
                  A <strong class="keyword">byte</strong> is a unit of information made up of 8 bits, capable of
                  representing numbers from 0 to 255.
                  All data stored or transmitted, such as strings, are sequences of bytes. Each character in a string
                  is encoded into one or more bytes. For instance, in UTF-8 encoding, the character 'c' is represented
                  by the byte 99, while 'ä' is represented by the byte sequence [195, 164].

                </p>
                <img src="../../assets/images/byte-unit.png" alt="byte unit" class="learning-image img-responsive" />


                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                      <p># Convert character to a sequence of bytes</p>
                      <span id="keyword">b=</span><span class="datatype">"ä".encode("utf-8")</span> <br>
                      <span class="keyword">print(<span class="datatype">b</span>)</span><br>
                      <span class="keyword">print(<span class="datatype">list(b)</span>)</span>
                    </code>
                  </div>
                </div>

                <!--Output-->
                <span class="learning-description"> <span class="txt-output-leftSpace">b'\xc3\xa4'</span> </span><br>
                <span class="learning-description"> <span class="txt-output-leftSpace">[195, 164]</span>
                </span> <br>


                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                    <p># convert sequence of bytes to character</p>
                     <span id="keyword">bytes.</span><span class="datatype">decode(b, "utf-8") </span> <br>
                    </code>
                  </div>
                </div>

                <!--Output-->
                <span class="learning-description"> <span class="txt-output-leftSpace">'ä'</span>
                </span> <br><br>

                <hr />


                <h2 class="col-xs-12">Creating Strings</h2>
                <p class="learning-description">
                  A <strong>string</strong> is a sequence of characters enclosed in single (') or double (")
                  quotes. This allows for including quotation marks within the string, such as "I don't want to
                  go!"
                  or by escaping them with a backslash: 'I don't want to go'. Strings can also include escape
                  sequences like <strong>\n</strong> for newline and <strong>\t</strong> for tab.
                </p>

                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                    <p># convert sequence of bytes to character</p>
                    <span class="keyword">print(<span class="field">"Hello<span class="field">\t</span>World!<span class="field">\n</span>Welcome<span class="field">\t</span>to<span class="field">\t</span>Python."</span>)</span>													
                    </code>
                  </div>
                </div>

                <!--Output-->
                <span class="learning-description">
                  <span class="txt-output-leftSpace">Hello World!</span><br>
                  <span class="txt-output-leftSpace">Welcome to Python.</span><br>
                </span>

                <br>
                <hr />
                <p class="learning-description">
                  While the <strong>+</strong> operator can be used to concatenate strings, it's more efficient to
                  use the <strong>join</strong>
                  method when combining a large number of strings. For instance, instead of concatenating a list of
                  strings with +, you can use join like this:</p>


                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                      <span id="field">str1=</span><span class="datatype">"Hello" </span> <br>
                      <span id="field">str2=</span><span class="datatype">"World" </span> <br>
                      <span id="field">str3=</span><span class="datatype">"Python" </span> <br>
                      
                      <span class="keyword">print(<span class="datatype">str1+str2+str3</span>)</span><br>
                      <span class="keyword">print(<span class="datatype">" ".join(<span class="keyword">[</span>str1, str2, str3 <span class="keyword">]</span>)</span>)</span><br>
                    </code>
                  </div>
                </div>

                <!--Output-->
                <span class="learning-description">
                  <span class="txt-output-leftSpace">HelloWorldPython</span><br>
                  <span class="txt-output-leftSpace">Hello World Python</span>
                </span>
                <br>
                <br>

                <p class="learning-description">
                  The multiple catenation and quotation characters break the flow of thought.
                  String interpolation offers somewhat easier syntax.
                  There are multiple ways to do String interpolation :<br><br>

                  <strong>&#8226;</strong> Python format string<br>
                  <strong>&#8226;</strong> The format method<br>
                  <strong>&#8226;</strong> f-string<br>
                </p>



                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                      <p># Python Format String </p>
                      <span class="keyword">print(<span class="datatype">"%i plus %i is equal to %i"</span></span>
                      <span class="keyword">%</span> <span class="datatype">(1, 3, 4)</span><span
                        class="keyword">)</span><br>
                      <p># The format method </p>
                      <span class="keyword">print(<span class="datatype">"{} plus {} is equal to {}"</span></span>
                      <span class="keyword">.format</span> <span class="datatype">(1, 3, 4)</span><span
                        class="keyword">)</span><br>
                      <p># f-string</p>
                      <span class="keyword">print(<span class="datatype">f"<span class="keyword">{1}</span>
                          plus <span class="keyword">{3}</span> is equal to <span
                            class="keyword">{4}</span>"</span></span><span class="keyword">)</span><br>
                    </code>
                  </div>
                </div>


                <!--Output-->
                <span class="learning-description">
                  <span class="txt-output-leftSpace">1 plus 3 is equal to 4</span><br>
                  <span class="txt-output-leftSpace">1 plus 3 is equal to 4</span><br>
                  <span class="txt-output-leftSpace">1 plus 3 is equal to 4</span><br>
                </span>
                <br>
                <br>



                <!--Input-->
                <div class="console">
                  <div class="console-header">
                    <span class="console-title">PYTHON Console</span>
                  </div>
                  <div class="console-body">
                    <code>
                      <p># Example</p>
                      <span class="keyword">print(<span class="datatype">"{:.1f} {:.2f} {:.3f}"</span></span> <span class="keyword">.format</span> <span class="datatype">(1.6, 1.8, 1.9)</span><span class="keyword">)</span><br>
                      <span class="keyword">print(<span class="datatype">"%.1f %.2f %.3f"</span></span> <span class="keyword">.% </span> <span class="datatype">(1.6, 1.8, 1.9)</span><span class="keyword">)</span><br>
                      <span class="keyword">print(<span class="datatype">f"{1.6:.1f} {1.8:.2f} {1.9:.3f}"</span></span><span class="keyword">)</span><br>
                    <p> # The specifier "s" is used for strings </p>
                      <span class="keyword">print(<span class="datatype">"%s combined with %s gives %s"</span></span> <span class="keyword"> % </span> <span class="datatype">("sun", "shine", "sun" + "shine")</span><span class="keyword">)</span><br>
                      <span class="keyword">print(<span class="datatype">"{0} combined with {1} gives {0}{1}"</span></span> <span class="keyword"> .format </span> <span class="datatype">("sun", "shine")</span><span class="keyword">)</span><br>
                      <span class="keyword">print(<span class="datatype">"f{'sun'} combined with {'shine'} gives </span></span>  <span class="datatype">{'sun' + 'shine'}"</span><span class="keyword">)</span><br>
                    
                    </code>
                  </div>
                </div>

                <!--Output-->
                <span class="learning-description">
                  <span class="txt-output-leftSpace">1.6 1.80 1.900</span><br>
                  <span class="txt-output-leftSpace">1.6 1.80 1.900</span><br>
                  <span class="txt-output-leftSpace">1.6 1.80 1.900</span><br>
                  <p> </p>
                  <span class="txt-output-leftSpace">sun combined with shine gives sunshine</span><br>
                  <span class="txt-output-leftSpace">sun combined with shine gives sunshine</span><br>
                  <span class="txt-output-leftSpace">sun combined with shine gives sunshine</span><br>
                </span>
                <br>
                <br>

                <p class="learning-description">
                  Different methods of string interpolation each have their own strengths and weaknesses. Choosing
                  which one to use is typically a matter of personal preference. In this course, most examples and
                  model solutions will primarily use f-strings and the format method.
                  For more details about format specifiers , look <strong><a
                      href="https://pyformat.info/#number">here</a></strong>
                </p>


                <hr />
                <br>

                <h2 class="col-xs-12">Expressions</h2>
                <p class="learning-description">
                  An expression in Python is code that produces a value, made up of literals (e.g., 2, 5.2, "text") or
                  variables combined with operators like arithmetic, comparison, function calls, indexing, and attribute
                  references. Here are some examples:
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

                <h2 class="col-xs-12">Statements</h2>
                <p class="learning-description">
                  Statements are commands that perform an action. For instance, a function call that stands alone (not
                  embedded in another expression) is a statement. Similarly, assigning a value to a variable is also a
                  statement.
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
                  Note that in Python there are no operators <strong>++</strong> or <strong>--</strong> unlike in some
                  other languages.
                  The operators like <strong> += -= *= /= //= %= &= |= ^= >>= <<= **=</strong> are augmented assignment
                      operators in Python.
                </p>



                <hr />
                <br>

                <h2 class="col-xs-12">Loops for repetitives tasks</h2>
                <p class="learning-description">
                  In Python, there are two types of loops: <strong>while</strong> and <strong>for</strong>. We've
                  already touched on the for loop briefly.
                  Now, let's explore the while loop.
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
                  Another way of repeating statements is with the for statement.
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
              <div class="col-xs-12">
                <span class="formation-title">Python and Numpy</span>
                <h2 class="col-xs-12">Introduction</h2>
                <p class="learning-description">
                  The classic "Hello, world!" program in Python is quite straightforward. To run it, click on the cell
                  with your mouse and press Ctrl + Enter on your keyboard. You can also experiment by changing the text
                  inside the quotes and running the program again.
                </p>
                <hr />
              </div>
            </div>
          </section>



          <!-- More Numpy -->
          <section id="moreNumpy" class="learning-module">
            <div class="learning-media-row">
              <div class="col-xs-12">
                <span class="formation-title">More Numpy</span>
                <h2 class="col-xs-12">Introduction</h2>
                <p class="learning-description">
                  The classic "Hello, world!" program in Python is quite straightforward. To run it, click on the cell
                  with your mouse and press Ctrl + Enter on your keyboard. You can also experiment by changing the text
                  inside the quotes and running the program again.
                </p>
                <hr />
              </div>
            </div>
          </section>



          <!-- Pandas -->
          <section id="pandas" class="learning-module">
            <div class="learning-media-row">
              <div class="col-xs-12">
                <span class="formation-title">Pandas</span>
                <h2 class="col-xs-12">Introduction</h2>
                <p class="learning-description">
                  The classic "Hello, world!" program in Python is quite straightforward. To run it, click on the cell
                  with your mouse and press Ctrl + Enter on your keyboard. You can also experiment by changing the text
                  inside the quotes and running the program again.
                </p>
                <hr />
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