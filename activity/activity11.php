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
        <h3>Se você tem um baralho com 52 cartas, qual é a probabilidade de tirar
        um ás (carta de naipe) em uma única tentativa?</h3>

        <?php
        $resulpar = 4;
        $totalresul = 52;

        $probabilidade = $resulpar/$totalresul;
        $probabilidademporc = $probabilidade*100;

        echo "A probabilidade de de sair um numéro par é $probabilidade ou $probabilidademporc% ";
        ?>
    </fieldset>
</body>
</html>