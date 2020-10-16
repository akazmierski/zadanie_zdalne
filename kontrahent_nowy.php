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

    if(isSet($_POST["kontrahentSave"])){
        $nip = $_POST['nip'];
        $regon = $_POST['regon'];
        $nazwa = $_POST['nazwa'];
        $platnik_vat = $_POST['platnikVat'];
        $ulica = $_POST['ulica'];
        $nr_domu = $_POST['nr_domu'];
        $nr_mieszkania = $_POST['nr_mieszkania']; 
        $sql = "INSERT INTO `kontrahent` VALUES 
                ('$nip', '$regon', '$nazwa', '$platnik_vat', '$ulica', '$nr_domu', '$nr_mieszkania');";
        mysqli_query($conn, $sql);
			function CloseCon($conn){
        $conn -> close();
    }
        header("Location: kontrahenci.php");
    }
	
?>