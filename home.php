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

        <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

            <!--Navigatiebalk -->
            <nav class="uk-navbar uk-margin-large-bottom" data-uk-sticky="clsactive: 'uk-navbar-attached'">
                <a class="uk-navbar-brand uk-hidden-small" href="layouts_frontpage.html">StuDorm</a>
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
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">StuDorm</div>
            </nav>


            
            <div class="uk-grid uk-margin-top">
                <!--Buttons huisgenoten en sensoren -->
				
                <div class="uk-width-7-10 uk-margin-bottom uk-container-center">

				
								<div class="uk-button-dropdown uk-margin-bottom" data-uk-dropdown="{mode:'click'}">
                                    <button class="uk-button">Huisgenoten <i class="uk-icon-caret-down"></i></button>
                                    <div class="uk-dropdown">
                                        <ul class="uk-nav uk-nav-dropdown">
                                            <li class="uk-nav-header">Aanwezige huisgenoten:</li>
                                            <li><a href="#"><i class="uk-icon-check"></i> Marieke Bos</a></li>
                                            <li><a href="#"><i class="uk-icon-check"></i> Tim Nijgaard</a></li>
                                            <li class="uk-nav-divider"></li>
											<li class="uk-nav-header">Niet aanwezig:</li>
                                            <li><a href="#"><i class="uk-icon-times"></i> Koen Bakker</a></li>
											<li><a href="#"><i class="uk-icon-times"></i> Nadja Regter</a></li>
                                        </ul>
                                    </div>
                                </div>
								
								<div class="uk-button-dropdown uk-margin-bottom" data-uk-dropdown="{mode:'click'}">
                                    <button class="uk-button">Sensoren <i class="uk-icon-caret-down"></i></button>
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
    			<div class="uk-width-large-4-10 uk-width-small-1-2 uk-margin-bottom uk-container-center">
    				<a class="uk-thumbnail uk-width-1-1" href="">
    					<img src="images/kitchen.jpg" alt="">
    					<div class="uk-thumbnail-caption">Keuken</div>
					</a>
    			</div>

    			<div class="uk-width-large-4-10 uk-width-small-1-2 uk-margin-bottom uk-container-center">
    				<a class="uk-thumbnail uk-width-1-1" href="">
    					<img src="images/bathroom.jpg" alt="">
    					<div class="uk-thumbnail-caption">Badkamer</div>
					</a>
    			</div>
			

			
    			<div class="uk-width-large-4-10 uk-width-small-1-2 uk-margin-bottom uk-container-center">
    				<a class="uk-thumbnail uk-width-1-1" href="">
    					<img src="images/livingroom.jpg" alt="">
    					<div class="uk-thumbnail-caption">Woonkamer</div>
					</a>
    			</div>

    			<div class="uk-width-large-4-10 uk-width-small-1-2 uk-margin-bottom uk-container-center">
    				<a class="uk-thumbnail uk-width-1-1" href="">
    					<img src="images/power.jpg" alt="">
    					<div class="uk-thumbnail-caption">Energieverbruik</div>
					</a>
    			</div>
                <!--Eind buttons keuken, badkamer, woonkamer en energieverbruik-->
			</div>



        </div>

        <!--slidemenu-->
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
            </div>	

			
			
        </div>
		


</html>