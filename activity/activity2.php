<?php
require_once '../app/Controller/AtivController.php';

    $ativController = new Ativ1Controller();
    $sequencia = [2, 4, 8, 16];
    $proximos_tres = $ativController->criarAtiv2($sequencia);
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
        <h3>Qual será os 3 próximos números na sequência 2, 4, 8, 16, ...?</h3>

        <?php
            echo "Os 3 próximos números na sequência são: " . implode(', ', $proximos_tres);
        ?>
    </fieldset>

</body>
</html>