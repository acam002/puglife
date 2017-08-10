<?php include("C:/wamp64/www/Retropugv3/php/connect_database.php"); ?>
<?php
	// Turn off all error reporting
	error_reporting(0);
?>
<?php
	// Create all variables
	$username = $_POST['username'];
	$discord_name = $_POST['discord_name'];
	$password = $_POST['password'];
	
	if ($_POST['submits'] == "Register") {
		
		
		
		//Execute the query
		mysqli_query($connect,"INSERT INTO profile (username, password, discord_name)
		VALUES ('$username', '$password', '$discord_name')");
		
		//Check for client success
		if(mysqli_affected_rows($connect) > 0){
			
			echo '<script type="text/javascript">window.location = "http://retropugv3/#!/guest/login"</script>';
			//echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular.js"></script>';
			//echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular-route.js"></script>';
			//echo '<script>$window.location = "http://retropugv3/#!/guest/login";</script>';
		} 
		else 
		{
			echo "Client NOT Added<br />";
			echo mysqli_error ($connect);
		}
	}
	//Close database connection
	$connect->close();
?>