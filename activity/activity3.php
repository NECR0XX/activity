<?php
require_once '../app/Controller/AtivController.php';

    $ativController = new Ativ1Controller();
    $resulpar = 3;
    $totalresul = 6;
    list($probabilidade, $probabilidademporc) = $ativController->criarAtiv3($resulpar, $totalresul);
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
        <legend><h2>PROBABILIDADE</h2></legend>
        <h3>Se você lançar um dado de seis lados, qual é a probabilidade de sair um
        número ímpar?</h3>

        <?php
            echo "A probabilidade de de sair um numéro par é $probabilidade ou $probabilidademporc% ";
        ?>
    </fieldset>
</body>
</html>