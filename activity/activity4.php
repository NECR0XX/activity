<?php
require_once '../app/Controller/AtivController.php';

$ativController = new Ativ1Controller();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formulario_enviado = $_POST["formulario_enviado"];

    if ($formulario_enviado == "exercicio4") {
        if (isset($_POST['base']) && isset($_POST['altura'])) {
            $area_triang = $ativController->criarAtiv4($_POST['base'], $_POST['altura']);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
    <button><a href="../index.html">Página Inicial</a></button><br><br>

    <fieldset>
        <legend><h2>GEOMETRIA</h2></legend>
        <h3>Encontre a área de um triângulo com base 8 metros e altura 6 metros.</h3>

        <form method="post">
            <input type="hidden" name="formulario_enviado" value="exercicio4">
            <input type="number" name="base" placeholder="Base do triângulo">
            <input type="number" name="altura" placeholder="Altura do triângulo">
            <input type="submit" value="Calcular"><br><br>
        </form>

        <?php
            if (isset($area_triang)) {
                echo "A área do triângulo é de $area_triang m²";
            }
        ?>
    </fieldset>
</body>
</html>
