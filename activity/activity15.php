<?php
require_once '../app/Controller/AtivController.php';

$ativController = new Ativ1Controller();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formulario_enviado = $_POST["formulario_enviado"];

    if ($formulario_enviado == "exercicio15") {
        if (isset($_POST['caneta']) && isset($_POST['preco']) && isset($_POST['canetas'])) {
            $caneta = (int)$_POST['caneta'];
            $preco2 = (float)$_POST['preco'];
            $canetas = (int)$_POST['canetas'];
            list($precoinicial2, $precofinal2) = $ativController->criarAtiv15($caneta, $preco2, $canetas);
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
        <legend><h2>PROBLEMA DE PROPORÇÃO</h2></legend>
        <h3>Se 4 canetas custam R$ 12, quanto custarão 10 canetas?</h3>

        <form method="post">
        <input type="hidden" name="formulario_enviado" value="exercicio15">
        <input type="number" name="caneta" placeholder="Qntd de canetas inicial">
        <input type="number" name="preco" placeholder="Preço Inicial">
        <input type="number" name="canetas" placeholder="Qntd de canetas final">
        <input type="submit" value="Calcular"><br><br>
        </form>

        <?php
        if (isset($precoinicial2) && isset($precofinal2)) {
            echo "Uma caneta custa R$ $precoinicial2, então $canetas canetas custarão R$ $precofinal2.";
        }
        ?>
    </fieldset>
</body>
</html>