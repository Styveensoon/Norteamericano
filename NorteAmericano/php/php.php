<?php
if (isset($_GET['prueba'])) {
    $hostname="localhost";
    $username="id20244942_root";
    $password="";
    $dbname="id20244942_norteamericano";
    $usertable="alumnos";
    $yourfield = "your_field";
    
    mysqli_connect($hostname,$username, $password) o morir ("html>script language='JavaScript'>alert('¡No es posible conectarse a la base de datos! Vuelve a intentarlo más tarde.'),history.go(-1)/script>/html>");
    mysqli_select_db($dbname);
}
?>