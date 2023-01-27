<?php
/* Database connection settings */
	$servername = "localhost";
    $username = "root";		//put your phpmyadmin username.(default is "root")
    $password = "Personal11#24";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "maindatabase";
    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>