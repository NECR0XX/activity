<?php
require_once '../app/Controller/AtivController.php';

$ativController = new Ativ1Controller();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formulario_enviado = $_POST["formulario_enviado"];

    if ($formulario_enviado == "exercicio7") {
        if (isset($_POST['distancia']) && isset($_POST['tempo'])) {
            $vm = $ativController->criarAtiv7($_POST['distancia'], $_POST['tempo']);
        }
    }
}
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
        <legend><h2>PROBLEMA DE TAXA</h2></legend>
        <h3>Se você percorrer 120 quilômetros em 2 horas, qual é a sua
        velocidade média?</h3>

        <form method="post">
            <input type="hidden" name="formulario_enviado" value="exercicio7">
            <input type="number" name="distancia" placeholder="Distância">
            <input type="number" name="tempo" placeholder="Tempo">
            <input type="submit" value="Calcular"><br><br>
        </form>

        <?php
            if (isset($vm)) {
                echo "A velocidade média percorrida em 2 horas é de $vm K/h";
            }
        ?>
    </fieldset>
</body>
</html>