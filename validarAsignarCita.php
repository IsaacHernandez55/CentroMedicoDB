<?php
  session_start();
  extract ($_REQUEST);
  require "conexionBasesDatos.php";
  $objConexion = new mysqli($host, $user, $password, $baseDatos);
  if($objConexion->connect_errno){
    echo "Error de conexion a la Base de Datos ".$objConexion->connect_error;
    exit();
  }

  $sql ="insert into citas(citFecha,citHora,citPaciente,citMedico,citConsultorio)
  values ('$_REQUEST[fecha]','$_REQUEST[hora]','$_REQUEST[pacientes]','$_REQUEST[medico]',
  '$_REQUEST[consultorio]')";

  $resultado=$objConexion->query($sql);

  if ($resultado) {
    header("location:listaCita.php?&msj=1");
  }
  else {
    header("location:AsignarCita.php?&msj=2");
  }

 ?>
