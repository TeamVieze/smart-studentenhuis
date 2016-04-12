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
                <a class="uk-navbar-brand uk-hidden-small" href="layouts_frontpage.html">Brand</a>
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
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Brand</div>
            </nav>
			<!-- Einde navigatiebalk --> 
			
			<!-- Grid voor de twee buttons --> 
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">
                    <div class="uk-vertical-align uk-text-center">
                        <div class="uk-vertical-align-middle uk-width-1-2">
                            <p>
                                <a class="uk-button uk-button-primary uk-button-large" href="#">Overzicht</a>
                                <a class="uk-button uk-button-large" href="#">Reserveer</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">

                    <div class="uk-vertical-align uk-text-center" style="background: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjQsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkViZW5lXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTEzMHB4IiBoZWlnaHQ9IjQ1MHB4IiB2aWV3Qm94PSIwIDAgMTEzMCA0NTAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDExMzAgNDUwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxyZWN0IGZpbGw9IiNGNUY1RjUiIHdpZHRoPSIxMTMwIiBoZWlnaHQ9IjQ1MCIvPg0KPC9zdmc+DQo=') 50% 0 no-repeat; height: 450px;">
                        <div class="uk-vertical-align-middle uk-width-1-2">
                            <h1 class="uk-heading-large">Op dit moment: <div class="uk-alert uk-alert-danger">BEZET</div></h1>
                            <p class="uk-text-large">Vrij over c.a.:</p>
                           <div class="uk-progress">
							<div class="uk-progress-bar" style="width: 80%;">4m31s</div>
						   </div>
                        </div>
                    </div>

                </div>
            </div>
			
			<div class="uk-grid">
				
				
				
				<div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 uk-margin-bottom">
                    <div class="uk-grid">
                        <div class="uk-width-1-6">
                            <i class="uk-icon-user uk-icon-large uk-text-primary"></i>
                        </div>
                        <div class="uk-width-5-6">
                            <h2 class="uk-h3"><i class="uk-icon-calendar"></i> Woensdag 21 okt. <i class="uk-icon-clock-o"></i>  7:00u-7:15u</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        
                    </div>
                </div>
				
				<div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 uk-margin-bottom">
                    <div class="uk-grid">
                        <div class="uk-width-1-6">
                            <i class="uk-icon-user uk-icon-large uk-text-primary"></i>
                        </div>
                        <div class="uk-width-5-6">
                            <h2 class="uk-h3"><i class="uk-icon-calendar"></i> Woensdag 21 okt. <i class="uk-icon-clock-o"></i>  7:00u-7:15u</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
				
				<div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 uk-margin-bottom">
                    <div class="uk-grid">
                        <div class="uk-width-1-6">
                            <i class="uk-icon-user uk-icon-large uk-text-primary"></i>
                        </div>
                        <div class="uk-width-5-6">
                            <h2 class="uk-h3"><i class="uk-icon-calendar"></i> Woensdag 21 okt. <i class="uk-icon-clock-o"></i>  7:00u-7:15u</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
				
				<div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1 uk-margin-bottom">
                    <div class="uk-grid">
                        <div class="uk-width-1-6">
                            <i class="uk-icon-user uk-icon-large uk-text-primary"></i>
                        </div>
                        <div class="uk-width-5-6">
                            <h2 class="uk-h3"><i class="uk-icon-calendar"></i> Woensdag 21 okt. <i class="uk-icon-clock-o"></i>  7:00u-7:15u</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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