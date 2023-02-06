<?php
  $servidor = "localhost";
  $usuario = "id20244942_root";
  $password = "Kt@fk]-RP>Ge5Pzk";
 
  try {
        $conexion = new PDO("mysql:host=$servidor;dbname=id20244942_norteamericano", $usuario, $password);      
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión realizada Satisfactoriamente";
      }
 
  catch(PDOException $e)
      {
      echo "La conexión ha fallado: " . $e->getMessage();
      }
 
      $voto = $_POST['op'];
      $sql = "INSERT INTO alumnos (voto) VALUES (?)";
      $stmt= $conexion->prepare($sql);
      $stmt->execute([$voto]);

  $conexion = null;

  ?>