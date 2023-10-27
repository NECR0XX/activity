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
        <legend><h2>GEOMETRIA</h2></legend>
        <h3>Calcule o perímetro de um retângulo com lados de 7 metros e 12 metros.</h3>

        <?php
        $retanglarg = 7;
        $retangcomp = 12;
        $larg = $retanglarg+$retanglarg;
        $comp = $retangcomp+$retangcomp;
        $perimetro = $larg+$comp;

        echo "O perímetro do retângulo é $perimetro m";
        ?>
    </fieldset>
</body>
</html>