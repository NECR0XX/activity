<?php
require_once '../app/Controller/Ativ1Controller.php';

$ativ1Controller = new Ativ1Controller();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formulario_enviado = $_POST["formulario_enviado"];

    if ($formulario_enviado == "exercicio1") {
        if (isset($_POST['maria'])) {
            $Joao = $ativ1Controller->criarAtiv1($_POST['maria']);

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
        <legend><h2>PROBLEMA DE TAXA</h2></legend>
        <h3>Se você percorrer 120 quilômetros em 2 horas, qual é a sua
        velocidade média?</h3>

        <?php
        $distancia = 120;
        $tempo = 2;
        $vm = $distancia/$tempo;

        echo "A velocidade média percorrida em 2 horas é de $vm K/h";
        ?>
    </fieldset>
</body>
</html>