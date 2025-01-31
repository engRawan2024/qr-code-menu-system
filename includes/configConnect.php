		
	<?php   
    session_start();
    $server="localhost";
	$username="root";
	$password="";
	$db="foodmenudb";
	
	try{
	$pdo=new PDO("mysql:host=$server;dbname=$db","$username","$password");
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	$success1= "connect to mysql database by PDO SuccessFully"; 
	}
	catch(PDOExeption $e) {
	die("Oops. Something went Wrong in the database. ");
	$success1="Oops. Something went Wrong in the database. ";
	} 
	?>