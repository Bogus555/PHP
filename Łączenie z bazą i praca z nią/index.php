<DOCTYPE html>
<html>
<head>
	<title>Wprowadzanie danych do bazy</title>
	<meta charset="UTF-8">
</head>
<style>
	#main{
		text-align: center;
	}
	#button{
		margin: 15px;
	}
	h1{
		text-align: center;
	}
</style>
<body>
	<h1>Dodawanie rekordów do bazy</h1>
	
	<div id="main">
	<form action="connect.php" method="post">
		<p>Podaj imię:</p>
		<input type="text" name="a" />
		<p>Podaj nazwisko:</p>
		<input type="text" name="b" /><br>
		<input id="button" type="submit" value="Dodaj" />
	</form>
	</div>
	
	<h1>Wygląd 10 rekordów bazy</h1>
	
	<div id="main">
		<?php 
			//Dane logowania
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mydb";

		//Połączenie z serwerem
		$conn = new mysqli($servername, $username, $password, $dbname);
	
		$sql = "SELECT Id, Name, Surname FROM mydb";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["Name"]. " " . $row["Surname"]. "<br>";
		}
		} else {
		echo "0 results";
		}
		$conn->close();
		?>
	</div>
	
<body>
</html>