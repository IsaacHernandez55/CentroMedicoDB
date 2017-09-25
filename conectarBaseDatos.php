<?php

  require "conexionBasesDatos.php";

  //creamos el objeto conexion utilizando mysqli
  $objConexion = new MySQLI($host,$user,$password,$baseDatos);

  //verificamos la conexion
  if($objConexion->connect_errno){
    echo "Error de conexion a la Base de Datos".$objConexion->connect_error;
    exit();
  }
  else {
    echo "Conectados al servidor y listos para utilizar la Base de Datos ".$baseDatos;
  }

 ?>
