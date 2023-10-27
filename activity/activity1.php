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
    <title>Atividade 1</title>
</head>
<body>
    <button><a href="../index.html">Página Inicial</a></button><br><br>

    <?php
    $idade_maria = 20;
    $Maria = isset($_POST['Maria']) ? (int)$_POST['Maria'] : $idade_maria;
    ?>

    <fieldset>
    <legend><h2>PROBLEMA DAS IDADES:</h2></legend>
    <h3>Se João tem o dobro da idade de Maria e Maria tem <?php echo "$Maria" ?> anos,
        qual é a idade de João?</h3>

    <form method="post">
        <input type="hidden" name="formulario_enviado" value="exercicio1">
        <input type="text" name="Maria" placeholder="Idade de Maria" value="<?php echo $Maria; ?>">
        <input type="submit" value="Calcular"><br><br>
    </form>

    <?php
        $Joao = $Maria * 2;
        echo "Se Maria tem $Maria anos, João tem $Joao anos.";
    ?>
    </fieldset>
</body>
</html>
