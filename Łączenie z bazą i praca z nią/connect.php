<?php

//Dane logowania
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

//Połączenie z serwerem
$conn = new mysqli($servername, $username, $password, $dbname);

//Sprawdzanie połączenia
if ($conn->connect_error){
	die("Nie udało się połączyć z bazą: " . $conn->connect_error);
}
echo "Połączono z bazą";

 ?>
 
<?php

//Dodawanie danych do tabeli SLQ
$name = $_POST['a'];
$surname = $_POST['b'];

$sql = "INSERT INTO users (Name, Surname) VALUES ('$name', '$surname')";

if($conn->query($sql) === TRUE) {
	echo "Nowy rekord został utworzony";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
	
