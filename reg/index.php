<?php
session_start();
include 'config.php';

if(isset($_SESSION['logged_user'])){ 
header("Location: /auto-helper/profile/index.php");
}



if(isset($_POST['btnLogin'])){
	
    $acc = trim(addslashes($_POST['acc']));
    $pass = md5($_POST['pass']);
 
    $sql = "SELECT * FROM users WHERE email='$acc' AND password='$pass'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	$count = mysqli_num_rows($result);
	
	if($acc == $row['email'] && $pass == $row['password'])
     { 
         $_SESSION['logged_user']=$row['email'];
		 $_SESSION['logged_user_id']=$row['userId'];
		
		 
		 header("Location: /auto-helper/profile/index.php");
            
     
    }else {
		
	echo "<script type='text/javascript'>alert('You have no registration!')</script>";}
    {
		$notice = '1';
    }	

}

if(isset($_POST['btnSignup'])){
	
	$new_user = $_POST['user_name1'];
	$new_pass =md5( $_POST['password1']);
	$new_email= $_POST['email1'];
	
	$check = mysqli_query($db, "SELECT * FROM `users` WHERE `user_name` = '$new_user'");

if(mysqli_num_rows($check) > 0){

//there is a user already registered

/*redirect_to("index.php");*/

echo "<script type='text/javascript'>alert('That username is already taken!')</script>";

/*echo("That username is already taken!");*/

} else {
	
	$sql = "INSERT INTO users (user_name, password, email)
VALUES ('$new_user', '$new_pass', '$new_email')";

if (mysqli_query($db, $sql)) {
	
	echo '<script type="text/javascript">

          window.onload = function () { alert("Your registration is successful!\\n Please log in!"); }

</script>';
	
	header("Location: /auto-helper/profile/index.php");
	
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

}
	
	
	
	
}


?>


<!DOCTYPE html>
<html>
<head>
<title>Регистрация</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Splendid Bifold Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<!-- //web font -->
</head>
<body>
<h1>Регистрирай се сега!</h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="left-form-w3-agile">
			<h2>Вход</h2>
								<form action="" method="post">
								<div class="inputs-w3ls-left">
									<a class="fa fa-envelope-o" aria-hidden="true"></a>
									<input type="email" class="email" name="acc" id="email" placeholder="Email" required=""/>
								</div>
								<div class="inputs-w3ls-left">
									<a class="fa fa-key" aria-hidden="true"></a>
									<input type="password" class="password" name="pass" id = "password" placeholder="Парола" required=""/>
								</div>
									<!--<div class="wthree-text"> 
										<ul> 
											<li>
												<!--<label class="anim">
													<input type="checkbox" class="checkbox">
													<span> Remember me ?</span> 
												</label> -->
											<!--</li>
											<!--<li> <a href="#">Forgot password?</a> </li>-->
										<!--</ul>
										<div class="clear"> </div>
									</div>  -->
											<input type="submit" name="btnLogin" value="Вход"> 
								</form>
		</div>
<!--//form-ends-here-->
		<div class="right-map-w3-agile">
		<h3>Регистрация</h3>
			  <form action="" method="post">
			<div class="inputs-w3ls">
				<a class="fa fa-user" aria-hidden="true"></a>
				<input type="text" name="user_name1" placeholder="Име" required="" />
			</div>
			<div class="inputs-w3ls">
				<a class="fa fa-envelope-o" aria-hidden="true"></a>
				<input type="email" class="Email" name="email1"  placeholder="Email" required=""/>
			</div>
			<div class="inputs-w3ls">
				<a class="fa fa-key" aria-hidden="true"></a>
				<input type="password" class="Password" name="password1" id="password1" placeholder="Парола" required=""/>
			</div>
			<div class="inputs-w3ls">
				<a class="fa fa-key" aria-hidden="true"></a>
				<input type="password" class="Password" name="password1" id="password2" placeholder="Потвърди парола" required=""/>
			</div>		
					<!--<label class="anim">
					<input type="checkbox" class="checkbox">
						<span> I accept the terms of use</span> 
					</label>--> 
					
					<input class="register" type="submit" name="btnSignup" value="Регистрация">  
			</form> 
		</div>
<div class="clear"></div>
</div>

<!-- password-script -->  
<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
		function validatePassword(){
			var pass2=document.getElementById("password2").value;
			var pass1=document.getElementById("password1").value;
			if(pass1!=pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');	 
				//empty string means no validation error
		}

</script>
<!-- //password-script --> 
</body>
</html>