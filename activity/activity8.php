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
        <h3>Se 3 camisetas custam R$ 60, quanto custarão 5 camisetas?</h3>

        <?php
        $camiseta3 = 60;
        $camisa = $camiseta3/3;
        $camisa5 = $camisa*5;

        echo "Uma camiseta é $camisa, então 5 camisas são $camisa5";
        ?>
    </fieldset>
</body>
</html>