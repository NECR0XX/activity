<?php
require_once '../app/Controller/AtivController.php';

$ativController = new Ativ1Controller();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formulario_enviado = $_POST["formulario_enviado"];

    if ($formulario_enviado == "exercicio14") {
        if (isset($_POST['distancia']) && isset($_POST['velocidade'])) {
            $tempo = $ativController->criarAtiv14($_POST['distancia'], $_POST['velocidade']);
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
        <legend><h2>POBLEMA DE TAXA</h2></legend>
        <h3>Se um carro viaja a uma velocidade constante de 80 km/h, quanto
        tempo levará para percorrer 240 quilômetros?</h3>

        <form method="post">
            <input type="hidden" name="formulario_enviado" value="exercicio14">
            <input type="number" name="velocidade" placeholder="Velocidade">
            <input type="number" name="distancia" placeholder="Distância">
            <input type="submit" value="Calcular"><br><br>
        </form>

        <?php
        if (isset($tempo)){
            echo "O tempo necessário para percorrer 240 quilômetros a 80 km/h é de $tempo horas.";
        }
        ?>
    </fieldset>
</body>
</html>