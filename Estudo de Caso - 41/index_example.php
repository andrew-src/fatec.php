<!DOCTYPE html>
<html lang="pt">
<html>

<head>
   <meta charset="UTF-8">
   <meta http_equiv="X-UA_Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>
      Get VOTO
   </title>
</head>

<body>
   <form method="get" name="dados" action="isset_get.php" onSubmit="return enviardados();">

      <table width="588" border="0" align="center">
         <tr>
            <td width="118">
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome completo:</font>
            </td>
            <td width="460">
               <input name="nome" type="text" class="formbutton" id="nome" size="52" maxlength="150">
            </td>
         </tr>

         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Endereço:</font>
            </td>
            <td>
               <font size="2">
                  <input name="endereco" type="text" id="endereco" size="52" maxlength="150" class="formbutton">
               </font>
            </td>
         </tr>
         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Data de Nascimento:</font>
            </td>
            <td>
               <font size="2">
                  <input name="data_nasc" type="date" id="data_nasc" class="formbutton">
               </font>
            </td>
         </tr>
         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Título de Eleitor:</font>
            </td>
            <td>
               <font size="2">
                  <input name="num_titulo" type="text" id="num_titulo" class="formbutton" pattern="\d{4}\.\d{4}\.\d{4}" \>
               </font>
            </td>
         </tr>
         <tr>
            <td width="118">
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Candidato:</font>
            </td>
            <td width="460">
               <input name="nome_candidato" type="text" class="formbutton" id="nome_candidato" size="52" maxlength="150">
            </td>
         </tr>
         <tr>
            <td width="130">
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Número do candidato:</font>
            </td>
            <td width="460">
               <input name="num_candidato" type="text" class="formbutton" id="num_candidato" size="1" maxlength="5">
            </td>
         </tr>

         <tr>
            <td width="118">
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Partido:</font>
            </td>
            <td width="460">
               <input name="partido_candidato" type="text" class="formbutton" id="partido_candidato" size="52" maxlength="150">
            </td>
         </tr>
         <tr>
            <td height="22"></td>
            <td>
               <input name="Submit" type="submit" class="formobjects" value="Cadastrar">
               <input name="Reset" type="reset" class="formobjects" value="Limpar campos">
               <button type='submit' formaction='pegar.php'>Consultar</button>
            </td>
         </tr>
      </table>
   </form>
</body>

</html>