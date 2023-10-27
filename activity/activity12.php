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

        <?php
        $pi = 3.14;
        $raio = 6;
        $raio2 = $raio**2;
        $area = $pi*$raio2;

        echo "A área da esfera é de $area cm²";
        ?>
    </fieldset>
</body>
</html>