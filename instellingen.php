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
                <a class="uk-navbar-brand uk-hidden-small" href="home.php">Studorm</a>
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Keuken</a>
                    </li>
                    <li class="uk-active">
                        <a href="badkamer.php">Badkamer</a>
                    </li>
                    <li>
                        <a href="#">Woonkamer</a>
                    </li>
                    <li>
                        <a href="#">Energieverbuik</a>
                    </li>
                    <li>
                        <a href="instellingen.php">Instellingen</a>
                    </li>
                    <li>
                        <a href="index.php">Uitloggen</a>
                    </li>
                </ul>
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Instellingen</div>
				</div>
            </nav>
            <!-- Einde navigatiebalk --> 

        <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
			
			

   
            <!--Breadcrumbs-->
            <ul class="uk-breadcrumb">
                <li><a href="home.php">Home</a></li>
                <li class="uk-active nu"><span>Instellingen</span></li>
            </ul>
            <!--Einde breadcrumbs-->
			
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-margin-bottom">
                    <h2 class="uk-h1"><i class="uk-icon-user uk-text-primary"></i> Jorn Huisman</h2>
                </div>

                <div class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 uk-margin-bottom">
                    <img src="images/jorn.jpg" alt="" height="400" width="400">
                </div>

                <div class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1">
                    <h2 class="uk-h2">Gegevens</h2>
                    
                    <div class="uk-grid">
                        <div class="uk-width-1-10">
                            <i class="uk-icon-envelope uk-text-primary"></i>
                        </div>

                        <div class="uk-width-3-10">
                            <p>E-mailadres:</p>
                        </div>
                        
                        <div class="uk-width-6-10">
                            <p>jornhuisman@gmail.com</p>
                        </div>

                        <div class="uk-width-1-10">
                            <i class="uk-icon-lock uk-text-primary"></i>
                        </div>

                        <div class="uk-width-3-10">
                           <p>Wachtwoord:</p>
                        </div>

                        <div class="uk-width-6-10">
                            <p>*******</p>
                        </div>

                        <div class="uk-width-1-10">
                            <i class="uk-icon-phone uk-text-primary"></i>
                        </div>

                        <div class="uk-width-3-10">
                            <p>Telefoon:</p>
                        </div>

                        <div class="uk-width-6-10">
                            <p>+316-55789451</p>
                        </div>

                        <div class="uk-width-1-10">
                            <i class="uk-icon-calendar-o uk-text-primary"></i>
                        </div>

                        <div class="uk-width-3-10">
                            <p>Geboortedatum:</p>
                        </div>

                        <div class="uk-width-6-10">
                            <p>23-11-1993</p>
                        </div>

                        <div class="uk-width-1-1">
                            <a class="uk-button uk-button-primary uk-button-large uk-margin-top" href="#">Gegevens wijzigen <i class="uk-icon-pencil"></i></a>
                        </div>

                        <h2 class="uk-h2 uk-margin-top uk-margin-bottom">Mijn huizen</h2>
                        <div class="uk-grid">
                            <div class="uk-width-1-10">
                                <i class="uk-icon-home uk-icon-medium uk-text-primary"></i>
                            </div>

                            <div class="uk-width-3-10 uk-margin-bottom">
                                <p>Huisnaam:</p>
                            </div>

                            <div class="uk-width-6-10">
                                <p>Hoogstraat 9A</p>
                            </div>

                            <div class="uk-width-1-10">
                                <i class="uk-icon-home uk-icon-medium uk-text-primary"></i>
                            </div>

                            <div class="uk-width-3-10">
                                <p>Huisnaam:</p>
                            </div>

                            <div class="uk-width-6-10">
                                <p>Zuiderlaan 2</p>
                            </div>

                            <div class="uk-width-1-1">
                                <a class="uk-button uk-button-primary uk-button-large uk-margin-top" href="#">Huizen beheren <i class="uk-icon-arrow-right"></i></a>
                            </div>

                            <div class="uk-width-1-1">
                                <h2 class="uk-h2 uk-margin-top uk-margin-bottom">Overige Instellingen</h2>
                            </div>

                            <div class="uk-width-1-2">
                                <h3 class="uk-h4">Roostersynchronisatie</h3>
                            </div>

                            <div class="uk-width-1-2">
                                <div data-uk-button-radio uk-margin-bottom>
                                    <button class="uk-button">Aan</button>
                                    <button class="uk-button">Uit</button>
                                </div>
                            </div>

                            <div class="uk-width-1-2">
                                <h3 class="uk-h4">Notificaties</h3>
                            </div>

                            <div class="uk-width-1-2">
                                <div data-uk-button-radio>
                                    <button class="uk-button">Aan</button>
                                    <button class="uk-button">Uit</button>
                                </div>
                            </div>

                        </div>
                    </div>   
                </div>

                <div class="uk-width-large-1-2 uk-width-small-1-1 uk-margin-large-top">

                    
                </div>

            </div>

			
				
				
				
				
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
                                     <img data-uk-scrollspy="{cls:'uk-animation-slide-left',delay:300}" width="200px" heigh="100px"  src="images/logo2.png" alt="">
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
			
			
		<div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
                    <li class="uk-active">
                        <a href="layouts_frontpage.html">Frontpage</a>
                    </li>
                    <li>
                        <a href="layouts_portfolio.html">Portfolio</a>
                    </li>
                    <li>
                        <a href="layouts_blog.html">Blog</a>z
                    </li>
                    <li>
                        <a href="layouts_documentation.html">Documentation</a>
                    </li>
                    <li>
                        <a href="layouts_contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="layouts_login.html">Login</a>
                    </li>
                </ul>
            </div>
        </div>

    </body>
</html>-