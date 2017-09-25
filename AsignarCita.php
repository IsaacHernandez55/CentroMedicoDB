<?php
   error_reporting(0);
   require "conexionBasesDatos.php";
   $objConexion = new mysqli($host, $user, $password, $baseDatos);
   if($objConexion->connect_errno){
     echo "Error de conexion a la Base de Datos ".$objConexion->connect_error;
     exit();
   }

   //consulta datos medicos para poder mostrar medico en la lista
   $sql="SELECT idMedico,medIdentificacion,medNombres,medApellidos,medEspecialidad,medTelefono,medCorreo from medicos";
   $medicos=$objConexion->query($sql);
   //consulta los datos pacientes para poder mostrar pacientes en la lista
   $sql="SELECT idPaciente,pacidentificacion,pacNombres,pacApellidos,pacFechaNacimiento,pacSexo from pacientes";
   $pacientes=$objConexion->query($sql);
   //consulta datos consultorios para poder mostrar consultorios en la lista
   $sql="SELECT idConsultorio,conNombre from consultorios";
   $consultorios=$objConexion->query($sql);
  ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form id="fomr1" name="form1" action="validarAsignarCita.php" method="post">
       <table width="43%" border="0" align="center">
         <tr bgcolor="#cc0000" class="texto">
           <td colspan="2" align="center">ASIGNAR CITA</td>
         </tr>
         <tr>
           <td width="33%" align="right" bgcolor="#fbec88">Pacientes</td>
           <td width="67%">
             <select name="pacientes" id="pacientes" style="width:300px">
               <option value="0">Seleccione</option>
               <?php
                while ($paciente=$pacientes->fetch_object()){
                  ?>
                  <option value="<?php echo $paciente->idPaciente; ?>">
                    <?php echo $paciente->pacidentificacion. " - ".$paciente->pacNombres. " ".$pacApellidos; ?>
                  </option>
                <?php
                  }
                 ?>
             </select></td>
         </tr>
         <tr>
           <td align="right" bgcolor="#fbec88">Fecha:</td>
           <td><label for="fecha"></label>
             <input type="date" name="fecha" id="fecha"  required="required" style="width:290px">
           </td>
         </tr>
         <tr>
           <td align="right" bgcolor="#fbec88">Hora:</td>
           <td>
             <input type="time" name="hora" id="hora"  required="required" style="width:290px">
           </td>
         </tr>
         <tr>
           <td align="right" bgcolor="#fbec88">Medico:</td>
           <td><label for="medico"></label>
             <select class="" name="medico" id="medico" style="width:300px">
               <option value="0">Seleccione</option>
               <?php
                while ($medico=$medicos->fetch_object()) {
                ?>
                <option value="<?php echo $medico->idMedico; ?>">
                  <?php echo $medico->medNombres. " - ".$medico->medApellidos. " --> ".$medico->medEspecialidad; ?>
                </option>
                <?php
              }
                 ?>
             </select>
           </td>
         </tr>
         <tr>
           <td align="right" bgcolor="#fbec88">Consultorio</td>
           <td><select name="consultorio" id="consultorio" style="width:300px">
             <option value="0">Seleccione</option>
             <?php
              while ($consultorio=$consultorios->fetch_object()) {
              ?>
              <option value="<?php echo $consultorio->idConsultorio; ?>">
                <?php echo $consultorio->conNombre; ?>
              </option>
            <?php } ?>
           </select></td>
         </tr>
         <tr bgcolor="#cc0000" class="texto">
           <td colspan="2" align="center" bgcolor="#cc0000"><input type="submit" name="button" id="button" value="Enviar"></td>
         </tr>
       </table>
     </form>
   </body>
 </html>
