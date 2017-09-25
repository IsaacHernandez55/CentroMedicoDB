<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form id="form1" name="form1" action="validarInsertarPaciente.php" method="post">
      <table width="42%" border="0" align="center">
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center">INSERTAR PACIENTE</td>
        </tr>
        <tr>
          <td width="28%" align="right" bgcolor="#fbec88">Identificacion</td>
          <td width="72%"><label for="identifiacion"></label>
          <input type="text" name="identificacion" id="identificacion" size="40" required></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Nombres</td>
          <td><input type="text" name="nombres" id="nombres" size="40" required></td>
        </tr>
        <tr>
          <td height="25"  align="right" bgcolor="#fbec88">Apellidos</td>
          <td><input type="text" name="apellidos" id="apellidos" size="40" required></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88">Fecha Nacimiento</td>
          <td><input type="date" name="fechaNacimiento" id="fechaNacimiento" style="width:270px" required></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#fbec88" >Sexo</td>
          <td><label for="sexo"></label>
            <select name="sexo" id="sexo" style="width:270px">
              <option value="No">Seleccione</option>
              <option value="Femenino">Femenino</option>
              <option value="Masculino">Masculino</option>
            </select>
          </td>
        </tr>
        <tr bgcolor="#cc0000" class="texto">
          <td colspan="2" align="center" bgcolor="#cc0000"><input type="submit" name="button" id="button" value="Enviar"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
