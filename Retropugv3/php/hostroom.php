<?php  include ("C:/wamp64/www/Retropugv3/php/connect_database.php"); ?>

<?php
	$host = "Armandin";
	$game = $_POST['game'];
	$numplayers = $_POST['numplayers'];
	
if ($_POST['submit'] == "Submit") {
	mysqli_query($connect, "INSERT INTO lobby (lobby_host, players_needed, game_title)
			VALUES ('$host', '$numplayers', '$game')");
			
			//Check for client success
			if(mysqli_affected_rows($connect) > 0){
				
				echo '<script type="text/javascript">window.location = "http://retropugv3/#!/registered/lobby"</script>';
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

