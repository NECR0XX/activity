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
        <legend><h2>PROBLEMA DE MÚLTIPLOS</h2></legend>
        <h3>Liste os múltiplos de 7 menores que 50.</h3>

        <?php
        for ($i = 7; $i < 50; $i += 7) {
            echo $i . " ";
        }        
        ?>
    </fieldset>
</body>
</html>