<?php
session_start();
extract($_REQUEST);
require "conexionBasesDatos.php";

$pass = md5($_REQUEST['usuPassword']);
$login = $_REQUEST['usuLogin'];

$objConexion= new MySQLI($host,$user,$password,$baseDatos);

$sql="select * from usuarios where usuLogin = '$login' and usuPassword = '$pass'";
$resultado = $objConexion->query($sql);
$existe = $resultado->num_rows;

if ($existe==1) {
  //$usuario=$resultado->fetch_object();
  $SESSION['usuLogin']=$_POST['usuLogin'];
  $SESSION['usuPassword']=$_POST['usuPassword'];
  header ("location:validarInsertarPaciente2.php?msg=Sesion Iniciada Correctamente");

}
else {
  header ("location:formularioInicio.php?pag=iniciarSesion&x=1");
}
 ?>
