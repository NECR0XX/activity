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
        $sequencia = [1, 4, 9, 16, 25];

        for ($i = 5; $i < 10; $i++) {
            $proximo_numero = ($i + 1) ** 2;
            $sequencia[] = $proximo_numero;
        }
        
        echo implode(', ', array_slice($sequencia, 5, 5));
        ?>
    </fieldset>
</body>
</html>