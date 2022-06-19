<?php

include_once "conexao.php"; # Chamando o arquivo de conexão com o banco de dados

$acao = $_GET['acao']; # Pegando o valor da ação via URL

if (isset($_GET['id'])) { # Comparação do valor da URL com o tipo GET
    $id = $_GET['id']; # Variável pra armazenamento do valor obtido pelo GET
}

switch ($acao){
    case 'inserir':
        $num_controle = $_POST['num_controle'];
        $nome = $_POST['nome'];
        $profissao = $_POST['profissao'];
        $data = $_POST['data'];
        $endereco = $_POST['endereco'];
        $nome_empresa = $_POST['nome_empresa'];
        $num_contrato = $_POST['num_contrato'];
        $data_vigen = $_POST['data_vigen'];
        $data_venc = $_POST['data_venc'];
        $valorHr = $_POST['valorHr'];

        $sql = "INSERT INTO users (user_num, user_nome, user_profissao, user_date, user_endereco, user_nomeEmpresaCL, user_numContrato, user_dateVigen, user_dateVenc, user_valorHr) VALUES ('$num_controle', '$nome', '$profissao', '$data', '$endereco', '$nome_empresa', '$num_contrato', '$data_vigen', '$data_venc', '$valorHr')";

        if (!mysqli_query($conexao, $sql)) {
            die ("Erro ao inserir informações" . mysqli_error($conexao)); 
        }  else {
            echo "<script language='javascript' type='text/javascript'>
            alert('Dados cadastrados com sucesso!')
            window.location.href='crud.php?acao=selecionar'</script>";
        }
        break;

    case 'montar':
        $id = $_GET['id'];
        $sql = 'SELECT * FROM users WHERE user_id ='.$id;
        $resultado = mysqli_query($conexao, $sql) or die("Erro ao retornar dados");
        
        // montando formulário
        echo "<form method='post' name='dados' action='crud.php?acao=atualizar' onSubmit='return enviardados();'>";
        echo "<table width='588' border='0' align='center'>";

        while ($registro = mysqli_fetch_array($resultado)) {
            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Código</font></td>";
            echo "      <td width='460'>";
            echo "<input name='id' type='text' class='formbutton' id ='id' size='5' maxlenght='10' value=" . $id . " readonly> ";
            echo "      </td>";
            echo "      </tr>";
            

            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Nº Colaborador:</font></td>";
            echo "      <td width='460'>";
            echo "     <textarea name='user_num' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_num'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";


            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Nome:</font></td>";
            echo "      <td width='460'>";
            echo "     <textarea name='user_nome' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_nome'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";
            

            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Ocupação:</font></td>";
            echo "      <td width='460'>";
            echo "     <textarea name='user_profissao' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_profissao'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";
            
            
            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Data de Nascimento:</font></td>";
            echo "      <td width='460'>";
            echo "     <textarea name='user_date' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_date'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";
            
            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Endereço:</font></td>";
            echo "      <td width='460'>";
            echo "     <textarea name='user_endereco' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_endereco'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";
            
            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Razão Social Empresa Cliente</font></td>";
            echo "      <td width='460'>";
            echo "     <textarea name='user_nomeEmpresaCL' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_nomeEmpresaCL'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";

            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Nº do contrato:</font></td>";
            echo "      <td width='460'>";
            echo "     <textarea name='user_numContrato' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_numContrato'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";
            
            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Data de vigência:</font></td>";
            echo "      <td width='460'>";
             echo "     <textarea name='user_dateVigen' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_dateVigen'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";

            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Data de Vencimento:</font></td>";
            echo "      <td width='460'>";
             echo "     <textarea name='user_dateVenc' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_dateVenc'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";

            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Valor/Hora: R$</font></td>";
            echo "      <td width='460'>";
            echo "     <textarea name='user_valorHr' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_valorHr'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";
            
            echo "    <tr>";
            echo "    <td height='22'></td>";
            echo "      <td>";
            echo " <input name='Submit' type='submit' class='formobjects' value='Atualizar'>";
            echo " <button class='formobjects' type='submit' formaction='crud.php?acao=selecionar'>Selecionar</button>";
            echo " <input name='Reset' type='reset' class='formobjects' value='Limpar campos'>";
            echo "      </td>";
            echo "      </tr>";
            
            
            echo "</table>";
            echo "</form>";
         
        }
        mysqli_close($conexao);
        break;

    case 'atualizar':
        $codigo = $_POST['id'];
        $num_controle = $_POST['user_num'];
        $nome = $_POST['user_nome'];
        $profissao = $_POST['user_profissao'];
        $data = $_POST['user_date'];
        $endereco = $_POST['user_endereco'];
        $nome_empresa = $_POST['user_nomeEmpresaCL'];
        $num_contrato = $_POST['user_numContrato'];
        $data_vigen = $_POST['user_dateVigen'];
        $data_venc = $_POST['user_dateVenc'];
        $valorHr = $_POST['user_valorHr'];

        $sql = "UPDATE users SET 
        user_num = '" . $num_controle . "', user_nome = '" . $nome . "', user_profissao = '" .$profissao . "', user_date = '" . $data . "',user_endereco = '" . $endereco . "', user_nomeEmpresaCL = '" . $nome_empresa . "', user_numContrato = '" .$num_contrato . "', user_dateVigen = '" . $data_vigen . "',        user_dateVenc = '" . $data_venc . "',        user_valorHr = '" . $valorHr . "' WHERE user_id = '" . $codigo . "'";

        if (!mysqli_query($conexao, $sql)) {
            die('</br> Erro no comando SQL UPDATE: ' . mysqli_error($conexao));
        } else {
            echo "<script language='javascript' type='text/javascript'>
            alert('Dados atualizados com sucesso!')
            window.location.href='crud.php?acao=selecionar'</script>";
        }
        mysqli_close($conexao);

        break;

    case 'deletar':
        $sql = "DELETE FROM users WHERE user_id = '" . $id . "'";
        if (!mysqli_query($conexao, $sql)) {
            die('Error: ' . mysqli_error($conexao));
        } else {
            echo "<script language='javascript' type='text/javascript'>
            alert('Dados excluidos com sucesso!')
            window.location.href='crud.php?acao=selecionar'</script>";
        }
        mysqli_close($conexao);
        header("Location:crud.php?acao=selecionar");
        break;

    case 'selecionar':
        echo "<meta charset='utf-8'>";
        echo "<center><table border=1>";
        echo "<tr>";
        echo "<th>CÓDIGO</th>";
        echo "<th>Nº COLABORADOR</th>";
        echo "<th>NOME</th>";
        echo "<th>PROFISSÃO</th>";
        echo "<th>NASCIMENTO</th>";
        echo "<th>ENDEREÇO</th>";
        echo "<th>NOME EMPRESA</th>";
        echo "<th>Nº CONTRATO</th>";
        echo "<th>VIGÊNCIA</th>";
        echo "<th>VENCIMENTO</th>";
        echo "<th>VALOR/HORA</th>";

        echo "<th>AÇÃO</th>";
        echo "</tr>";

        $sql = "SELECT * FROM users";
        $resultado = mysqli_query($conexao, $sql) or die("Erro ao retornar dados");

        echo "<CENTER>Registro cadastrados na base de dados.<br/><CENTER>";
        echo "<br/>";

        while ($registro = mysqli_fetch_array($resultado)) {
            $id = $registro['user_id'];
            $num_controle = $registro['user_num'];
            $nome = $registro['user_nome'];
            $profissao = $registro['user_profissao'];
            $data = $registro['user_date'];
            $endereco = $registro['user_endereco'];
            $nome_empresa = $registro['user_nomeEmpresaCL'];
            $num_contrato = $registro['user_numContrato'];
            $data_vigen = $registro['user_dateVigen'];
            $data_venc = $registro['user_dateVenc'];
            $valorHr = $registro['user_valorHr'];

            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $num_controle . "</td>";            
            echo "<td>" . $nome . "</td>";
            echo "<td>" . $profissao . "</td>";
            echo "<td>" . date("d/m/Y", strtotime($data)) . "</td>";
            echo "<td>" . $endereco . "</td>";
            echo "<td>" . $nome_empresa . "</td>";
            echo "<td>" . $num_contrato . "</td>";
            echo "<td>" . date("d/m/Y", strtotime($data_vigen)) . "</td>";
            echo "<td>" . date("d/m/Y", strtotime($data_venc)) . "</td>";
            echo "<td>" . $valorHr . "</td>";

            echo "<td><a href='crud.php?acao=deletar&id=$id'><img src='imgs/delete.png' alt='Deletar' title='Deletar usuário'></a><a href='crud.php?acao=montar&id=$id'><img src='imgs/update.png' alt='Atualizar' title='Atualizar registro'></a><a href='index.php'><img src='imgs/insert.png' alt='Inserir' title='Inserir registro'></a>";
            echo "</tr>";
        }
        mysqli_close($conexao);

        break;

    default:
        header("location:crud.php?acao=selecionar");
        break;
}
?>