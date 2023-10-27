<?php
require_once '../app/Controller/Ativ1Controller.php';

$ativ6Controller = new Ativ1Controller();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formulario_enviado = $_POST["formulario_enviado"];

    if ($formulario_enviado == "exercicio6") {
        if (isset($_POST['cuboaresta'])) {
            $cubovol = $ativ6Controller->criarAtiv6($_POST['cuboaresta']);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body>
    <button><a href="../index.html">Página Inicial</a></button><br><br>

    <fieldset>
        <legend><h2>GEOMETRIA ESPACIAL</h2></legend>
        <h3>Calcule o volume de um cubo com aresta de 5 centímetros.</h3>

        <form method="post">
            <input type="hidden" name="formulario_enviado" value="exercicio6">
            <input type="text" name="cuboaresta" placeholder="Aresta do cubo" value="5">
            <input type="submit" value="Calcular"><br><br>
        </form>

        <?php
        if (isset($cubovol)) {
            echo "O volume do cubo é de $cubovol cm³";
        }
        ?>
    </fieldset>
</body>
</html>
