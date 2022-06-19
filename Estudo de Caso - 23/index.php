<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/748/748544.png" />
   <title>Cadastro de Colaborador</title>
</head>
<!-- 
-- NumControle
-- Nome
-- Profissão
-- Data de nascimento
-- Endereco
-- NomeEmpresa
-- NumContrato
-- Data vigencia
-- Data vencimento
-- Valor hora -->

<body>

   <form method="post" action="crud.php?acao=inserir" name="dados" onSubmit="return enviardados();">
      <table width="780" border="0" align="center">
         <<tr>
            <td width="118">
               <font size="3"  face="Verdana, Arial, Helvetica, sans-serif"><b>Cadastro de Colaborador 🚧✔️<b></font>
            </td width="460">
         </tr> <!-- ver se essa primeira tr que tá cagando com o formulário -->

         <tr>
            <td width="118">
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nº Colaborador: </font>
            </td>
            <td width="460">
               <input name="num_controle" type="text" class="formbutton" id="num_controle" size="52" maxlength="150">
            </td>
         </tr>

         <tr>
            <td width="118">
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome completo:</font>
            </td>
            <td width="460">
               <input name="nome" type="text" class="formbutton" id="nome" size="52" maxlength="150">
            </td>
         </tr>

         <tr>
            <td width="118">
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Ocupação:</font>
            </td>
            <td width="460">
               <input name="profissao" type="text" class="formbutton" id="profissao" size="52" maxlength="150">
            </td>
         </tr>

         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Data de nascimento:</font>
            </td>
            <td>
               <font size="2">
                  <input name="data" type="date" id="data" class="formbutton">
               </font>
            </td>
         </tr>

         <tr>
            <td width="118">
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Endereço:</font>
            </td>
            <td width="460">
               <input name="endereco" type="text" class="formbutton" id="endereco" size="52" maxlength="150">
            </td>
         </tr>

         <tr>
            <td width="118">
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome da empresa cliente:</font>
            </td>
            <td width="460">
               <input name="nome_empresa" type="text" class="formbutton" id="nome_empresa" size="52" maxlength="150">
            </td>
         </tr>

         <tr>
            <td width="118">
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nº do contrato:</font>
            </td>
            <td width="460">
               <input name="num_contrato" type="text" class="formbutton" id="num_contrato" size="52" maxlength="150">
            </td>
         </tr>
         
         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Data de vigência:</font>
            </td>
            <td>
               <font size="2">
                  <input name="data_vigen" type="date" id="data_vigen" class="formbutton">
               </font>
            </td>
         </tr>

         <tr>
            <td>
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Data de vencimento:</font>
            </td>
            <td>
               <font size="2">
                  <input name="data_venc" type="date" id="data_venc" class="formbutton">
               </font>
            </td>
         </tr>
         

         <tr>
            <td width="118">
               <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Valor por hora: R$</font>
            </td>
            <td width="460">
               <input name="valorHr" type="text" class="valorHr" id="name" size="52" maxlength="150">
            </td>
         </tr>

         <tr>
            <td height="22"></td>
            <td>
               <input class="btn btn-success" name="Submit" type="submit" class="formobjects" value="Registrar ✔️ ">
               <input class="btn btn-danger" name="Reset" type="reset" class="formobjects" value="Limpar campos ❌ ">
               
               <button class="btn btn-info" type="submit" name="action" formaction="crud.php?acao=selecionar">Consultar Contratos* 🔎 </button>               
            </td>
         </tr>
      </table>
   </form>
</body>

</html>