<!--Author: W3layouts
Author: Lesner Villega
-->
<!DOCTYPE HTML>
<html lang="UTF-8">
	<head>
		<meta charset="utf-8">
		<title>WebInkApp | Inicio</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
	</head>
	<body>
		<!----- start-header---->
			<div id="home" class="header">
					<div class="top-header">
						<div class="container">
						<div class="logo">
							<!--<a href="#"><img src="images/logo.png" title="Johndeo" /></a>-->
							<a href="#home"><strong>WebInkApp</strong></a>
						</div>
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
								<li><a href="#home" class="scroll">Inicio</a><span> </span></li>
								<li><a href="#about" class="scroll">Sobre Mí </a></li>
								<li><a href="#services" class="scroll">Servicios</a></li>
								<li><a href="#work" class="scroll">Mi Trabajo</a><span> </span></li>
								<li><a href="#contact" class="scroll">Contáctame</a></li>
								<div class="clearfix"> </div>
							</ul>
							<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!----- //End-header---->
			<!----banner---->
			<div class="banner">
				<!---- banner-info ---->
				<div class="banner-info text-center">
					<p>Imagina tu Negocio en el corazón de Internet a un clic de distancia</p>
					<h1>WebInkApp</h1>
					<span>La clave está en la Persuación y en el objetivo de tu Mensaje</span>
					<label> </label>
					<div class="clearfix"> </div>
					<a class="bannner-btn scroll" href="#services">¿Quieres saber más?</a>
				</div>
				<!-- //banner-info ---->
			</div>