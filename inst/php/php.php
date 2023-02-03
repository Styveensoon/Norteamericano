<?php
$servername = "localhost";
$database = "id20244942_norteamericano";
$username = "id20244942_root";
$password = "Kt@fk]-RP>Ge5Pzk";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);

$op = $_POST['op'];

 $sql = "INSERT INTO `alumnos`(`ID`, `voto`, `ip`) VALUES ('','$op','');";
 mysqli_query($conn, $sql);


?>