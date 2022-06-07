<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=0.90">
   <link rel="icon" href="https://www.iconpacks.net/icons/2/free-opened-book-icon-3169-thumb.png" />
   <title>Diário de Classe</title>

</head>

<body>
   <form method="post" action="crud.php?acao=inserir" name="dados" onSubmit="return enviardados();">

      <table width="588" border="0" align="center">
        <tr>
            <td width="118">
               <font size="3"  face="Verdana, Arial, Helvetica, sans-serif"><b>Registro de Frequência ✔️📚<b></font>
            </td width="460">
         </tr>
         
         <tr>
            <td width="118">
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome docente:</font>
            </td>
            <td width="460">
               <input name="name" type="text" class="formbutton" id="name" size="61" maxlength="150">
            </td>
         </tr>
         
         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Turma:</font>
            </td>
            <td width="460">
               <input name="turma" type="text" class="formbutton" id="turma" size="61" maxlength="150">
            </td>
         </tr>


         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Código da turma:</font>
            </td>
            <td>
               <font size="2">
                  <input name="codigo_turma" type="text" id="codigo_turma" size="62" maxlength="150" class="formbutton">
               </font>
            </td>
         </tr>
         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Disciplina:</font>
            </td>
            <td>
               <font size="2">
                  <input name="disciplina" type="text" id="disciplina" size="62" maxlength="15" class="formbutton">
               </font>
            </td>
         </tr>

         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome do Aluno:</font>
            </td>
            <td>
               <font size="2">
                  <input name="nome_aluno" type="text" id="nome_aluno" size="62" maxlength="150" class="formbutton">
               </font>
            </td>
         </tr>
         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Matrícula do Aluno:</font>
            </td>
            <td>
               <font size="2">
                  <input name="user_matricula_aluno " type="text" id="user_matricula_aluno " size="52" maxlength="15" class="formbutton">
               </font>
            </td>
         </tr>
         
         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Data:</font>
            </td>
            <td>
               <font size="2">
                  <input name="data" type="date" id="data" class="formbutton">
               </font>
            </td>
         </tr>
         <tr>
            <td height="2"></td>
            <td>
               <input class="btn btn-success" name="Submit" type="submit" class="formobjects" value="Adicionar ✔️">
               <input class="btn btn-danger" name="Reset" type="reset" class="formobjects" value="Limpar campos ❌">
               
               <button class="btn btn-info" type="submit" name="action" formaction="crud.php?acao=selecionar">Consultar Diário 🔎</button>               
            </td>
         </tr>
      </table>
   </form>
</body>

</html>