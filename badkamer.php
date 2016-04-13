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
                    <li class="uk-active">
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
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Badkamer</div>
				</div>
            </nav>
            <!-- Einde navigatiebalk --> 
	
	
        <div class="uk-container uk-container-center wrap">
		

		
			

   
            <!--Breadcrumbs-->
   <ul class="uk-breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="uk-active nu"><span>Badkamer</span></li>
   </ul>
   <!--Einde breadcrumbs-->
			
			
	<hr class="uk-article-divider dividemetmargin">		
			<!-- Grid voor de twee buttons --> 
            <div class="uk-grid">
                <div class="uk-width-medium-1-1">
                    <div class="uk-vertical-align uk-text-center">
                        <div class="uk-vertical-align-middle uk-width-1-2">
                            <p>
                                <a class="uk-button uk-button-primary uk-button-large uk-margin-bottom" href="#modalreserveren" data-uk-modal>Reserveer</a>
                                <a class="uk-button uk-button-primary uk-button-large" href="#modaloverzicht" data-uk-modal>Overzicht</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
		
			<!-- Grid voor de beschikbaarheid --> 
			<div class="uk-grid">
			
                <div class="uk-width-medium-1-1">

                    <div class="uk-vertical-align uk-text-center" style="background: url('images/bathroom.jpg') no-repeat; background-size: cover; height: 500px;">
                        <div class="uk-vertical-align-middle uk-width-1-2">
                            <h1 class="uk-heading-large">De badkamer is op dit moment: <div class="uk-alert uk-alert-danger">BEZET</div></h1>
                            <p class="uk-text-large">Vrij over c.a.:</p>
                           <div class="uk-progress">
							<div class="uk-progress-bar" style="width: 80%;">4m31s</div>
						   </div>
                        </div>
                    </div>

                </div>
            </div>
			<h2>Recente reserveringen: </h2>
			
			<!-- Reserveringen --> 
			<div class="uk-grid">
				<div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1">
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
				
				<div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1">
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
			
	
			
			
			<hr class="uk-article-divider dividemetmargin">	
			

            </div>

        <div id="modalreserveren" class="uk-modal">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
                                    <div class="uk-modal-header">
                                        <h2>Reserveren </h2>
                                    </div>
                                    
                                        <div class="uk-grid">
                                            <div class="uk-form uk-width-1-1">
                                    
                                                <div class="uk-form-row">
                                                    <label class="uk-form-label" for="">Datum</label>
                                                    <div class="uk-form-controls uk-form-icon uk-width-1-1">
                                                        <i class="uk-icon-calendar"></i>
                                                        
                                                        <input type="text" class="uk-width-1-1" id="reserverendatum" placeholder="Datum">
                                                    </div>
                                                </div>
                                                
                                                <div class="uk-form-row">
                                                    <label class="uk-form-label" for="">Begintijd</label>
                                                    <div class="uk-form-controls uk-form-icon uk-width-1-1">
                                                        <i class="uk-icon-clock-o"></i>
                                                        
                                                        <input type="text" class="uk-width-1-1" id="begintime" placeholder="Begintijd">
                                                    </div>
                                                </div>

                                                <div class="uk-form-row">
                                                    <label class="uk-form-label" for="">Eindtijd</label>
                                                    <div class="uk-form-controls uk-form-icon uk-width-1-1">
                                                        <i class="uk-icon-clock-o"></i>
                                                        
                                                        <input type="text" class="uk-width-1-1" id="endtime" placeholder="Eindtijd">
                                                    </div>
                                                </div>
                                                
                                            
                                                
                                            </div>
                                            
                                            
                                        
                                        </div>


                                    
                                            
                                    
                                    <div class="uk-modal-footer uk-text-right">
                                        <button type="button" class="uk-button uk-button-primary">Reserveren</button>
                                    </div>
                                </div>
                            </div>

                             <div id="modaloverzicht" class="uk-modal">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
                                    <div class="uk-modal-header">
                                        <h2>Mijn badkamer reserveringen</h2>
                                    </div>
                                    
                                        <div class="uk-grid">
                                            <div class="uk-form uk-width-1-1">
											
													<article class="uk-comment">
														<header class="uk-comment-header">
															<h4 class="uk-comment-title uk-width-2-3">Sollicitatiegesprek</h4>  
															<div class="uk-comment-meta"> Dinsdag 25 maart 2016 | 7:00 - 7:15 </div>
														</header>
														<div class="uk-comment-body">
															<p>Graag wil ik 's ochtends de badkamer gebruiken zodat ik op tijd kan zijn voor mijn sollicitatiegesprek. </p>
															 <p>
																	<a class="uk-button uk-button-primary " href="">Bewerken</a>
																	<a class="uk-button uk-button-primary " href="">Verwijderen</a>
															</p>								
														</div>
													</article>
                                               <hr class="uk-article-divider dividereserv">
											   
											   		<article class="uk-comment">
														<header class="uk-comment-header">
															<h4 class="uk-comment-title uk-width-2-3">Tentamen</h4>  
															<div class="uk-comment-meta"> Vrijdag 7 april 2016 | 7:00 - 7:15 </div>
														</header>
														<div class="uk-comment-body">
															<p>Graag wil ik 's ochtends de badkamer gebruiken zodat ik op tijd kan zijn voor mijn tentamen.  </p>
															 <p>
																	<a class="uk-button uk-button-primary " href="">Bewerken</a>
																	<a class="uk-button uk-button-primary " href="">Verwijderen</a>
															</p>	
														</div>
													</article>
                                               <hr class="uk-article-divider dividereserv">
                                                
                                            
                                                
                                            </div>
                                            
                                            
                                        
                                        </div>


                                    
                                            
                                    
                                    <div class="uk-modal-footer uk-text-right">
                                        
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
                    <li class="uk-active">
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