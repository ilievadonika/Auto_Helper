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
	<!-- blog -->
	<div class="blog">
		<div class="container">
			<div class="agile-blog-grids">
				<div class="col-md-8 agile-blog-grid-left">
					<div class="agile-blog-grid">
						<!--<div class="agile-blog-grid-left-img">
							<a href="single.html"><img src="images/b3.jpg" alt="" /></a>
						</div>-->
						<div class="blog-left-grids">
							<div class="blog-left-left">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</div>
							<div class="blog-left-right">
								<div class="blog-left-right-top">
									<h4><a href="http://www.autoreview.bg/advice/technical_information/read/184/godishen-tehnicheski-pregled-dokumenti-iziskvaniq-i-globi/">КАКВИ ДОКУМЕНТИ СА НЕОБХОДИМИ ЗА ПРЕМИНАВАНЕ НА ГТП</a></h4>
									<p>Публикувано <a href="about.php">Admin</a> &nbsp;&nbsp; 16 ноември, 2019 &nbsp;&nbsp; 
								</div>
								<div class="blog-left-right-bottom">
									<p>Регистрационен талон на автомобила – част I и част II (голям и малък талон), като се допуска и ксерокопие на големия.</p>
										<p>Полица от валидна застраховка гражданска отговорност;</p>
										<p>Ако автомобилът има газова уредба трябва да разполага със стикер "GAS" на задното стъкло (удостоверението за ГТП, удостоверява и изправността на газовата уредба);</p>
										<p>Документ за платен данък МПС;</p>
										<p>Документ за самоличност на лицето, което представя автомобила на преглед;</p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<div class="agile-blog-grid">
						<!--<div class="agile-blog-grid-left-img">
							<a href="single.html"><img src="images/b3.jpg" alt="" /></a>
						</div>-->
						<div class="blog-left-grids">
							<div class="blog-left-left">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</div>
							<div class="blog-left-right">
								<div class="blog-left-right-top">
									<h4><a href="https://www.easy-ins.bg/5-prichini-da-sklyuchite-avtokasko-na-avtomobila-si-oshte-sega/">5 Причини да сключите Автокаско на автомобила си още сега</a></h4>
									<p>Публикувано <a href="about.php">Admin</a> &nbsp;&nbsp; 29 януари, 2018 &nbsp;&nbsp; 
								</div>
								<div class="blog-left-right-bottom">
									<p>Покритие на щети по автомобила, дори и ако сте виновни или неволно сами увредите колата си.
Ако имате само задължителната застраховка Гражданска Отговорност, бихте получили обезщетение само ако сте невинната страна в инцидента, нещо повече дори и Вие да сте пострадалия, ако извършителят е неизвестен, Вие бихте платили за възстановяването на автомобила си.

Кражба на МПС – Едва 10% от кражбите на автомобили в България се разкриват. Можем ли да се защитим от автокрадците? Сигурен начин да се предпазим от кражба на автомобила едва ли има. В случай, че автомобила бъде откраднат, единствено със застраховка Автокаско може да получите обезщетение. Така няма да претърпите големи финансови загуби.

Злоумишлени действия и щети в паркирано състояние – Едни от най- неприятните щети по автомобила, за които дори нямате вина. Просто на сутринта намирате автомобила си със счупено странично огледало или ударен от друг автомобил. Какво ще направите в такава ситуация и кой ще плати тези щети? Застраховка автокаско ще се погрижи и за този вид неприятни щети по колата.

Бързо изплащане на обезщетение – Дори да сте невинен в пътен инцидент и да разполагате само с Гражданска Отговорност изплащането на полагаемото обезщетение може сериозно да се забави. Срокът за определяне и изплащане на обезщетението по задължителна застраховка Гражданска отговорност е до 3/три/ месеца. Но в някой случай не може да чакате толкова много. Корено различна би била ситуацията при сключена и застраховка Каско. Обезщетенията при полици Каско е 15 дни- значително по-бързо изплащане на обезщетение, следователно и възстановяване на щетите по автомобила.

