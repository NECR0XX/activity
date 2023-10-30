<?php
require_once '../app/Controller/AtivController.php';

    $ativController = new Ativ1Controller();
    $resulpar2 = 4;
    $totalresul2 = 52;
    list($probabilidade2, $probabilidademporc2) = $ativController->criarAtiv11($resulpar2, $totalresul2);
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
        <legend><h2>PROBABILIDADE</h2></legend>
        <h3>Se você tem um baralho com 52 cartas, qual é a probabilidade de tirar
        um ás (carta de naipe) em uma única tentativa?</h3>

        <?php
            echo "A probabilidade de de sair um numéro par é $probabilidade2 ou $probabilidademporc2% ";
        ?>
    </fieldset>
</body>
</html>