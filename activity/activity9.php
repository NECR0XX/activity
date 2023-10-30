<?php
require_once '../app/Controller/AtivController.php';

$ativController = new Ativ1Controller();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formulario_enviado = $_POST["formulario_enviado"];

    if ($formulario_enviado == "exercicio9") {
        if (isset($_POST['largura']) && isset($_POST['comprimento'])) {
            $retanglarg = (int)$_POST['largura'];
            $retangcomp = (float)$_POST['comprimento'];
            $perimetro = $ativController->criarAtiv9($retanglarg, $retangcomp);
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
        <legend><h2>GEOMETRIA</h2></legend>
        <h3>Calcule o perímetro de um retângulo com lados de 7 metros e 12 metros.</h3>

        <form method="post">
        <input type="hidden" name="formulario_enviado" value="exercicio9">
        <input type="number" name="largura" placeholder="Largura">
        <input type="number" name="comprimento" placeholder="Comprimento">
        <input type="submit" value="Calcular"><br><br>
        </form>

        <?php
            if (isset($perimetro)) {
                echo "O perímetro do retângulo é $perimetro m";
            }
        ?>
    </fieldset>
</body>
</html>