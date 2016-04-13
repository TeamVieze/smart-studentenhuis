<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Frontpage layout example - UIkit documentation</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
        <link rel="stylesheet" href="css/uikit.min.css">
		<link rel="stylesheet" href="css/components/progress.css">
		<link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/uikit.min.js"></script>
		<script type="text/javascript" src="js/components/sticky.min.js"></script>
		
    </head>

    <body>

	<!-- Navigatiebalk --> 
            <nav class="uk-navbar" data-uk-sticky data-uk-scrollspy="{cls:'uk-animation-slide-top',delay:300}">
				<div class="uk-container uk-container-center">
                <a class="uk-navbar-brand uk-hidden-small" href="home.php">StuDorm</a>
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="keuken.php">Keuken</a>
                    </li>
                    <li>
                        <a href="badkamer.php">Badkamer</a>
                    </li>
                    <li>
                        <a href="woonkamer.php">Woonkamer</a>
                    </li>
                    <li class="uk-active">
                        <a href="energieverbruik.php">Energieverbruik</a>
                    </li>
                    <li>
                        <a href="instellingen.php">Instellingen</a>
                    </li>
                    <li>
                        <a href="index.php">Uitloggen</a>
                    </li>
                </ul>
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Energieverbruik</div>
				</div>
            </nav>
            <!-- Einde navigatiebalk --> 
	
	
        <div class="uk-container uk-container-center wrap">
		

		
			

   
            <!--Breadcrumbs-->
   <ul class="uk-breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="uk-active nu"><span>Energieverbruik</span></li>
   </ul>
   <!--Einde breadcrumbs-->
			
			
	
			<!-- Footer -->	
		<hr class="uk-article-divider">
		<footer id="footer">
		
            <div id="section-3">
                <div class="uk-text-center">
                    <div class="StuDormlogo">
                        <div class="uk-container uk-container-center">
                            <div class="uk-grid">
                                <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                     <img data-uk-scrollspy="{cls:'uk-animation-slide-left',delay:300}" width="200px" heigh="100px"  src="images/logowit3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <div class="uk-container uk-container-center">
                            <div class="uk-grid">
                                <div class="uk-width-1-1 uk-margin-top uk-margin-bottom">
                                    <p data-uk-scrollspy="{cls:'uk-animation-slide-left',delay:300}">
                                        Copyright &copy; 2016 StuDorm</p>
                                    <a href="#section-0" data-uk-smooth-scroll class="uk-icon-button uk-icon-arrow-circle-up" data-uk-tooltip="{pos:'top'}" title="Go Top" data-uk-scrollspy="{cls:'uk-animation-slide-right',delay:300}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		
				<!-- Off canvas menu -->    
        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="keuken.php">Keuken</a>
                    </li>
                    <li>
                        <a href="badkamer.php">Badkamer</a>
                    </li>
                    <li>
                        <a href="woonkamer.php">Woonkamer</a>
                    </li>
                    <li class="uk-active">
                        <a href="energieverbruik.php">Energieverbruik</a>
                    </li>
                    <li>
                        <a href="instellingen.php">Instellingen</a>
                    </li>
                    <li>
                        <a href="index.php">Uitloggen</a>
                    </li>
                </ul>
        </div>
        
    </body>
</html>