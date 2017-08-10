<?php

include("connect_database.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

//Execute the query
$result = mysqli_query($connect, "SELECT * FROM profile
		        WHERE username = '$username' and password = '$password'");
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$count = mysqli_num_rows($result);

if($count == 1) {
	$_SESSION['global_username'] = $username;
	
	echo '<script type="text/javascript">window.location = "http://retropugv3/#/index.php"</script>';
	
} else {
	
	echo '<script type="text/javascript">window.location = "http://retropugv3/#!/guest/login"</script>';
}

?>