<?php
        // Development config
	$servername = "localhost";
        $username = "root";
        $password = "";
        $database = "spark_bank_db";

        // Remote hosting config
//         $servername = "remotemysql.com";
//         $username = "mzQbGODaKU";
//         $password = "BDnxNO57Jg";
//         $database = "mzQbGODaKU";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}


?>
