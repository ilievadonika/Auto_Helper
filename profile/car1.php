<!doctype html>
<html lang="en">

<?php
session_start();
include 'config.php';

if(isset($_SESSION['charecteristics'])){ 
header("Location: profile_dashboard\template\cars.php");
}


if(isset($_POST['btnSignup'])){
	
	$new_id=$_POST['id'];
	$new_categoriq = $_POST['categoriq'];
	$new_marka = $_POST['marka'];
	$new_dvigatel = $_POST['dvigatel'];
	$new_godina= $_POST['godina'];
	$new_cvqt= $_POST['cvqt'];
	
	//$check = mysqli_query($db, "SELECT * FROM `user_name` WHERE `user_name` = '$new_user'");


	
	$sql = "INSERT INTO chracteristics (id, categoriq, marka, dvigatel, godina, cvqt)
VALUES ('$id', '$categoriq','$marka', '$dvigatel', '$cvqt', '$cvqt')";

if (mysqli_query($db, $sql)) {
	
	echo '<script type="text/javascript">

          window.onload = function () { alert("Your registration is successful!\\n Please log in!"); }

</script>';
	
	/*header("Location: successful_login.php");*/
	
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
}

}
?>
</html>
  	

