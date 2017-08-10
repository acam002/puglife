<?php
	$dbhost = 'localhost';
	$dbname = 'puglife';
	$dbuser = 'root';
	$dbpass = '';
	$appname = 'Retropugv3';
	
	$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	if ($connection->connect_error) die($connection->connect_error);
	
	# Added after manual type-in
	
	function createTable($name, $query) 
	{
		queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
		echo "Table '$name' created or already exists.<br>";
	}
	
	function alterTable($name, $query){
		queryMysql("ALTER TABLE $name $query");
		echo "Table '$name' has been altered.<br>";
	}
	
	function queryMysql($query)
	{
		global $connection;
		$result = $connection->query($query);
		if (!$result) die($connection->error);
		return $result;
	}
	
	function destroySession()
	{
		$_SESSION=array();
		
		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
			);
		}
		
		session_unset(); 
		session_destroy();
	}
	
	function sanitizeString($var)
	{
		global $connection;
		$var = strip_tags($var);
		$var = htmlentities($var);
		$var = stripslashes($var);
		return $connection->real_escape_string($var);
	}
	
?>		