<!-- A função require_once() é usada para integrar um arquivo PHP em outro -->
<?php require_once("../Model/banco.php"); ?>
<?php require_once("../Controller/ControllerListar.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php"); ?>

<body>
    <?php new banco(); ?>
    <?php include("menu.php"); ?>
    <table class="table">

        <thead>
            <tr>
                <th>Nome</th>
                <th>Autor</th>
                <th>Quantidade de Páginas</th>
                <th>Preço</th>
                <th>Data</th>
                <th>Flag</th>
                <th>Opções</th>
            </tr>
        </thead>
        <!--passo 3 chamar o método listar registros cadastrados no banco-->
        <tbody>
            <?php new listarController(); ?>
        </tbody>
    </table>
</body>

</html>