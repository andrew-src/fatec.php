<?php

include_once "conexao.php"; # Chamando o arquivo de conexão com o banco de dados

$acao = $_GET['acao']; # Pegando o valor da ação via URL

if (isset($_GET['id'])) { # Comparação do valor da URL com o tipo GET
    $id = $_GET['id']; # Variável pra armazenamento do valor obtido pelo GET
}

switch ($acao){
    case 'inserir':
        $nome = $_POST['name'];
        $turma = $_POST['turma'];
        $codigo_turma  = $_POST['codigo_turma'];
        $disciplina = $_POST['disciplina'];
        $nome_aluno = $_POST['nome_aluno'];
        $matricula_aluno = $_POST['user_matricula_aluno'];
        $date = $_POST['data'];

        $sql = "INSERT INTO users (user_nome, user_turma, user_codigo_turma, user_disciplina, user_nome_aluno, user_matricula_aluno, user_date) VALUES ('$nome', '$turma', '$codigo_turma', '$disciplina', '$nome_aluno', '$matricula_aluno', '$date')";

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
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Nome</font></td>";
            echo "      <td width='460'>";
            echo "     <textarea name='user_nome' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_nome'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";
            
            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Turma</font></td>";
            echo "      <td width='460'>";
            echo "     <textarea name='user_turma' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_turma'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";

            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>CodigoTurma</font></td>";
            echo "      <td width='460'>";
            echo "     <textarea name='user_codigo_turma' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_codigo_turma'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";

            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Disciplina</font></td>";
            echo "      <td width='460'>";
             echo "     <textarea name='user_disciplina' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_disciplina'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";
            
            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Nome do Aluno</font></td>";
            echo "      <td width='460'>";
             echo "     <textarea name='user_nome_aluno' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_nome_aluno'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";
            
            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Matricula do Aluno</font></td>";
            echo "      <td width='460'>";
             echo "     <textarea name='user_matricula_aluno' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_matricula_aluno'])."</textarea>" ;
            echo "      </td>";
            echo "      </tr>";

            echo "    <tr>";
            echo "    <td width='118'><font size='1' face='Verdana, Arial, Helvetica,sans-serif'>Data</font></td>";
            echo "      <td width='460'>";
             echo "     <textarea name='user_date' cols='50' rows='3' class='formbutton'>" . htmlspecialchars($registro['user_date'])."</textarea>" ;
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
        $nome = $_POST['user_nome'];
        $turma = $_POST['user_turma'];
        $codigo_turma  = $_POST['user_codigo_turma'];
        $disciplina  = $_POST['user_disciplina'];
        $nome_aluno = $_POST['user_nome_aluno'];
        $matricula_aluno = $_POST['user_matricula_aluno'];
        $date = $_POST['user_date'];
        
        $sql = "UPDATE users SET user_nome = '" . $nome . "', user_turma = '" . $turma . "', user_codigo_turma = '" .$codigo_turma . "', user_disciplina = '" . $disciplina . "', user_nome_aluno = '" . $nome_aluno . "', user_matricula_aluno = '" . $matricula_aluno . "', user_date = '" . $date . "' WHERE user_id = '" . $codigo . "'";
        
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
        echo "<th>DOCENTE</th>";
        echo "<th>TURMA</th>";
        echo "<th>CÓDIGO DA TURMA</th>";
        echo "<th>DISCIPLINA</th>";
        echo "<th>NOME DO ALUNO</th>";
        echo "<th>MATRÍCULA DO ALUNO</th>";
        echo "<th>DATA</th>";
        echo "</tr>";

        $sql = "SELECT * FROM users";
        $resultado = mysqli_query($conexao, $sql) or die("Erro ao retornar dados");

        echo "<CENTER>Registro cadastrados na base de dados.<br/><CENTER>";
        echo "<br/>";

        while ($registro = mysqli_fetch_array($resultado)) {
            $id = $registro['user_id'];
            $nome = $registro['user_nome'];
            $turma = $registro['user_turma'];
            $codigo_turma  = $registro['user_codigo_turma'];
            $disciplina  = $registro['user_disciplina'];
            $nome_aluno = $registro['user_nome_aluno'];
            $matricula_aluno  = $registro['user_matricula_aluno'];
            $date = $registro['user_date'];

            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $nome . "</td>";
            echo "<td>" . $turma . "</td>";
            echo "<td>" . $codigo_turma . "</td>";
            echo "<td>" . $disciplina . "</td>";
            echo "<td>" . $nome_aluno . "</td>";
            echo "<td>" . $matricula_aluno . "</td>";
            echo "<td>" . date("d/m/Y", strtotime($date)) . "</td>";
            echo "<td><a href='crud.php?acao=deletar&id=$id'><img src='delete.png' alt='Deletar' title='Deletar usuário'></a><a href='crud.php?acao=montar&id=$id'><img src='update.png' alt='Atualizar' title='Atualizar registro'></a><a href='index.php'><img src='insert.png' alt='Inserir' title='Inserir registro'></a>";
            echo "</tr>";
        }
        mysqli_close($conexao);

        break;

    default:
        header("location:crud.php?acao=selecionar");
        break;
}
?>