<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario Inicio al sistema</title>
  </head>
  <body>
    <form id="form1" name="form1" action="validarInicioSesion.php" method="post">
      <table width="31%" border="0" align="center">
        <tr bgcolor="$CCCC00">
          <td colspan="2" align="center" bgcolor="#cc0000" class="texto">Inicio Sesión</td>
        </tr>
        <tr>
          <td width="39%" align="right">Login</td>
          <td width="61%"><label for="login"></label>
            <input type="text" name="usuLogin" id="usuLogin" size="40" required>
          </td>
        </tr>
        <tr>
          <td align="right">Password</td>
          <td><label for="password"></label>
            <input type="password" name="usuPassword" id="usuPassword" size="40" required>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center" bgcolor="$cc0000">
            <input type="submit" name="button" id="button" value="Enviar">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
