<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form id="form1" name="form1" action="actualizar.php" method="post">
      <table width="42%" border="0" align="center">
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center">ACTUALIZAR PACIENTE</td>
        </tr>
        <tr>
          <tr>
            <td width="28%" align="right" bgcolor="#fbec88">Identificacion</td>
            <td width="72%"><label for="identifiacion"></label>
              <input type="text" name="identificacion" id="identificacion" size="40" required></td>
            </tr>
          <td width="28%" align="right" bgcolor="#fbec88">Fecha de Nacimiento</td>
          <td width="72%"><label for="identifiacion"></label>
          <input type="date" name="fecha" id="fecha" size="40" required></td>
        </tr>
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

  $sql="update pacientes set pacFechaNacimiento='$_REQUEST[fecha]' where pacidentificacion='$_REQUEST[identificacion]'";
  $resultado=$objConexion->query($sql);

  if ($resultado)
    echo "Se actualizo la Fecha de Nacimiento de Forma Correcta";

  else
    echo "Problemas al Actualizar";
    $objConexion->close();

 ?>