Спокойствието – Няма нищо по-хубаво от това да се чувствате защитени и спокойни, нали? Със сключването на Автокаско прехвърляте притесненията за автомобила в други ръце, а така грижите Ви стават с една по-малко.Нещо повече: в случай на нужда от помощ или съвет разчитате на денонощния ни асистанс. Знаейки, точно какво да направим, след като сте претърпели застрахователно събитие е от ключово значение за избягване на бъдещи проблеми и допълнителни загуби.</p>
									
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<div class="agile-blog-grid">
						<!--<div class="agile-blog-grid-left-img">
							<a href="single.html"><img src="images/s1.jpg" alt="" /></a>
						</div>-->
						<div class="blog-left-grids">
							<div class="blog-left-left">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</div>
							<div class="blog-left-right">
								<div class="blog-left-right-top">
									<h4><a href="http://www.policabg.com/%D0%B7%D0%B0%D1%81%D1%82%D1%80%D0%B0%D1%85%D0%BE%D0%B2%D0%BA%D0%B0-%D0%B3%D1%80%D0%B0%D0%B6%D0%B4%D0%B0%D0%BD%D1%81%D0%BA%D0%B0-%D0%BE%D1%82%D0%B3%D0%BE%D0%B2%D0%BE%D1%80%D0%BD%D0%BE%D1%81%D1%82/">Защо трябва да имам застраховка Гражданска отговорност и дава ли ми нещо тя?</a></h4>
									<p>Публикувано <a href="about.php">Admin</a> &nbsp;&nbsp; февруари 12, 2017&nbsp;&nbsp; 
								</div>
								<div class="blog-left-right-bottom">
									<p>Това не е данък или поредната такса!!! Това е застраховка с много високи лимити на покритие за имуществени или неимуществени вреди.Да, години наред я ползвате и си мислите: “Само плащам и не я ползвам!”. И по-добре, че не я ползвате, защото тя е застраховка в полза на трети лица - на лицата, които са пострадали и Вие сте виновни за това.
И да, тя е  задължителна! Вие сте примерен шофьор, но тя е задължителна. И това е добре, защото знаете, че ако някой НЕ такъв като Вас Ви удари, той също е задължен да има застраховка и Вие ще има от кого да получите обезщетение.</p>
									
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<div class="agile-blog-grid">
						<!--<div class="agile-blog-grid-left-img">
							<a href="single.html"><img src="images/b1.jpg" alt="" /></a>
						</div>-->
						<div class="blog-left-grids">
							<div class="blog-left-left">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</div>
							<div class="blog-left-right">
								<div class="blog-left-right-top">
									<h4><a href="http://www.policabg.com/%D0%B7%D0%B0%D1%81%D1%82%D1%80%D0%B0%D1%85%D0%BE%D0%B2%D0%BA%D0%B0-%D0%B3%D1%80%D0%B0%D0%B6%D0%B4%D0%B0%D0%BD%D1%81%D0%BA%D0%B0-%D0%BE%D1%82%D0%B3%D0%BE%D0%B2%D0%BE%D1%80%D0%BD%D0%BE%D1%81%D1%82/">КОГА НЕ ВАЖИ ВАШАТА ЗАСТРАХОВКА ГРАЖДАНСКА ОТГОВОРНОСТ?</a></h4>
									<p>Публикувано<a href="about.php">Admin</a> &nbsp;&nbsp; февруари 12, 2017&nbsp;&nbsp; 
								</div>
								<div class="blog-left-right-bottom">
									<p> Застрахователят ще изплати обезщетение при всички случаи на нанесени вреди на пострадало лице или имущество, но може да предяви иск /регрес/ към Вас, ако:</p>
									<p>сте управлявали МПС след употреба на алкохол или упойващи вещества;</p>
									<p>ако сте отказали да се подложите на проверка за алкохол;</p>
									<p>ако сте управлявали МПС без валидни документи;</p>
									
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					
					
					<!--<nav>
						<ul class="pagination">
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">«</span>
								</a>
							</li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true">»</span>
								</a>
							</li>
						</ul>
					</nav>-->
				</div>
				<div class="col-md-4 agile-blog-grid-right">
					<div class="categories">
						<h3>Категории</h3>
						<ul>
							<li><a href="#">Гражданска отговорност</a></li>
							<li><a href="#">Автокаско</a></li>
							
						</ul>
					</div>
					<!--<div class="categories">
						<h3>Archive</h3>
						<ul class="marked-list offs1">
							<li><a href="#">May 2017 (7)</a></li>
							<li><a href="#">April 2017 (11)</a></li>
							<li><a href="#">March 2017 (12)</a></li>
							<li><a href="#">February 2017 (14)</a> </li>
							<li><a href="#">January 2017 (10)</a></li>    
							<li><a href="#">December 2017 (12)</a></li>
							<li><a href="#">November 2017 (8)</a></li>
							<li><a href="#">October 2017 (7)</a> </li>
							<li><a href="#">September 2017 (8)</a></li>
							<li><a href="#">August 2017 (6)</a></li>                          
						</ul>
					</div>-->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //blog -->
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
</body>
</html>