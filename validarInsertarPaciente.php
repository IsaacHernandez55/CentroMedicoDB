<?php
  extract($_REQUEST);

  require "conexionBasesDatos.php";


  $objConexion = new MySQLI($host,$user,$password,$baseDatos);


  if($objConexion->connect_errno){
    echo "Error de conexion a la Base de Datos ".$objConexion->connect_error;
    exit();
  }

  $sql= "insert into pacientes(pacidentificacion, pacNombres, pacApellidos, pacFechaNacimiento, pacSexo)
        value ('$_REQUEST[identificacion]','$_REQUEST[nombres]','$_REQUEST[apellidos]',
        '$_REQUEST[fechaNacimiento]','$_REQUEST[sexo]')";

    if ($objConexion->query($sql))
    header ("location:validarInsertarPaciente2.php?pag=insertarPaciente&msj=1");
  else
    header ("location:validarInsertarPaciente2.php?pag=insertarPaciente&msj=2");

 ?>
