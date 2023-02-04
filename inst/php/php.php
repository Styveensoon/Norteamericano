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

$op = $_POST['op'];

 $sql = "INSERT INTO alumnos ( voto  ) VALUES ('$op')";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>