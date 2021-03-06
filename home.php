<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mijn studentenhuis</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
        <link rel="stylesheet" type="text/css" href="css/uikit.min.css">
		<link rel="stylesheet" href="css/uikit.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
        <script type="text/javascript" src="js/jquery.min.js"></script>
		
        <script type="text/javascript" src="js/uikit.min.js"></script>
		<script type="text/javascript" src="js/components/sticky.min.js"></script>
    </head>

    <body>
	
		<!-- Navigatiebalk --> 
            <nav class="uk-navbar" data-uk-sticky data-uk-scrollspy="{cls:'uk-animation-slide-top',delay:300}">
				<div class="uk-container uk-container-center">
                <a class="uk-navbar-brand uk-hidden-small" href="home.php">StuDorm</a>
                <ul class="uk-navbar-nav uk-hidden-small">
                   <li class="uk-active">
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
                    <li>
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
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small navtekst">Home</div>
				</div>
            </nav>
            <!-- Einde navigatiebalk -->

        <div class="uk-container uk-container-center wrap">


            <ul class="uk-breadcrumb">
                <li class="uk-active nu">Home</li>	
				<li class="uk-active"><span>...</span></li>
            </ul>

			<hr class="uk-article-divider dividemetmargin">	
            
            <div class="uk-grid">
			
			<h2 class="uk-heading-medium uk-margin-bottom uk-width-large-1-2 uk-width-small-1-1">Welkom Jorn!</h2>
                <!--Buttons huisgenoten en sensoren -->
				
                <div class="uk-width-large-5-10 uk-width-medium-1-2 uk-width-small-1-1 uk-margin-bottom uk-container-center">

				
								<div class="uk-button-dropdown uk-margin-bottom" data-uk-dropdown="{mode:'click'}">
                                    <button class="uk-button uk-button-primary">Huisgenoten <i class="uk-icon-caret-down"></i></button>
                                    <div class="uk-dropdown">
                                        <ul class="uk-nav uk-nav-dropdown">
                                            <li class="uk-nav-header">Aanwezige huisgenoten:</li>
                                            <li><a href="#"><i class="uk-icon-check"></i> Jorn Huisman</a></li>
                                            <li><a href="#"><i class="uk-icon-check"></i> Tim Nijgaard</a></li>
                                            <li class="uk-nav-divider"></li>
											<li class="uk-nav-header">Niet aanwezig:</li>
                                            <li><a href="#"><i class="uk-icon-times"></i> Koen Bakker</a></li>
											<li><a href="#"><i class="uk-icon-times"></i> Nadja Regter</a></li>
                                        </ul>
                                    </div>
                                </div>
								
								<div class="uk-button-dropdown uk-margin-bottom	" data-uk-dropdown="{mode:'click'}">
                                    <button class="uk-button uk-button-primary">Sensoren <i class="uk-icon-caret-down"></i></button>
                                    <div class="uk-dropdown">
                                        <ul class="uk-nav uk-nav-dropdown">
                                            <li class="uk-nav-header">Sensoren</li>
                                            <li><a href="#"><i class="uk-icon-check"></i> Woonkamer</a></li>
                                            <li><a href="#"><i class="uk-icon-check"></i> Keuken</a></li>
											<li><a href="#"><i class="uk-icon-check"></i> Eigen slaapkamer</a></li>
                                            <li class="uk-nav-divider"></li>
											<li class="uk-nav-header">Defecte sensoren</li>
											<li><a href="#"><i class="uk-icon-times"></i> Badkamer</a></li>
                                        </ul>
                                    </div>
                                </div>	
								
				</div>

                <!--Einde buttons huisgenoten en sensoren -->
				
				
				
				
                <!--Buttons keuken, badkamer, woonkamer en energieverbruik-->
    			<div class="uk-width-large-1-2 uk-width-small-1-1 uk-margin-bottom uk-container-center">
				
    			
					<figure class="uk-overlay uk-width-1-1" href="">
						<img src="images/kitchen.jpg" width="" height="" alt="">
						  <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center">
							 <h2 class="uk-heading-medium">De keuken is op dit moment: <div class="uk-alert uk-alert-success">VRIJ</div></h2>
							 <a class="uk-position-cover" href="keuken.php"></a>
						</figcaption>
					</figure>
					
					
    			</div>

    			<div class="uk-width-large-1-2 uk-width-small-1-1 uk-margin-bottom uk-container-center">
					<figure class="uk-overlay uk-width-1-1" href="">
						<img src="images/bathroom.jpg" width="" height="" alt="">
						  <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center">
							 <h2 class="uk-heading-medium">De badkamer is op dit moment: <div class="uk-alert uk-alert-danger">BEZET</div></h2>
							 <a class="uk-position-cover" href="badkamer.php"></a>
						</figcaption>
					</figure>
    			</div>
			

			
    			<div class="uk-width-large-1-2 uk-width-small-1-1 uk-margin-bottom uk-container-center">
					<figure class="uk-overlay uk-width-1-1" href="">
						<img src="images/livingroom.jpg" width="" height="" alt="">
						  <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center">
							 <h2 class="uk-heading-medium">De woonkamer is op dit moment: <div class="uk-alert uk-alert-success">VRIJ</div></h2>
							 <a class="uk-position-cover" href="woonkamer.php"></a>
						</figcaption>
					</figure>
    			</div>

    			<div class="uk-width-large-1-2 uk-width-small-1-1 uk-margin-bottom uk-container-center">
					<figure class="uk-overlay uk-width-1-1" href="">
						<img src="images/power.jpg" width="" height="" alt="">
						  <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center">
							 <h2 class="uk-heading-medium">Je stroomverbruik is: <div class="uk-alert uk-alert-warning">Gemiddeld</div></h2>
							 <a class="uk-position-cover" href="energieverbruik.php"></a>
						</figcaption>
					</figure>
    			</div>
                <!--Eind buttons keuken, badkamer, woonkamer en energieverbruik-->
			</div>

			<hr class="uk-article-divider dividemetmargin">	

        </div>
		<hr class="uk-article-divider">
		<!-- Footer -->	
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
                                    <a href="#section-0" data-uk-smooth-scroll class="uk-icon-button uk-icon-hand-o-up" data-uk-tooltip="{pos:'top'}" title="Go Top" data-uk-scrollspy="{cls:'uk-animation-slide-right',delay:300}"></a>
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
                    <li class="uk-active">
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
                    <li>
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