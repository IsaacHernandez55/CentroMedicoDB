<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form id="form1" name="form1" action="borrar.php" method="post">
      <table width="42%" border="0" align="center">
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center">BORRAR  PACIENTE</td>
        </tr>
        <tr>
          <tr>
            <td width="28%" align="right" bgcolor="#fbec88">Identificacion</td>
            <td width="72%"><label for="identifiacion"></label>
              <input type="text" name="identificacion" id="identificacion" size="40" required></td>
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center" bgcolor="#cc0000"><input type="submit" name="button" id="button" value="Enviar"></td>
        </tr>
      </table>
    </form>
  </body>
</html>


<?php

extract($_REQUEST);
require "conexionBasesDatos.php";
$objConexion = new MySQLI($host,$user,$password,$baseDatos);

if($objConexion->connect_errno){
  echo "Error de conexion a la Base de Datos ".$objConexion->connect_error;
  exit();
}

$sql="delete from pacientes where pacidentificacion = ?";
$resultado=$objConexion->prepare($sql);
$cedula=$_REQUEST['identificacion'];
$resultado->bind_param('s',$cedula);
$result=$resultado->execute();
if ($result)
  echo "Se elimino Paciente de Forma Correcta";
else
  echo "Problemas al eliminar Paciente";

 ?>
