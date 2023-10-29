<?php
require_once '../app/Controller/AtivController.php';

$ativ5Controller = new Ativ1Controller();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formulario_enviado = $_POST["formulario_enviado"];

    if ($formulario_enviado == "exercicio13") {
        if (isset($_POST['multiplo']) && isset($_POST['menor'])) {
            $multiplo2 = (int)$_POST['multiplo'];
            $menor2 = (int)$_POST['menor'];
            $multiplos2 = $ativ5Controller->criarAtiv13($multiplo2, $menor2);
        }
    }
}
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
        <legend><h2>PROBLEMA DE MÚLTIPLOS</h2></legend>
        <h3>Liste os múltiplos de 7 menores que 50.</h3>

        <form method="post">
        <input type="hidden" name="formulario_enviado" value="exercicio13">
        <input type="number" name="multiplo" placeholder="Múltiplo">
        <input type="number" name="menor" placeholder="Menor que">
        <input type="submit" value="Calcular"><br><br>
        </form>

        <?php
        if (isset($multiplos2)) {
            echo "Múltiplos: " . implode(", ", $multiplos2);
        }
        ?>
    </fieldset>
</body>
</html>