<?php
require_once '../app/Controller/AtivController.php';

$ativController = new Ativ1Controller();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formulario_enviado = $_POST["formulario_enviado"];

    if ($formulario_enviado == "exercicio8") {
        if (isset($_POST['valor']) && isset($_POST['juros']) && isset($_POST['anos'])) {
            $valor = (int)$_POST['valor'];
            $juros = (float)$_POST['juros'];
            $anos = (int)$_POST['anos'];
            $valor_futuro = $ativController->criarAtiv17($valor, $juros, $anos);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
<button><a href="../index.html">Página Inicial</a></button><br><br>
    <fieldset>
        <legend><h2>PROBLEMA DE JUROS</h2></legend>
        <h3>Se você investir R$ 5.000 a uma taxa de juros composta de 8% ao
        ano, quanto terá após 5 anos?</h3>

        <form method="post">
        <input type="hidden" name="formulario_enviado" value="exercicio8">
        <input type="number" name="valor" placeholder="Valor Inicial">
        <input type="number" name="juros" placeholder="Juros por percentual anual">
        <input type="number" name="anos" placeholder="Qntd de anos">
        <input type="submit" value="Calcular"><br><br>
    </form>

    <?php
    if (isset($valor_futuro)) {
        echo "Após 5 anos, o valor do investimento será de R$ $valor_futuro";
    }
    ?>
    </fieldset>
</body>
</html>