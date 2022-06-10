<?php
header("Content-type: text/html; charset=utf-8");

date_default_timezone_get('America/Sao_Paulo');

include_once "conexao.php";


echo "<br><br>";

$sqlSelect = "SELECT user_name, user_email, user_date, user_mensagem FROM users";
$rs = mysqli_query($conexao, $sqlSelect);

if (mysqli_num_rows($rs) > 0) {
    while($row = mysqli_fetch_assoc($rs)){
        echo "Nome: ". $row["user_name"].
        " - Email: ". $row["user_email"].
        " - Data: ". date("d/m/y", strtotime($row["user_date"])). 
        " - Mensagem: ". $row["user_mensagem"]."<br>";
    }
} else {
    echo "Não foram encontrados registros cadastrados";
}
mysqli_close($conexao);

?>