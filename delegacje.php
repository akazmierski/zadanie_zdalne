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
		<a href="kontrolki.html"><button class="menu aktywny">Różne kontrolki HTML</button></a>
		<a href="pracownicy.html"><button class="menu">Tabela Pracowników</button></a>
		<a href="faktury.html"><button class="menu">Tabela Faktur VAT</button></a>
		<a href="delegacje.php"><button class="menu aktywny">Tabela Delegacji BD</button></a>
		<a href="kontrahenci.php"><button class="menu">Dane Kontrahentów</button></a>
	</div>

	<div id="prawy">
	
		 <table class='table table-hover'>
    <thead class='naglowek_tabeli'>
        <tr>
        <th scope='col'>Lp.</th>
        <th scope='col'>Imię i Nazwisko</th>
        <th scope='col'>Data od</th>
        <th scope='col'>Data do</th>
        <th scope='col'>Miejsce Wyjazdu</th>
        <th scope='col'>Miejsce Przyjazdu</th>
        </tr>
    </thead>
    <tbody>
	
		  <?php
		  
		$dbServerName = "localhost";
        $dbUsername = "aman22";
        $dbPassword = "Forest98@@";
        $dbName = "amadeusz_msi";
        $conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
			
		 if (!$conn) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
		}
		  
		 $result = mysqli_query($conn, "SELECT * FROM Delegacja;");

    while ($row = mysqli_fetch_assoc($result)){
        echo 
        "<tr>
        <th scope='row'>" . $row["lp"] . "</td>
        <td>" . $row["imie_i_nazwisko"] . "</td>
        <td>" . $row["data_od"] . "</td>
        <td>" . $row["data_do"] . "</td>
        <td>" . $row["miejsce_wyjazdu"] . "</td>
        <td>" . $row["miejsce_przyjazdu"] . "</td></tr>";
		} 
		  ?>
		 </tbody> </table>
	</div>
	<div id="bottom"></div>
</div>
</body>
</html>