<?php
require_once '../app/Controller/AtivController.php';

    $ativController = new Ativ1Controller();
    $sequencia2 = [1, 4, 9, 16, 25];
    $proximo_numero = $ativController->criarAtiv10($sequencia2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A</title>
</head>
<body>
<button><a href="../index.html">Página Inicial</a></button><br><br>
    <fieldset>
        <legend><h2>SEQUÊNCIA NUMÉRICA</h2></legend>
        <h3>Complete a sequência: 1, 4, 9, 16, 25, ...</h3>

        <?php
            echo "Os números da sequência são: " . implode(', ', $proximo_numero);
        ?>
    </fieldset>
</body>
</html>