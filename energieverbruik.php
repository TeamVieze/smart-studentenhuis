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
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small navtekst">Energie</div>
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
			
			<div class="uk-grid" data-uk-grid-margin>
               
				<!--Einde breadcrumbs-->
                <div class="uk-width-medium-1-4  uk-text-center">
                    <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="250" height="250" src="images/student2.jpg" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                                <div>
                                    <a href="#" class="uk-icon-button uk-icon-envelope"></a>
                                    <a href="#" class="uk-icon-button uk-icon-twitter"></a>
                                    <a href="#" class="uk-icon-button uk-icon-google-plus"></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Jorn Huisman</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted">Klasse C Energieverbruik</p>
					
					
					
					
					
					
					
                </div>
				
					
                        <div class="uk-width-medium-3-4">
                            <div class="uk-panel uk-panel-box">
                                <div class="uk-panel-badge uk-badge">Rank 2</div>
                                <h3 class="uk-panel-title">Mijn energieverbruik</h3>
                                <ul class="uk-subnav uk-subnav-pill" data-uk-switcher="{connect:'#subnav-pill-content-1'}">
                                <li class="uk-active"><a href="#">24H</a></li>
                                <li><a href="#">1-Week</a></li>
                                <li><a href="#">1-Maand</a></li>
                                
                            </ul>

                            <ul id="subnav-pill-content-1" class="uk-switcher">
                                <li class="uk-active">
                                    <dl class="uk-description-list-horizontal">
                                        <dt>Stopcontact A</dt>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-3">
                                                <dd>
                                                    <div class="uk-alert uk-alert-danger">466 W</div>
                                                </dd>
                                            </div>
                                            <div class="uk-width-2-3">
                                                <div class="uk-alert uk-alert-danger">Hoog</div>
                                            </div>

                                        </div>

                                        <dt>Stopcontact B</dt>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-3">
                                                <dd>
                                                    <div class="uk-alert uk-alert-success">300 W</div>
                                                </dd>
                                            </div>
                                            <div class="uk-width-2-3">
                                                <div class="uk-alert uk-alert-success">Laag</div>
                                            </div>

                                        </div>

                                        <dt>Stopcontact C</dt>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-3">
                                                <dd>
                                                    <div class="uk-alert uk-alert-danger">620 W</div>
                                                </dd>
                                            </div>
                                            <div class="uk-width-2-3">
                                                <div class="uk-alert uk-alert-danger">Hoog</div>
                                            </div>

                                        </div>

                                        <dt>Totaal</dt>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-3">
                                                <dd>
                                                    <div class="uk-alert uk-alert-warning">1386 W</div>
                                                </dd>
                                            </div>
                                            <div class="uk-width-2-3">
                                                <div class="uk-alert uk-alert-warning">Gemiddeld</div>
                                            </div>

                                        </div>

                                    </dl>
                                </li>

                                <li>
        
        
                                    <dl class="uk-description-list-horizontal">
                                        <dt>Stopcontact A</dt>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-3">
                                                <dd>
                                                    <div class="uk-alert uk-alert-warning">2100 W</div>
                                                </dd>
                                            </div>
                                            <div class="uk-width-2-3">
                                                <div class="uk-alert uk-alert-warning">Gemiddeld</div>
                                            </div>

                                        </div>

                                       <dt>Stopcontact B</dt>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-3">
                                                <dd>
                                                    <div class="uk-alert uk-alert-success">1800 W</div>
                                                </dd>
                                            </div>
                                            <div class="uk-width-2-3">
                                                <div class="uk-alert uk-alert-success">Laag</div>
                                            </div>

                                        </div>

                                        <dt>Stopcontact C</dt>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-3">
                                                <dd>
                                                    <div class="uk-alert uk-alert-danger">2630 W</div>
                                                </dd>
                                            </div>
                                            <div class="uk-width-2-3">
                                                <div class="uk-alert uk-alert-danger">Hoog</div>
                                            </div>

                                        </div>

                                        <dt>Totaal</dt>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-3">
                                                <dd>
                                                    <div class="uk-alert uk-alert-warning">6530 W</div>
                                                </dd>
                                            </div>
                                            <div class="uk-width-2-3">
                                                <div class="uk-alert uk-alert-warning">Gemiddeld</div>
                                            </div>

                                        </div>


                                    </dl>
                                </li>

                                <li>
                                    <dl class="uk-description-list-horizontal">
                                        <dt>Stopcontact A</dt>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-3">
                                                <dd>
                                                    <div class="uk-alert uk-alert-danger">11500 W</div>
                                                </dd>
                                            </div>
                                            <div class="uk-width-2-3">
                                                <div class="uk-alert uk-alert-danger">Hoog</div>
                                            </div>

                                        </div>

                                        <dt>Stopcontact B</dt>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-3">
                                                <dd>
                                                    <div class="uk-alert uk-alert-warning">8642 W</div>
                                                </dd>
                                            </div>
                                            <div class="uk-width-2-3">
                                                <div class="uk-alert uk-alert-warning">Gemiddeld</div>
                                            </div>

                                        </div>

                                        <dt>Stopcontact C</dt>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-3">
                                                <dd>
                                                    <div class="uk-alert uk-alert-danger">13260 W</div>
                                                </dd>
                                            </div>
                                            <div class="uk-width-2-3">
                                                <div class="uk-alert uk-alert-danger">Hoog</div>
                                            </div>

                                        </div>

                                        <dt>Totaal</dt>
                                        <div class="uk-grid">
                                            <div class="uk-width-1-3">
                                                <dd>
                                                    <div class="uk-alert uk-alert-warning">32402 W</div>
                                                </dd>
                                            </div>
                                            <div class="uk-width-2-3">
                                                <div class="uk-alert uk-alert-warning">Gemiddeld</div>
                                            </div>

                                        </div>

                                    </dl>
                                </li>
                            </ul>
                            </div>
                        </div>                        
				
					
            </div>
			

			
			
			
			
			
			
			<h2> Stand voor de maand maart: </h2>
            <div class="uk-grid" data-uk-grid-margin>
			
				
                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="images/student4.jpg" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                                <div>
                                   <h2>Rank 1</h2>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Marieke Boom</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted"><div class="uk-alert uk-alert-success">26303 W</div></p>
            </div>
			
			
			                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="images/student2.jpg" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                                <div>
                                   <h2>Rank 2</h2>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Jorn Huisman</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted"><div class="uk-alert uk-alert-warning">32402 W</div></p>
            </div>
			
			                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="images/student3.jpg" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                                <div>
                                   <h2>Rank 3</h2>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Kelly Zand</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted"><div class="uk-alert uk-alert-warning">38102 W</div></p>
            </div>
			
			                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="images/student1.jpg" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-bottom uk-border-circle">
                                <div>
                                   <h2>Rank 4</h2>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Evert Napels</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted"><div class="uk-alert uk-alert-danger">52752 W</div></p>
            </div>
		


            </div>

            <hr class="uk-grid-divider">

         
			
			
			
		</div>
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