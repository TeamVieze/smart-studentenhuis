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
		<script type="text/javascript" src="js/components/sticky.min.js"></script>
		
    </head>

    <body>

        <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
			
			
			<!-- Navigatiebalk --> 
            <nav class="uk-navbar uk-margin-large-bottom">
                <a class="uk-navbar-brand uk-hidden-small" href="layouts_frontpage.html">Instellingen</a>
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li class="uk-active">
                        <a href="layouts_frontpage.html">Frontpage</a>
                    </li>
                    <li>
                        <a href="layouts_portfolio.html">Portfolio</a>
                    </li>
                    <li>
                        <a href="layouts_blog.html">Blog</a>
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
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Instellingen</div>
            </nav>
			<!-- Einde navigatiebalk --> 
			
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-margin-bottom">
                    <h2 class="uk-h1"><i class="uk-icon-user uk-text-primary"></i> Jorn Huisman</h2>
                </div>

                <div class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 uk-margin-bottom">
                    <img src="http://placehold.it/400x400" alt="">
                </div>

                <div class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1">
                    <h2 class="uk-h2">Gegevens</h2>
                    
                    <div class="uk-grid">
                        <div class="uk-width-1-10">
                            <i class="uk-icon-envelope uk-text-primary"></i>
                        </div>

                        <div class="uk-width-9-10">
                            <p> email-address: jornhuisman@gmail.com</p>
                        </div>
                        
                        <div class="uk-width-1-10">
                            <i class="uk-icon-lock uk-text-primary"></i>
                        </div>

                        <div class="uk-width-9-10">
                           <p> wachtwoord: *******</p>
                        </div>

                        <div class="uk-width-1-10">
                            <i class="uk-icon-calendar-o uk-text-primary"></i>
                        </div>

                        <div class="uk-width-9-10">
                            <p>geboortedatum: 23-11-1993</p>
                        </div>

                        <div class="uk-width-1-1">
                            <a class="uk-button uk-button-primary uk-button-large uk-margin-top" href="#">gegevens wijzigen <i class="uk-icon-pencil"></i></a>
                        </div>

                    </div>
                </div>
            </div>

			
				
				
				
				
		</div>
			
			
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
</html>