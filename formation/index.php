<?php 
require_once '../includes/header.php';
?>


<body>
<div id="wrapper">
<div class="site-content">
    <header class="banner">
        <img src="images/bg_animate_01_small.jpg" alt="Training Image">
        <div class="banner-text">
            <h1><?php echo $lang_data['mes_formations']; ?></h1>
        </div>
    </header>
    <main>
	<section class="programs">
            <h2><?php echo $lang_data['programs_title']; ?></h2>
            <p>
                <?php echo $lang_data['programs_intro']; ?>
            </p>
            <p>
                <?php echo $lang_data['programs_description_1']; ?>
            </p>
            <p>
                <?php echo $lang_data['programs_description_2']; ?>
            </p>
            <h3><?php echo $lang_data['programs_delivery_title']; ?></h3>
            <ul>
                <li><?php echo $lang_data['programs_delivery_online']; ?></li>
                <li><?php echo $lang_data['programs_delivery_corporate']; ?></li>
                <li><?php echo $lang_data['programs_delivery_public']; ?></li>
            </ul>
        </section>
        <aside class="courses">
            <h2><?php echo $lang_data['programs_list_of_learning']; ?></h2>
            <div class="course-category">
                <h3><?php echo $lang_data['programs_levels']; ?></h3>
                <p><?php echo $lang_data['programs_category_data_analysis']; ?></p>
                <div class="tags">
                    <span id="active">EXCEL</span>
                    <span id="active">POWER BI</span>
                    <span>TABLEAUX</span>
                    <span id="active">SQL</span>
                    <span>STATISTIQUES</span>
                </div>
            </div>
            <div class="course-category">
                <p><?php echo $lang_data['programs_category_programming_languages']; ?></p>
                <div class="tags">
                    <span id="active">PYTHON</span>
                    <span>PHP</span>
                    <span>JAVASCRIPT</span>
                    <span>JAVA</span>
                </div>
            </div>
            <div class="course-category">
                <p><?php echo $lang_data['programs_category_frameworks']; ?></p>
                <div class="tags">
                    <span>NODE.JS</span>
                    <span>VUE.JS</span>
                    <span>REACT.JS</span>
                    <span>DJANGO</span>
					<span>ANGULAR</span>
                </div>
            </div>
			<div class="course-category">
                <p><?php echo $lang_data['programs_category_web_development']; ?></p>
                <div class="tags">
                    <span>HTML</span>
                    <span>SASS/CSS</span>
                    <span>Web API</span>
					<span>Sécurité Web</span>
                </div>
            </div>
        </aside>
    </main>
</div>
</div>
</body>
</html>


<?php 
require_once '../includes/footer.php';
?>