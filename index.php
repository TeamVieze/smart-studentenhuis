<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="uk-height-1-1">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login layout example - UIkit documentation</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
        <link rel="stylesheet" href="css/uikit.min.css">
		<link rel="stylesheet" href="css/style.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/uikit.min.js"></script>
    </head>

    <body class="uk-height-1-1">

        <div class="uk-vertical-align uk-text-center uk-height-1-1">
            <div class="uk-vertical-align-middle" style="width: 250px;">

                <img class="uk-margin-bottom" width="280" height="240" src="images/logo.png" alt="">

                <form class="uk-panel uk-panel-box uk-form">
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-form-large" type="text" placeholder="Username">
                    </div>
                    <div class="uk-form-row">
                        <input class="uk-width-1-1 uk-form-large" type="text" placeholder="Password">
                    </div>
                    <div class="uk-form-row">
                        <a class="uk-width-1-1 uk-button uk-button-primary uk-button-large" href="#">Login</a>
                    </div>
                    <div class="uk-form-row uk-text-small">
                        <label class="uk-float-left"><input type="checkbox"> Remember Me</label>
                        <a class="uk-float-right uk-link uk-link-muted" href="#">Forgot Password?</a>
                    </div>
									
                </form>
				<a href="#modal6" data-uk-modal>Nog geen account? Klik hier om een account te maken </a>
            </div>
			

			
			
			
			
        </div>

						
                       <div id="modal6" class="uk-modal">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
                                    <div class="uk-modal-header">
                                        <h2>Maak een nieuw account aan </h2>
                                    </div>
									
										<div class="uk-grid">
											<div class="uk-form uk-width-1-2">
									
												<div class="uk-form-row">
													<label class="uk-form-label" for="">Gebruikersnaam</label>
													<div class="uk-form-controls uk-form-icon uk-width-1-1">
														<i class="uk-icon-user"></i>
														
														<input type="text" class="uk-width-1-1" id="username" placeholder="Gebruikersnaam">
													</div>
												</div>
												
												<div class="uk-form-row">
													<label class="uk-form-label" for="">Voornaam</label>
													<div class="uk-form-controls uk-form-icon uk-width-1-1">
														<i class="uk-icon-child"></i>
														
														<input type="text" class="uk-width-1-1" id="username" placeholder="Voornaam">
													</div>
												</div>
												
												<div class="uk-form-row">
													<label class="uk-form-label" for="">Achternaam</label>
													<div class="uk-form-controls uk-form-icon uk-width-1-1">
														<i class="uk-icon-male"></i>
														
														<input type="text" class="uk-width-1-1" id="lastname" placeholder="Achternaam">
													</div>
												</div>
												
												<div class="uk-form-row">
													<label class="uk-form-label" for="">E-mail adres</label>
													<div class="uk-form-controls uk-form-icon uk-width-1-1">
														<i class="uk-icon-envelope"></i>
														
														<input type="email" class="uk-width-1-1" id="email" placeholder="E-mail">
													</div>
												</div>
												
												<div class="uk-form-row">
													<label class="uk-form-label" for="">Wachtwoord</label>
													<div class="uk-form-controls uk-form-icon uk-width-1-1">
														<i class="uk-icon-lock"></i>
														
														<input type="password" class="uk-width-1-1" id="password" placeholder="Wachtwoord">
													</div>
												</div>
											
												
											</div>
											
											
											
											<div class="uk-width-1-2">
													<img width="" height="" src="images/op.jpeg" alt="">
													
													
													
											</div>
										
										</div>


									
											
                                    
									<div class="uk-modal-footer uk-text-right">
                                        <button type="button" class="uk-button uk-button-primary">Registreren</button>
                                    </div>
                                </div>
                            </div>
		
		
    </body>

</html>