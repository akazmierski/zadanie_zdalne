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

    if(isSet($_POST["zapiszzmiany"])){
        $nip = $_POST['nip'];
        $regon = $_POST['regon'];
        $nazwa = $_POST['nazwa'];
        $platnik_vat = $_POST['platnikVat'];
        $ulica = $_POST['ulica'];
        $nr_domu = $_POST['nr_domu'];
        $nr_mieszkania = $_POST['nr_mieszkania']; 

        $sql = "UPDATE kontrahent SET
                regon = '$regon', 
                nazwa = '$nazwa', 
                ulica = '$ulica',
                czy_platnik = '$platnik_vat', 
                numer_domu = '$nr_domu', 
                numer_mieszkania = '$nr_mieszkania' 
                WHERE nip = '$nip';";

        echo $sql;
        mysqli_query($conn, $sql);

        header("Location: kontrahenci.php");
    }
?>