<?php
require_once '../app/Controller/Ativ16Controller.php';
$ativController = new Ativ16Controller();
$primos = $ativController->criarAtiv16(); // Obter a lista de números primos

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 16</title>
</head>
<body>
    <button><a href="../index.html">Página Inicial</a></button><br><br>
    <fieldset>
        <legend><h2>SEQUÊNCIA DE PRIMOS</h2></legend>
        <h3>Liste os primeiros cinco números primos maiores que 20.</h3>
        <ul>
            <?php
            foreach ($primos as $primo) {
                echo "<li>$primo</li>";
            }
            ?>
        </ul>
    </fieldset>
</body>
</html>