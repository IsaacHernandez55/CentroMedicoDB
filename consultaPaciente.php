<?php

  require "conexionBasesDatos.php";
  $objConexion = new mysqli($host, $user, $password, $baseDatos);
  if($objConexion->connect_errno){
    echo "Error de conexion a la Base de Datos ".$objConexion->connect_error;
    exit();
  }

  $sql = "select * from pacientes";
  $resultado=$objConexion->query($sql);
  $i=1;

  while ($datos=mysqli_fetch_array($resultado)) {
    echo "<br> Paciente ". $i;
    echo "<br>";
    echo $datos['pacidentificacion']."<br>";
    echo $datos['pacNombres']."<br>";
    echo $datos['pacApellidos']."<br>";
    echo $datos['pacFechaNacimiento']."<br>";
    echo $datos['pacSexo']."<br>";
    $i++;
  }

 ?>
