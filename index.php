<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html lang="en" class="no-js lt-ie10"> <![endif]-->
<html class="no-js" lang="en">
	<head>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv='cache-control' content='no-cache' />
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />

		<meta class="temp" name="description" content="Ned School"/>
		<meta class="temp" name="copyright"content="© Copyright 2015 Ned">
		<meta class="temp" name="robots" content="index, follow">
		<link class="temp" rel="alternate" hreflang="en" href="http://ned-school.com.mx" />

		<title>Ned | School</title>

		<!-- fonts.googleapis -->
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
		<!-- import css -->
        <link rel="stylesheet" href="css/import.css">
    	<!-- icon -->
        <link rel="apple-touch-icon" href="img/ico/apple-touch-icon.png">
        <link rel="shortcut icon" href="img/ico/favicon.ico">
        <!-- Google Analytics -->
        <!-- End -> Google Analytics -->
        <!--[if lt IE 9]>
		    <script src="lib/plugins/html5shiv/html5shiv.min.js"></script>
		<![endif]-->
		<!--[if lt IE 10]>
		    <script src="lib/plugins/media-match/media.match.min.js"></script>
		    <script src="lib/plugins/respond/respond.min.js"></script>
		<![endif]-->
        <script>
            var nav = navigator.appName;

            if(nav == "Microsoft Internet Explorer"){
                // Detectamos si nos visitan desde IE
                if(nav == "Microsoft Internet Explorer"){
                    // Convertimos en minusculas la cadena que devuelve userAgent
                    var ie = navigator.userAgent.toLowerCase();
                    // Extraemos de la cadena la version de IE
                    var version = parseInt(ie.split('msie')[1]);

                    // Dependiendo de la version mostramos un resultado
                    switch(version){
                        case 6:
                            alert("Estas usando IE 6, es obsoleto. \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");
                            break;
                        case 7:
                            alert("Estas usando IE 7, es obsoleto \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");
                            break;
                        case 8:
                            alert("Estas usando IE 8, es obsoleto \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");
                            break;
                        /*case 9:
                            alert("Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v10 y v11 ");
                            console.log("Estas usando IE 9, mas o menos compatible");
                            break;*/
                        default:
                            console.log("Usas una version compatible");
                            break;
                    }
                }
            }
        </script>
	</head>
	<body>

		<!-- header -->
		<header id="header-school" class="clearfix">
			<div class="home-page">
				<div class="top-bar">
					<div class="menu-head">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-8"></div>
									<div class="col-md-4">
										<ul class="menu-head-ul">
											<li class="menu-head-li">
												<a href="" class="menu_head_a hint--bottom ico_home" data-hint="Home">
													<div id="home">Home</div>
												</a>
											</li>
											<li class="menu-head-li">
												<a href="" class="menu_head_a hint--bottom ico_login" data-hint="Login">
													<div id="login">Login</div>
												</a>
											</li>
											<li class="menu-head-li">
												<a href="" class="menu_head_a hint--bottom ico_contact" data-hint="Contacto">
													<div id="contacto">Contacto</div>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->

		<!-- Auxiliar Temporal Inputs's DIV -->
    	<div id='hidden-inputs-session'></div>
    	<!-- Auxiliar Temporal Inputs's DIV -->
    	<div id='hidden-inputs-temporal'></div>

		<!-- section content page -->
		<section id="content-section" class="page">
			<div class="content">
		    	<!--Templates's DIV-->
		    	<div class="wrapper_content_interactive" id='content-temporal-interactive'></div>
			</div>
		</section>
		<!-- end section content page -->

		<!-- footer -->
		<footer id="footer-school"></footer>
		<!-- end footer -->


		<!-- MAIN -->
		<script src="lib/jquery.js"></script>
		<script src="lib/modernizr.js"></script>
		<script src="lib/bootstrap.js"></script>
		<!-- CORE -->
		<script src="lib/jquery.gdb.js"></script>
		<script src="lib/jquery-ui.js"></script>
		<script src="lib/underscore.js"></script>
		<script src="lib/moment.js"></script>
		<script src="lib/accounting.js"></script>
		<script src="lib/finch.js"></script>
		<!-- HANDLEBARS -->
		<script src="lib/handlebars.runtime.js"></script>
		<!-- FORMS -->
		<script src="lib/forms.js"></script>
		<script src="lib/sha512.js"></script>
		<!-- TEMPLATES -->
		<script src='templates/min/templates.min.js'></script>
		<!-- PLUGINS -->
		<!--
		<script src="lib/plugins/"></script>
		-->
		<!-- CORE -->
	    <script src='js/objects.js'></script>
	    <script src='js/method.js'></script>
	    <script src='js/model.js'></script>
	    <script src='js/room.js'></script>
	    <script src='js/main.js'></script>
		<?php /*
		<!-- CORE JS -->
		<script src='js/min/core.min.js'></script>
		*/ ?>
	</body>
</html>

