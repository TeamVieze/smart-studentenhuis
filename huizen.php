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
        <script src="js/jquery.min.js"></script>
        <script src="js/uikit.min.js"></script>
        <link rel="stylesheet" href="css/style.css"> 
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
                    <li>
                        <a href="energieverbruik.php">Energieverbruik</a>
                    </li>
                    <li class="uk-active">
                        <a href="instellingen.php">Instellingen</a>
                    </li>
                    <li>
                        <a href="index.php">Uitloggen</a>
                    </li>
                </ul>
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small navtekst">Instellingen</div>
				</div>
            </nav>
            <!-- Einde navigatiebalk --> 

         <div class="uk-container uk-container-center wrap">
        

        
            

   
            <!--Breadcrumbs-->
            <ul class="uk-breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li><a href="instellingen.php">Instellingen</a></li>
                <li class="uk-active nu"><span>Studentenhuizen</span></li>
            </ul>
            <!--Einde breadcrumbs-->

            <hr class="uk-article-divider dividemetmargin">

            <div class="uk-grid">
                <div class="uk-width-1-1 uk-margin-bottom">
                    <h2 class="uk-h2">Mijn studentenhuizen</h2>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2 uk-text-center">
                     <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="250" height="250" src="images/huisbaas1.jpg" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Henk Brennink</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted">Huisbaas</p>
                </div>
				
				
				<div class="uk-grid" data-uk-grid-margin>
					 <div class="uk-form uk-width-1-1">

												<h2>Nieuw Huis toevoegen</h2>	
												<div class="uk-form-row">
                                                    <label class="uk-form-label" for="">Plaatsnaam:</label>
                                                    <div class="uk-form-controls uk-form-icon uk-width-1-1 uk-margin-top">
                                                        <i class="uk-icon-envelope"></i>
                                                        
                                                        <input type="text" class="uk-width-1-1" id="email" placeholder="Plaatsnaam">
                                                    </div>
                                                </div>
												
                                                <div class="uk-form-row">
                                                    <label class="uk-form-label" for="">Straatnaam:</label>
                                                    <div class="uk-form-controls uk-form-icon uk-width-1-1 uk-margin-top">
                                                        <i class="uk-icon-envelope"></i>
                                                        
                                                        <input type="text" class="uk-width-1-1" id="email" placeholder="Straatnaam">
                                                    </div>
                                                </div>
												
											    <div class="uk-form-row">
                                                    <label class="uk-form-label" for="">Postcode en huisnummer:</label>
                                                    <div class="uk-form-controls uk-form-icon uk-width-1-1 uk-margin-top">
                                                        <i class="uk-icon-envelope"></i>
                                                        
                                                        <input type="email" class="uk-width-1-2" id="email" placeholder="Postcode">
														<input type="email" class="uk-width-1-3" id="email" placeholder="Huisnummer">
                                                    </div>
                                                </div>
												
												<a class="uk-button uk-button-primary uk-button-large uk-margin-top" href="#modalreserveren" data-uk-modal>Toevoegen</a>
                                                
                                            
                                                
                     </div>
				
			
				</div>

                
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                        <a href="leden.php">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="images/studenthome1.jpg" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                            </figcaption>
                        </figure>
                        </a>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Hoogstraat 9A</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted">Groningen</p>
                </div>

                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                        <a href="leden.php">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="images/studenthome2.jpg" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                            </figcaption>
                        </figure>
                        </a>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Zuiderlaan 2</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted">Meppel</p>
                </div>
                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                        <a href="leden.php">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="images/studenthome3.jpg" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                            </figcaption>
                        </figure>
                        </a>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Hoendiep 49A</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted">Groningen</p>
                </div>

                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                    <a href="leden.php">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="images/studenthome4.jpg" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                            </figcaption>
                        </figure>
                    </a>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Heerengracht 17</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted">Amsterdam</p>
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