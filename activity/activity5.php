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
        <legend><h2>PROBLEMA DE MÚLTIPLOS</h2></legend>
        <h3>Liste os múltiplos de 5 menores que 30.</h3>

        <?php
        for ($i = 5; $i < 30; $i += 5) {
            echo $i . " ";
        }        
        ?>
    </fieldset>
</body>
</html>