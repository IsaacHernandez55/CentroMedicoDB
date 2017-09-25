<?php
  require "conexionBasesDatos.php";
  $objConexion = new mysqli($host, $user, $password, $baseDatos);
  if($objConexion->connect_errno){
    echo "Error de conexion a la Base de Datos ".$objConexion->connect_error;
    exit();
  }
  $sql="select * from pacientes";
  $resultado=$objConexion->query($sql);
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Lista de Pacientes</title>
   </head>
   <body>
     <h1 align="center">LISTADO DE PACIENTES</h1>
     <table width="70%" border="1" align="center">
       <tr align="center" bgcolor="#99FF66">
         <td>Numero Identificacion</td>
         <td>Nombres</td>
         <td>Apellidos</td>
         <td>Fecha Nacimiento</td>
         <td>Sexo</td>
       </tr>
       <?php
          while ($datos=$resultado->fetch_array()) {
        ?>
        <tr>
          <td><?php echo $datos['pacidentificacion']?></td>
          <td><?php echo $datos['pacNombres']?></td>
          <td><?php echo $datos['pacApellidos']?></td>
          <td><?php echo $datos['pacFechaNacimiento']?></td>
          <td><?php echo $datos['pacSexo']?></td>
        </tr>
        <?php
          }
         ?>
     </table>
   </body>
 </html>
