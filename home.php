<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mijn studentenhuis</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
        <link rel="stylesheet" type="text/css" href="css/uikit.almost-flat.min.css">
		<link rel="stylesheet" type="text/css" href="css/components/sticky.almost-flat.min.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
		
        <script type="text/javascript" src="js/uikit.min.js"></script>
		<script type="text/javascript" src="js/components/sticky.min.js"></script>
    </head>

    <body>

        <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
            <nav class="uk-navbar uk-margin-large-bottom" data-uk-sticky="clsactive: 'uk-navbar-attached'">
                <a class="uk-navbar-brand uk-hidden-small" href="layouts_frontpage.html">Mijn Dorm</a>
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
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Mijn Dorm</div>
            </nav>


            <div class="uk-grid uk-margin-top">
            	<div class="uk-width-1-2 uk-container-center">
            		<button class="uk-button uk-width-1-1" type="button">Huisgenoten</button>
            	</div>

            	<div class="uk-width-1-2 uk-container-center">
            		<button class="uk-button uk-width-1-1" type="button">Sensoren</button>
            	</div>
            </div>

            <div class="uk-grid uk-margin-top">
    			<div class="uk-width-1-2 uk-container-center">
    				<a class="uk-thumbnail uk-width-1-1" href="">
    					<img src="http://placehold.it/600x350" alt="">
    					<div class="uk-thumbnail-caption">Keuken</div>
					</a>
    			</div>

    			<div class="uk-width-1-2 uk-container-center">
    				<a class="uk-thumbnail uk-width-1-1" href="">
    					<img src="http://placehold.it/600x350" alt="">
    					<div class="uk-thumbnail-caption">Badkamer</div>
					</a>
    			</div>
			</div>

			<div class="uk-grid">
    			<div class="uk-width-1-2">
    				<a class="uk-thumbnail uk-width-1-1" href="">
    					<img src="http://placehold.it/600x350" alt="">
    					<div class="uk-thumbnail-caption">Woonkamer</div>
					</a>
    			</div>

    			<div class="uk-width-1-2">
    				<a class="uk-thumbnail uk-width-1-1" href="">
    					<img src="http://placehold.it/600x350" alt="">
    					<div class="uk-thumbnail-caption">Energieverbruik</div>
					</a>
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

    </body>
</html>