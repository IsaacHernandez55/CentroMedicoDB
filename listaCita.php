<?php
require "conexionBasesDatos.php";
$objConexion = new mysqli($host, $user, $password, $baseDatos);
if($objConexion->connect_errno){
  echo "Error de conexion a la Base de Datos ".$objConexion->connect_error;
  exit();
}

$sql="select * from pacientes, medicos, consultorios,citas";
$citas=$objConexion->query($sql);

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1 align="center">LISTADO DE CITAS</h1>
     <table width="90%" border="1" align="center">
       <tr align="center" bgcolor="#cc0000" class="texto">
         <td>Fecha</td>
         <td>Hora</td>
         <td>Paciente</td>
         <td>Medico</td>
         <td>Consultorio</td>
       </tr>
       <?php
         while($cita=$citas->fetch_object()) {
        ?>
        <tr>
          <td><?php echo $cita->citFecha; ?></td>
          <td><?php echo $cita->citHora; ?></td>
          <td><?php echo $cita->pacNombres. " ".$cita->pacApellidos; ?></td>
          <td><?php echo $cita->medNombres. " ".$cita->medApellidos;; ?></td>
          <td><?php echo $cita->conNombre; ?></td>
        </tr>
        <?php
         }
         ?>
     </table>
   </body>
 </html>
