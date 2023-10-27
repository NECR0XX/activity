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
        <legend><h2>PROBLEMA DE PROPORÇÃO</h2></legend>
        <h3>Se 4 canetas custam R$ 12, quanto custarão 10 canetas?</h3>

        <?php
        $caneta4 = 12;
        $caneta = $caneta4/4;
        $caneta10 = $caneta*10;

        echo "Uma caneta é $caneta reais, então 10 canetas são $caneta10 reais";
        ?>
    </fieldset>
</body>
</html>