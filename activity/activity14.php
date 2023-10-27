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
        <legend><h2>POBLEMA DE TAXA</h2></legend>
        <h3>Se um carro viaja a uma velocidade constante de 80 km/h, quanto
        tempo levará para percorrer 240 quilômetros?</h3>

        <?php
        $distancia = 240;
        $velocidade = 80;

        $tempo = $distancia / $velocidade;

        echo "O tempo necessário para percorrer 240 quilômetros a 80 km/h é de $tempo horas.";
        ?>
    </fieldset>
</body>
</html>