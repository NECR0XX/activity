<?php
require_once '../app/Controller/AtivController.php';

$ativController = new Ativ1Controller();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formulario_enviado = $_POST["formulario_enviado"];

    if ($formulario_enviado == "exercicio8") {
        if (isset($_POST['camiseta']) && isset($_POST['preco']) && isset($_POST['camisetas'])) {
            $camiseta = (int)$_POST['camiseta'];
            $preco = (float)$_POST['preco'];
            $camisetas = (int)$_POST['camisetas'];
            list($precoinicial, $precofinal) = $ativController->criarAtiv8($camiseta, $preco, $camisetas);
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
    <h3>Se 3 camiseta/s custam R$ 60, quanto custarão 5 camiseta/s?</h3>

    <form method="post">
        <input type="hidden" name="formulario_enviado" value="exercicio8">
        <input type="number" name="camiseta" placeholder="Qntd de camisetas inicial">
        <input type="number" name="preco" placeholder="Preço Inicial">
        <input type="number" name="camisetas" placeholder="Qntd de camisetas final">
        <input type="submit" value="Calcular"><br><br>
    </form>

    <?php
    if (isset($precoinicial) && isset($precofinal)) {
        echo "Uma camiseta custa R$ $precoinicial, então $camisetas camisetas custarão R$ $precofinal.";
    }
    ?>
</fieldset>

</body>
</html>