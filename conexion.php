<?php
$servername = "localhost";
$database = "alta de stock";
$username = "root";
$password = "";
// Crea conexion

$conn =mysqli_connect($servername, $username, $password, $database);


// Controla conexión
if (!$conn){

die("Fallo la conexión :". mysqli_connect_error());

	
}
echo "Se conecto con éxito!!!Felicitaciones!!";
mysqli_close($conn);
?>