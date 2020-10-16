
    <link rel="stylesheet" href=  " https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
   <div id="container">
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
    if(isSet($_POST["kontrahentedycja"])){
        $nip = $_POST["kontrahentedycja"];

        $_SESSION['nip'] = $nip;

        $result = mysqli_query($conn, "SELECT * FROM kontrahent WHERE nip = '" . $nip . "'");

        while ($row = mysqli_fetch_assoc($result)){
            $_SESSION['regon'] = $row['regon'];
            $_SESSION['nazwa'] = $row['nazwa'];
            $_SESSION['ulica'] = $row['ulica'];
            $_SESSION['numer domu'] = $row['numer_domu'];
            $_SESSION['numer mieszkania'] = $row['numer_mieszkania'];
        }

        //header("Location: kontrahentEditForm.php");
    }







?>

	
<div id="edycja_danych">
	<h4>Edycja danych kontrahenta</h4>
    <br>

    <form id="edit-form" method="post" action="kontrahent_zapisz_zmiany.php" onsubmit="return confirm('Czy na pewno chcesz zmodyfikować dane kontrahenta o numerze NIP=".$SESSION["nip"] ."?')">
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" readonly value=<?php echo $_SESSION["nip"] ?>>
            </div>
            <div class="form-group">
                <label for="regon">REGON</label>
                <input type="number" class="form-control" id="regon" name="regon"  value=<?php echo $_SESSION["regon"] ?> >
            </div>
            <div class="form-group">
                <label for="nazwa">Nazwa</label>
                <input type="text" class="form-control" id="nazwa" name="nazwa" value=<?php echo $_SESSION["nazwa"] ?>>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Czy podatnik VAT</label>
                <select class="form-control" id="platnikVat" name="platnikVat">
                <option value="Tak">Tak</option>
                <option value="Nie">Nie</option>
                </select>
             </div>
            <div class="form-group">
                <label for="ulica">Ulica</label>
                <input type="text" class="form-control" id="ulica" name="ulica" value=<?php echo $_SESSION["ulica"] ?>>
            </div>
            <div class="form-group">
                <label for="nrdomu">Numer domu</label>
                <input type="text" class="form-control" id="nr_domu" name="nr_domu" value=<?php echo $_SESSION["numer domu"] ?>>
            </div>
            <div class="form-group">
                <label for="nrmieszkania">Numer mieszkania</label>
                <input type="text" class="form-control" id="nr_mieszkania" name="nr_mieszkania" value=<?php echo $_SESSION["numer mieszkania"] ?>>
            </div>

            <button type="submit" class="btn btn-primary" name="zapiszzmiany">Dokonaj zmiany</button>
            <a href="kontrahenci.php"> <button type="button" class="btn btn-danger">Powrót</button> </a>

        </form>
	</div>
</div>