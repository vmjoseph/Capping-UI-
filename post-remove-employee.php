<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 

	<!--- this is for bootstrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel='stylesheet' media='screen and (min-width: 701px) and (max-width: 900px)' href='css/mobile.css' />
	<link rel="stylesheet" href="CSS/style.css">

	<title> CPCA Admin Tools </title>
</head>


<body>


<?php
	
session_start();
	
	if (!isset($_SESSION["username"]) ){
		header('Location: index.php');
		echo "hello";
	}
  
  
   # Connect to Postgres server and the database
    require( 'includes/connect.php' ) ;
	
	
	
	$eid = $_POST['eidSelect'];
	
	
	
	
	$deleteemp = "DELETE FROM employees where eid = '$eid'";
		
	$result = pg_query($deleteemp );
	echo 'employee deleted';
			
	echo "<a href='homepage.php'> Go Back To The Homepage </a>";
	
	
	
	


	
	
	?>




</body>


</html>