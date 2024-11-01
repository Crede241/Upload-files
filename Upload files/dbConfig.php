<?php 
	// Configuration de la base de données
 	$dbHost = "localhost" ; 
	$dbUsername = "root" ; 
	$dbPassword = "" ; 
	$dbName = "blog_database" ; 
	 
	// Créer une connexion à la base de données
 	$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
	 
	// Vérifie la connexion 
	if ($con->connect_error) { 
	    die ( "Échec de la connexion : " . $con->connect_error); 
	} 
?>