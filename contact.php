<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Auto-helper | Home </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Carmotive web, Auto web, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<link href="css/owl.theme.css" rel="stylesheet">
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Cinzel:400,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 4,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="banner-dot">
			<div class="header-top">
				<div class="container">
					<div class="header-top-left">
						<p><i class="fa fa-home" aria-hidden="true"></i> Братя Търневи 13 , Пловдив</p>
					</div>
					<div class="header-top-right">
						<p><i class="fa fa-phone" aria-hidden="true"></i> +359 882 717 554</p>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="container">
					<div class="header-left">
						<div class="w3layouts-logo">
							<h1>
								<a href="index.php">Auto-Helper</a>
							</h1>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="w3layouts-banner-slider">
				<div class="container">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="agileits-banner-info">
										<h3>Направи регистрацията си сега <span>Регистрация</span></h3>
										<div class="w3-button">
											<a href="reg/index.php">Вход /Регистрация</a>
										</div>
									</div>
								</li>
								<li>
									<div class="agileits-banner-info">
										<h3>Stay connect <span>we will do the rest</span></h3>
										<!--<div class="w3-button">
											<a href="single.html">More</a>-->
										</div>
									</div>
								</li>
							</ul>
						</div>
						<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager:true,
								nav:true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						 </script>
						<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
			<div class="header-right">
				<div class="container">
						<div class="top-nav">
							<nav class="navbar navbar-default">
								<!--<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>-->
								<!--navbar-header-->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav navbar-right">
										<li><a href="index.php" class="active">Вход</a></li>
										<li><a href="about.php">За Нас</a></li>
										<li><a href="reg/index.php">Профил</a></li>
										<!--<li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Codes<span class="caret"></span></a>
											<ul class="dropdown-menu"> 
												<li><a class="hvr-bounce-to-bottom" href="icons.html">Icons</a></li>
												<li><a class="hvr-bounce-to-bottom" href="typography.html">Typography</a></li>          
											</ul>
										</li>	-->
										<li><a href="forum.php">Форум</a></li>
										<li><a href="contact.php">Контакти</a></li>
									</ul>	
									<div class="clearfix"> </div>	
								</div>
							</nav>
						</div>
						<div class="clearfix"> </div>
					</div>
			</div>
			<!--<div class="banner-social">
				<div class="container">
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
			</div>-->
		</div>
	</div>
	<!-- //banner -->
	<!-- contact -->
	<div class="contact-top">
		<!-- container -->
		<div class="container">
			<div class="map">
			
			<!-- Contact -->

		<div class="contact_map">

			<!-- Google Map -->
			
			<style>
					.google-maps {
						position: relative;
						padding-bottom: 75%; // This is the aspect ratio
						height: 0;
						overflow: hidden;
					}
					.google-maps iframe {
						position: absolute;
						top: 0;
						left: 0;
						width: 100% !important;
						height: 100% !important;
					}
			</style>

<div class="google-maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2907.3471858616263!2d27.93193131500878!3d43.223179979138294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a4543efa127c01%3A0xb3ceb11a4a5d4055!2z0YPQuy4g4oCe0KHRgtGD0LTQtdC90YLRgdC60LDigJwgMSwgOTAxMCDQm9C10LLRgdC60LgsINCS0LDRgNC90LA!5e0!3m2!1sbg!2sbg!4v154656330616" width="600" height="450" frameborder="0" style="border:0"></iframe>
</div>
			</div>
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left">
					<h3>Адреси</h3>
					<p>Братя Търневи 13
						Пловдив
					</p>
					<h4>Контакти</h4>
					<p>Телефон: +359 882 717 554
						<span><span>
						E-mail: <a href="akrastelnikova@gmail.com">akrastelnikova@gmail</a>
					</p>
				</div>
				<div class="col-md-6 contact-form">
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Име" required="">
						<input type="email" name="Email" placeholder="Email" required="">
					
						<textarea name="Message" placeholder="Съобщение" required=""></textarea>
						<input type="submit" value="Изпрати">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //contact -->
	<!-- footer -->
	<div class="w3-agile-footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Адреси</h4>
					</div>
					<div class="footer-grid-info">
							<p>
							<span>Братя Търневи 13</span></p>
						</p>
						<p class="phone">Телефон : +359 882 717 554
							<span>Email : <a href="akrastelnikova@gmail.com">akrastelnikova@gmail.com</a></span>
							
						</p>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Помощ</h4>
					</div>
					<div class="footer-grid-info">
						<ul>
							<li><a href="index.php">Вход</a></li>
							<li><a href="about.php">За нас</a></li>
							<li><a href="reg/index.php">Профил</a></li>
							<!--<li><a href="icons.html">Icons</a></li>-->
							<!--<li><a href="typography.html">Typography</a></li>-->
							<li><a href="forum.php">Форум</a></li>
							<li><a href="contact.php">Контакти</a></li>
						</ul>
					</div>
				</div>
				<!--<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Newsletter</h4>
					</div>
					<div class="agile-footer-grid">
						<ul class="w3agile_footer_grid_list">
							<li>Ut aut reiciendis voluptatibus maiores <a href="#">http://example.com</a> alias, ut aut reiciendis.
								<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
							<li>Itaque earum rerum hic tenetur a sapiente delectus <a href="#">http://example.com</a><span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Follow</h4>
					</div>
					<div class="social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits-w3layouts-copyright">
				<p>© 2017 Carmotive . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
			</div>
		</div>
	</div>-->
	<!-- //footer -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/owl.carousel.js"></script>  
</body>	
</html>