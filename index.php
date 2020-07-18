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
										<h3>Направи регистрацията си сега</h3>
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
	<!-- welcome -->
	<!--<div class="welcome">
		<div class="container">
			<div class="w3ls-welcome-grids">
				<div class="col-md-4 w3l-welcome-left">
					<h2>Welcome</h2>
					<h5>Integer mollis porttitor nibh, id pellentesque mauris porta et.</h5>
					<p>Donec bibendum ligula sit amet auctor vulputate. Maecenas elementum, magna nec interdum venenatis, nibh enim gravida sem, id consectetur justo erat non tortor. Nam ultricies eget erat quis dapibus. Aenean eu scelerisque lacus, et fringilla odio.<span>Sed vestibulum sapien ornare ex sodales, eu feugiat ipsum tempor. Vivamus ante orci, congue sit amet aliquam non, sagittis eget justo. Curabitur mollis hendrerit nunc, id luctus sem vestibulum id.</span></p>
				</div>
				<div class="col-md-4 w3l-welcome-img">
				
				</div>
				<div class="col-md-4 w3l-welcome-right">
					<h3>History of us</h3>
					<h5>Integer mollis porttitor nibh, id pellentesque mauris porta et.</h5>
					<p>Duis interdum malesuada nunc, nec vestibulum erat sagittis quis. Pellentesque imperdiet lorem ac auctor tempor. Donec convallis ligula eget mi consequat, sed euismod neque varius. Nulla eget risus nec ligula volutpat lacinia.<span>Integer eleifend nec ligula vitae feugiat. Nulla eleifend mauris et elementum placerat.</span></p>
					<div class="w3l-button">
						<a href="single.html">More</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>-->
	<!-- //welcome -->
	<!-- services -->
	<div class="services">
		<!--<div class="col-md-5 w3ls-services-left">
			
		</div>-->
		<div class="col-md-7 w3ls-services-right">
			<h3>Нашите услуги</h3>
			<div class="w3ls-services-icons">
				<!--<div class="agileits-icon-grid">
					<div class="icon-left hvr-radial-out">
						<i class="fa fa-cog" aria-hidden="true"></i>
					</div>-->
					<div class="icon-right">
						<h5>„Auto-Helper”  предоставя лесен и достъпен начин на своите потребители да следят срокове за изтичане на: </h5>
						<h5>винетка, </h5>
						<h5>гражданска отговорност, </h5>
						<h5>автокаско, </h5>
						<h5>технически преглед, </h5>
						<h5> лизинг. </h5>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="agileits-icon-grid">
					<!--<div class="icon-left hvr-radial-out">
						<i class="fa fa-heart" aria-hidden="true"></i>
					</div>-->
					<!--<div class="icon-right">
						<h5>Направете регистрацията си сега!</h5>
						
					</div>-->
					<div class="clearfix"> </div>
				</div>
				<!--<div class="agileits-icon-grid">
					<div class="icon-left hvr-radial-out">
						<i class="fa fa-paper-plane" aria-hidden="true"></i>
					</div>-->
					<div class="icon-right">
						<h5>Проверете за качествен сервиз във вашия град</h5>
		
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //services -->
	<!-- work -->
	<div class="work">
		<div class="container">
			<!--<div class="agileits-heading">
				<h3>Latest work</h3>
			</div>-->
		</div>
		<!--<div class="work-grids">
			<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<div class="work-grid-info">
							<img src="images/w1.jpg" alt="" />
							<div class="work-grid-caption"> 
								<i class="fa fa-wrench" aria-hidden="true"></i>
								<h4>Carmotive</h4>
								<p>Fusce laoreet</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="work-grid-info">
							<img src="images/w2.jpg" alt="" />
							<div class="work-grid-caption"> 
								<i class="fa fa-wrench" aria-hidden="true"></i>
								<h4>Carmotive</h4>
								<p>Lorem ipsum</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="work-grid-info">
							<img src="images/w3.jpg" alt="" />
							<div class="work-grid-caption"> 
								<i class="fa fa-wrench" aria-hidden="true"></i>
								<h4>Carmotive</h4>
								<p>Nunc tincidunt</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="work-grid-info">
							<img src="images/w4.jpg" alt="" />
							<div class="work-grid-caption"> 
								<i class="fa fa-wrench" aria-hidden="true"></i>
								<h4>Carmotive</h4>
								<p>Phasellus magna</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="work-grid-info">
							<img src="images/w5.jpg" alt="" />
							<div class="work-grid-caption"> 
								<i class="fa fa-wrench" aria-hidden="true"></i>
								<h4>Carmotive</h4>
								<p>Fusce laoreet</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="work-grid-info">
							<img src="images/w6.jpg" alt="" />
							<div class="work-grid-caption"> 
								<i class="fa fa-wrench" aria-hidden="true"></i>
								<h4>Nulla facilisi</h4>
								<p>Lorem ipsum</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="work-grid-info">
							<img src="images/w7.jpg" alt="" />
							<div class="work-grid-caption"> 
								<i class="fa fa-wrench" aria-hidden="true"></i>
								<h4>Carmotive</h4>
								<p>Nunc tincidunt</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="work-grid-info">
							<img src="images/w1.jpg" alt="" />
							<div class="work-grid-caption">
								<i class="fa fa-wrench" aria-hidden="true"></i>
								<h4>Carmotive</h4>
								<p>Phasellus magna</p>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>-->
	<!-- //work -->
	<!-- testimonial -->
	<!--<div class="testimonial jarallax">
		<div class="testimonial-dot">
			<div class="container">
				<div class="agileits-heading testimonial-heading">
					<h3>Testimonial</h3>
				</div>
				<div class="wthree-testimonial-grid">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides" id="slider3">
								<li>
									<div class="w3-agile-testimonial">
										<div class="testimonial-info">
											<h4>Contrary to popular belief, Lorem Ipsum</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
										</div>
										<div class="testimonial-img">
											<div class="testimonial-img-left">
												<img src="images/ts1.jpg" alt="" />
											</div>
											<div class="testimonial-img-right">
												<h5>George Clarke</h5>
												<p>Consectetur</p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="w3-agile-testimonial">
										<div class="testimonial-info">
											<h4>Suspendisse lobortis, elit sit amet blandit</h4>
											<p>Donec at euismod turpis, gravida condimentum nibh. Donec ac orci fermentum, rhoncus eros eu, viverra tellus. Nunc vitae posuere ex. Vivamus dapibus tellus ut arcu faucibus pretium. Duis blandit nec ipsum et ornare. Nunc metus lorem, rhoncus vel nulla sed, iaculis bibendum lacus.</p>
										</div>
										<div class="testimonial-img">
											<div class="testimonial-img-left">
												<img src="images/ts2.jpg" alt="" />
											</div>
											<div class="testimonial-img-right">
												<h5>Divide Rule</h5>
												<p>Fermentum</p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="w3-agile-testimonial">
										<div class="testimonial-info">
											<h4>Cras vitae ultricies dui, et lobortis</h4>
											<p>Nullam imperdiet vulputate ligula quis venenatis. Sed venenatis massa faucibus, porttitor turpis nec, sagittis nunc. Donec ac tempus arcu, nec pellentesque massa. Integer interdum, nisl ut efficitur malesuada, mi lorem hendrerit sem, a tincidunt purus nunc a eros. Fusce accumsan</p>
										</div>
										<div class="testimonial-img">
											<div class="testimonial-img-left">
												<img src="images/ts3.jpg" alt="" />
											</div>
											<div class="testimonial-img-right">
												<h5>Stuart Binny</h5>
												<p>Porttitor</p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
							</ul>
						</div>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
								// Slideshow 4
								$("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:false,
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
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- //testimonial 
	<!-- subscribe 
	<div class="wthree-subscribe">
		<div class="container">
			<div class="agileits-heading">
				<h3>Newsletter</h3>
			</div>
			<!--<div class="w3-agileits-subscribe-form">
				<form action="#" method="post">
					<input type="text" placeholder="Subscribe" name="Subscribe" required="">
					<button class="btn1">Subscribe</button>
				</form>
			</div>
		</div>
	</div>-->
	<!-- //subscribe -->
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