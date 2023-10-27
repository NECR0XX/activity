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
        <h3>Qual será os 3 próximos números na sequência 2, 4, 8, 16, ...?</h3>

        <?php
            $sequencia = [2, 4, 8, 16];

            for ($i = 4; $i < 7; $i++) {
                $prox = $sequencia[$i - 1] * 2;
                $sequencia[] = $prox;
            }

            echo implode(', ', array_slice($sequencia, 4, 3));
        ?>
    </fieldset>
</body>
</html>