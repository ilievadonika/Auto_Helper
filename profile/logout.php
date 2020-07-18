<?php
session_start();

include_once 'config.php';

	$userid =  $_SESSION['logged_user_id'];
	$sql = "SELECT * FROM users WHERE userId = '$userid'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	
	session_destroy();
header("Location: /auto-helper/reg/index.php");
	



?>
