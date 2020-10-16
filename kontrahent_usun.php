<?php
    session_start();
	$dbServerName = "localhost";
	$dbUsername = "aman22";
	$dbPassword = "Forest98@@";
	$dbName = "amadeusz_msi";
	$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
	 if (!$conn) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
    if(isSet($_POST["kontrahentusun"])){
        $nip = $_POST['kontrahentusun'];
        $sql = "DELETE from `kontrahent` WHERE nip = '" . $nip . "'";

        mysqli_query($conn, $sql);

        header("Location: kontrahenci.php");
    }







?>