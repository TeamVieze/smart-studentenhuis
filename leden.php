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
                <li><a href="huizen.php">Studentenhuizen</a></li>
                <li class="uk-active nu"><span>Leden</span></li>
            </ul>
            <!--Einde breadcrumbs-->

            <div class="uk-grid">
                <div class="uk-width-1-1 uk-margin-bottom">
                    <h2 class="uk-h2"><i class="uk-icon-home uk-text-primary"></i> Hoogstraat 9A</h2>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-4 uk-text-center">
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
				
				
				<div class="uk-width-medium-1-3 ">
                    <div class="uk-panel uk-panel-box uk-panel-box-secondary">
                        <h3 class="uk-panel-title">Groningen</h3>
                        <p>
                            <strong>Studio's</strong>
                            <br>Hoogstraat 9A, Groningen
                            <br>8754 KL
                        </p>
                        <p>
                            <a>youremail@yourdomain.com</a>
                            <br>
                            +44 (0) 208 0000 000
                        </p>
                        <h3 class="uk-h4">Social Media</h3>
                        <p>
                            <a href="#" class="uk-icon-button uk-icon-facebook"></a>
                            <a href="#" class="uk-icon-button uk-icon-twitter"></a>
                        </p>
                    </div>
                </div>
            
				
				
                <div class="uk-width-medium-1-5 uk-text-center uk-margin-large-top uk-margin-large-left">
                    <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjQsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkViZW5lXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjUwcHgiIGhlaWdodD0iMjUwcHgiIHZpZXdCb3g9IjAgMCAyNTAgMjUwIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAyNTAgMjUwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxyZWN0IGZpbGw9IiNGNUY1RjUiIHdpZHRoPSIyNTAiIGhlaWdodD0iMjUwIi8+DQo8Zz4NCgk8cGF0aCBmaWxsPSIjRDhEOEQ4IiBkPSJNMjI3LjgxOCwyMDcuMjQ1Yy0xLjA0NS01Ljg0Ny0yLjM2OS0xMS4yNTktMy45NjUtMTYuMjUyYy0xLjU5OC00Ljk5NC0zLjc0Mi05Ljg1OS02LjQ0MS0xNC42MDYNCgkJYy0yLjY5Ny00Ljc0LTUuNzg5LTguNzg1LTkuMjgzLTEyLjEzMWMtMy41MDEtMy4zNDMtNy43NjgtNi4wMTUtMTIuODA5LTguMDEyYy01LjA0NS0xLjk5Ni0xMC42MTEtMi45OTUtMTYuNy0yLjk5NQ0KCQljLTAuODk3LDAtMi45OTQsMS4wNzQtNi4yOTEsMy4yMTljLTMuMjk1LDIuMTUtNy4wMTcsNC41NDYtMTEuMTU4LDcuMTg4Yy00LjE0NiwyLjY0Ni05LjUzNyw1LjA0NC0xNi4xNzYsNy4xODkNCgkJYy02LjY0MiwyLjE0OC0xMy4zMDgsMy4yMjEtMTkuOTk1LDMuMjIxYy02LjY4OSwwLTEzLjM1NC0xLjA3MS0xOS45OTUtMy4yMjFjLTYuNjQzLTIuMTQ2LTEyLjAzNi00LjU0My0xNi4xNzYtNy4xODkNCgkJYy00LjE0OC0yLjY0My03Ljg2My01LjAzNy0xMS4xNTgtNy4xODhjLTMuMjk1LTIuMTQ1LTUuMzkxLTMuMjE5LTYuMjkxLTMuMjE5Yy02LjA5NSwwLTExLjY2MSwwLjk5OS0xNi43MDEsMi45OTUNCgkJYy01LjA0MSwxLjk5Ny05LjMxMyw0LjY2OS0xMi44MDMsOC4wMTJjLTMuNTAxLDMuMzQ2LTYuNTkyLDcuMzkxLTkuMjg3LDEyLjEzMWMtMi42OTYsNC43NDctNC44NDcsOS42MTItNi40NDEsMTQuNjA2DQoJCWMtMS41OTcsNC45OTMtMi45MjIsMTAuNDA1LTMuOTcxLDE2LjI1MmMtMS4wNDYsNS44MzktMS43NDgsMTEuMjgtMi4wOTYsMTYuMzIzYy0wLjM0OSw1LjA0My0wLjUyNCwxMC4yMTMtMC41MjQsMTUuNQ0KCQljMCwzLjkyNSwwLjQzMiw3LjU1LDEuMjExLDEwLjkzMmgyMDguNDY0YzAuNzgxLTMuMzgyLDEuMjEzLTcuMDA3LDEuMjEzLTEwLjkzMmMwLTUuMjg3LTAuMTc2LTEwLjQ1Ny0wLjUyNi0xNS41DQoJCUMyMjkuNTY2LDIxOC41MjUsMjI4Ljg2OSwyMTMuMDg0LDIyNy44MTgsMjA3LjI0NXoiLz4NCgk8cGF0aCBmaWxsPSIjRDhEOEQ4IiBkPSJNMTI1LDE2Mi44MzRjMTUuODc1LDAsMjkuNDMtNS42MTcsNDAuNjY2LTE2Ljg1YzExLjIzMi0xMS4yMzUsMTYuODUtMjQuNzg5LDE2Ljg1LTQwLjY2Nw0KCQljMC0xNS44NzctNS42MTctMjkuNDI5LTE2Ljg1LTQwLjY2M0MxNTQuNDMsNTMuNDIyLDE0MC44NzUsNDcuODA0LDEyNSw0Ny44MDRzLTI5LjQzNCw1LjYxOS00MC42NjQsMTYuODUyDQoJCUM3My4xLDc1Ljg5LDY3LjQ4NCw4OS40NDEsNjcuNDg0LDEwNS4zMThjMCwxNS44NzgsNS42MTUsMjkuNDMxLDE2Ljg1Miw0MC42NjdDOTUuNTY2LDE1Ny4yMTcsMTA5LjEyNSwxNjIuODM0LDEyNSwxNjIuODM0eiIvPg0KPC9nPg0KPC9zdmc+DQo=" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                                <div>
                                    <a href="#modalhuisgenoot" data-uk-modal class="uk-icon-button uk-icon-plus"></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Huisgenoot toevoegen</h2>
                </div>

                
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="images/student3.jpg" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Jorn Huisman</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted">Bewoner</p>
                </div>

                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="images/student2.jpg" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Tim Nijgaard</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted">Bewoner</p>
                </div>
                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="images/student4.jpg" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Koen Bakker</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted">Bewoner</p>
                </div>

                <div class="uk-width-medium-1-4 uk-text-center">
                    <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                        <figure class="uk-overlay">
                            <img class="uk-border-circle" width="200" height="200" src="images/student1.jpg" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                            </figcaption>
                        </figure>
                    </div>
                    <h2 class="uk-margin-bottom-remove">Nadja Regter</h2>
                    <p class="uk-text-large uk-margin-top-remove uk-text-muted">Bewoner</p>
                </div>

            </div>

            <hr class="uk-grid-divider">

         
            
            
            
        </div>

        <div id="modalhuisgenoot" class="uk-modal">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
                                    <div class="uk-modal-header">
                                        <h2>Huisgenoot toevoegen </h2>
                                    </div>
                                    
                                        <div class="uk-grid">
                                            <div class="uk-form uk-width-1-1">

                                                <div class="uk-form-row">
                                                    <label class="uk-form-label" for="">E-mailadres van huisgenoot</label>
                                                    <div class="uk-form-controls uk-form-icon uk-width-1-1 uk-margin-top">
                                                        <i class="uk-icon-envelope"></i>
                                                        
                                                        <input type="email" class="uk-width-1-1" id="email" placeholder="E-mailadres">
                                                    </div>
                                                </div>
                                                
                                            
                                                
                                            </div>
                                            
                                            
                                        
                                        </div>


                                    
                                            
                                    
                                    <div class="uk-modal-footer uk-text-right">
                                        <button type="button" class="uk-button uk-button-primary">Huisgenoot toevoegen</button>
                                    </div>
                                </div>
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