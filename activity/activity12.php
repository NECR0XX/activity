<?php
require_once '../app/Controller/AtivController.php';

$ativController = new Ativ1Controller();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formulario_enviado = $_POST["formulario_enviado"];

    if ($formulario_enviado == "exercicio12") {
        if (isset($_POST['raio'])) {
            $raio = (int)$_POST['raio'];
            $area = $ativController->criarAtiv12($raio);
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
        <legend><h2>GEOMETRIA ESPACIAL</h2></legend>
        <h3>Calcule a área da superfície de uma esfera com raio de 6
        centímetros.</h3>

        <form method="post">
        <input type="hidden" name="formulario_enviado" value="exercicio12">
        <input type="number" name="raio" placeholder="Raio">
        <input type="submit" value="Calcular"><br><br>
        </form>

        <?php
            if (isset($area)) {
                echo "A área da esfera é de $area cm²";
            }
        ?>
    </fieldset>
</body>
</html>