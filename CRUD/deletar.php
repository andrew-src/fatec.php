<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <form method="POST" name="dados" action="delete.php" onSubmit="senviardados();">
    <center><h1>Deletar dados</h1></center>
  <table width="588" border="0" align="center">

<tr>
  <td width="118">
    <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Campo (user_id):</font>
  </td>
  <td width="460">
  <input name="id" type="text" class="formbutton" id="id" size="52" maxlength="150">
  </td>
</tr>

  <td height="22"></td>
    <td>
    <input name="Submit" type="submit" name="action" class="formobjects" value="Deletar">
    <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
    <button type='submit' formaction='select.php'>select</button>
    <button type='submit' formaction='index.php'>index</button>
  </td>
</tr>
</table>
</form>
</body>
</html>
