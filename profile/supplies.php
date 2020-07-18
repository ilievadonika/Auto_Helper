<html>
<?php
session_start();
include 'config.php';

//if(isset($_SESSION['logged_user'])){ 
//header("Location: profile_dashboard\template\index.php");
//}

if(isset($_POST['btnSignup'])){
	
	$data1 = $_POST['data1'];
	$data2 = $_POST['data2'];
	
	
	$sql = "INSERT INTO supplies (data1, data2) 
	VALUES ('$data1', '$data2')";

    if (mysqli_query($db, $sql)) {
        // Uspeshno zapisvane v bazata
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}
?>
</html>

<!doctype html>
<html lang="en">

<head>
	<title>Консумативи</title>
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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>Профил</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Съобщения</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Настройки</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Изход</span></a></li>
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
						<li><a href="" class=""></i> <span>Сервизи</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Известия</span></a></li>
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
		
		
		<div class="main">
	
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Консумативи</h3>
					<div class="Top Center">
						<div class="col-md-4">
					
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Дата на смяна на масло</h3>
									<input type="text" class="form-control" placeholder="">
									
	                                 <div>
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

									});
								</script>
								</div>
								
	
	
								</div>
							</div>
							
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Дата на смяна на филтри </h3>
									<input type="text" class="form-control" placeholder="">
								</div>
							</div>
								
								<span class="input-group-btn"><button type="button" name="btnSignup" class="btn btn-primary">Потвърди</button></span>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
</body>
</html>
	