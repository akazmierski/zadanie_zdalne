<!DOCTYPE html>
<html>
<head>

  <title>Zadanie zdalne e-MSI</title>
  <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href=  " https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div id="container">
	<div id="tytul">
		<h1> Zadanie zdalne e-MSI <h1/>
	</div>
	
	<div id="lewy">
		<a href="kontrolki.html"><button class="menu">Różne kontrolki HTML</button></a>
		<a href="pracownicy.html"><button class="menu">Tabela Pracowników</button></a>
		<a href="faktury.html"><button class="menu">Tabela Faktur VAT</button></a>
		<a href="delegacje.php"><button class="menu">Tabela Delegacji BD</button></a>
		<a href="kontrahenci.php"><button class="menu aktywny">Dane Kontrahentów</button></a>
	</div>

	<div id="prawy">
	      <table id='table_kontrahenci' class='table table-hover'>
			<thead class='naglowek_tabeli'>
				<tr>
				<th scope='col'>NIP</th>
				<th scope='col'>REGON</th>
				<th scope='col'>Nazwa</th>
				<th scope='col'>Czy płatnik VAT</th>
				<th scope='col'>Ulica</th>
				<th scope='col'>Numer domu</th>
				<th scope='col'>Numer mieszkania</th>
				<th scope='col'></th>
				<th scope='col'></th>
				</tr>
			</thead>
			<tbody>
			<?php
			require("kontrahent_dodaj.php");
			$dbServerName = "localhost";
			$dbUsername = "aman22";
			$dbPassword = "Forest98@@";
			$dbName = "amadeusz_msi";
			$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
				
			 if (!$conn) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
			}
			$result = mysqli_query($conn, "SELECT * FROM kontrahent ;");
			while ($row = mysqli_fetch_assoc($result)){
			echo 
			"<tr>
			<td>" . $row["nip"] . "</td>
			<td>" . $row["regon"] . "</td>
			<td>" . $row["nazwa"] . "</td>
			<td>" . $row["czy_platnik"] . "</td>
			<td>" . $row["ulica"] . "</td>
			<td>" . $row["numer_domu"] . "</td>
			<td>" . $row["numer_mieszkania"] . "</td>
			<td>
				<form method='post' action='kontrahent_edycja.php'>
					<button type= 'submit' class= 'btn btn-warning' name='kontrahentedycja' value=" . $row["nip"] . ">Edytuj</button>
				</form>
			</td>
			<td>
				<form method='post' action='kontrahent_usun.php' onsubmit=\"return confirm('Czy chcesz usunąć kontrahenta o numerze NIP=".$row["nip"] ." ?')\">
					<button type='submit' class='btn btn-danger' name='kontrahentusun' value=" . $row["nip"] . ">Usuń</button>
				</form>
			</td></tr>";
			}
			function CloseCon($conn){
        $conn -> close();
    }
			?>
			</tbody> </table>
			<br>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dodaj_kontrahenta">
			Dodaj</button>
		</div>
	<div id="bottom"></div>
</div>

</body>
</html>