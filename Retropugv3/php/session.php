<?php

   //Grab client information from the database
   include('connect_database.php');
   session_start();
   
   $user_check = $_SESSION['global_username'];
   
   $ses_sql = mysqli_query($connect, "SELECT * FROM profile
		        WHERE username = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
   
   $login_session = $row['username']; 
   //$admin = $row['admin'];
   
   //Grab all pet information from the database
   //$pet_sql = mysqli_query($connect, "SELECT * FROM pets");  
   
?>