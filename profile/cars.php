<?php
session_start();
include 'config.php';

$userid =  $_SESSION['logged_user_id'];
	
	$sql = "SELECT * FROM users WHERE userId = '$userid'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	
if(isset($_POST['Submit'])){
	
	
	$new_category = $_POST['car_category'];
	$new_brand = $_POST['car_brand'];
	$new_engine = $_POST['car_engine'];
	$new_year = $_POST['car_year'];
	$new_color = $_POST['car_color'];
	
	$sql = "INSERT INTO car (userId, category, brand, engine, year, color) 
	VALUES ('$userid', '$new_category', '$new_brand', '$new_engine', '$new_year', '$new_color')";

    if (mysqli_query($db, $sql)) {
        // Uspeshno zapisvane v bazata
		
		echo "<script type='text/javascript'>alert('Your data is successful added!')</script>";
		
    } else {
        echo "<script type='text/javascript'>alert('Error, please check your data!')</script>"  . $sql . "<br>" . mysqli_error($db);
    }
}
?>


<!doctype html>
<html lang="en">

<head>
	<title>Характеристики на автомобила</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">-->
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<!--<div class="brand">
				<a href="index.html"><img src="assets/img/logo-dark.png" alt="Auto-Helper" class="img-responsive logo"></a>
			</div>-->
			<div class="container-fluid">
				<!--<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>-->
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Търсене..">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<!--<div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
				</div>-->
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<!--<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>-->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> 
							<span> <?php echo $row['user_name']; ?> </span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>Профил</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Съобщения</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Настройки</span></a></li>
								<li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Изход</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Начало</span></a></li>
						<!--<li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Elements</span></a></li>-->
						<!--<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>-->
						<li><a href="cars.php" class=""></i> <span>Характеристики на автомобила</span></a></li>
						<li><a href="yearpayments.php" class=""></i> <span>Годищни плащания</span></a></li>
						<li><a href="supplies.php" class=""></i> <span>Консумативи</span></a></li>
						<li><a href="#" class=""></i> <span>Сервизи</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-alarm"></i> <span>Известия</span></a></li>
						<!--<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>-->
						<!--<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>-->
					</ul>
				</nav>
			</div>
		</div>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<!--<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.html" class="active"><i class="lnr lnr-home"></i> <span>Начало</span></a></li>-->
						<!--<li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Elements</span></a></li>-->
						<!--<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>-->
						<!--<li><a href="car.php" class=""></i> <span>Характеристики на автомобила</span></a></li>
						<li><a href="yearpayments.php" class=""></i> <span>Годищни плащания</span></a></li>
						<li><a href="supplies.php" class=""></i> <span>Консумативи</span></a></li>
						<li><a href="panels.html" class=""></i> <span>Сервизи</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Известия</span></a></li>-->
						<!--<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>-->
						<!--<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>-->
					<!--</ul>
				</nav>
			</div>
		</div>-->
		<!-- END LEFT SIDEBAR -->
		
		
		
		<!-- MAIN -->
		<div class="main">
		<form action ="cars.php" name="myform" method = "POST">
			<!-- MAIN CONTENT -->
			
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Характеристики на автомобила</h3>
					<div class="row">
						<div class="col-md-6">
					
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Основна категория</h3>
								</div>
									<!--<input type="text" class="form-control" placeholder="text field">-->
									
									<select name="car_category"  class="form-control">
										<option value=""></option>
										<option value="Автомобили и джипове" >Автомобили и джипове</option>
										<option value="Бусове">Бусове</option>
										<option value="Камиони">Камиони</option>	
										<option value="Мотоциклети">Мотоциклети</option>
										<option value="Каравани">Каравани</option>
									</select>
							</div>
									
								<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Марка</h3>
								</div>
								
									<select name="car_brand" class="form-control">
										<option value=""></option>
										<option value="BMW">BMW</option>
										<option value="Audi">Audi</option>
										<option value="Opel">Opel</option>	
										<option value="VW">VW</option>
										<option value="Ford">Ford</option>
									</select>
								</div>
									
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Тип двигател</h3>
								</div>
								
									<select name="car_engine" class="form-control">
										<option value=""></option>
										<option value="Бензинов">Бензинов</option>
										<option value="Дизелов">Дизелов</option>
										<option value="Електрически">Електрически</option>	
										<option value="Хибриден">Хибриден</option>
									</select>
							</div>
									
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Година</h3>
								</div>
								
									<select name="car_year" class="form-control">
										<option value=""></option>
										<option value="2019">2019</option>
										<option value="2018">2018</option>
										<option value="2017">2017</option>
										<option value="year">2016</option>
										<option value="year">2015</option>
										<option value="year">2014</option>
										<option value="year">2013</option>
										<option value="year">2012</option>
										<option value="year">2011</option>
										<option value="year">2010</option>
										<option value="year">2009</option>
										<option value="year">2008</option>
										<option value="year">2007</option>
										<option value="year">2006</option>
										<option value="year">2005</option>
										<option value="year">2004</option>
										<option value="year">2003</option>
										<option value="year">2002</option>
										<option value="year">2001</option>
										<option value="year">2000</option>
										<option value="year">1999</option>
										<option value="year">1998</option>
										<option value="year">1997</option>
										<option value="year">1996</option>
										<option value="year">1995</option>
										<option value="year">1994</option>
										<option value="year">1993</option>
										<option value="year">1992</option>
										<option value="year">1991</option>
										<option value="year">1990</option>	
										</select>
							</div>
									
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Цвят</h3>
								</div>
								
									<select name="car_color" class="form-control">
										<option value=""></option>
										<option value="черен">черен</option>
										<option value="червен">червен</option>
										<option value="тъмно червен">тъмно червен</option>
										<option value="светло червен">светло червен</option>
										<option value="color">син</option>
										<option value="color">тъмно син</option>
										<option value="color">светло син</option>
										<option value="color">бежов</option>
										<option value="color">бордо</option>
										<option value="color">бронз</option>
										<option value="color">бял</option>
										<option value="color">графит</option>
										<option value="color">жълт</option>
										<option value="color">зелен</option>
										<option value="color">тъмно зелен</option>
										<option value="color">златист</option>
										<option value="color">сребрист</option>
										<option value="color">кафяв</option>
										<option value="color">кремов</option>
										<option value="color">металик</option>
										<option value="color">перла</option>
										<option value="color">розов</option>
										<option value="color">сив</option>
										<option value="color">тъмно сив</option>
										<option value="color">светло сив</option>
										</select>
							</div>
									
							<span class="input-group-btn"><button type="submit" name="Submit" class="btn btn-primary">Потвърди</button></span>
							
							
						</div>	
					</div>
				</div>
				
			</div>
		</div>	
</form>		
<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});-->
	</script>
	
</body>


</html>