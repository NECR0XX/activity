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
        <legend><h2>SEQUÊNCIA DE PRIMOS</h2></legend>
        <h3>Liste os primeiros cinco números primos maiores que 20.</h3>

        <?php
        function isPrimo($numero) {
            if ($numero <= 1) {
                return false;
            }
            
            if ($numero <= 3) {
                return true;
            }
            
            if ($numero % 2 == 0 || $numero % 3 == 0) {
                return false;
            }
            
            $i = 5;
            while ($i * $i <= $numero) {
                if ($numero % $i == 0 || $numero % ($i + 2) == 0) {
                    return false;
                }
                $i += 6;
            }
            
            return true;
        }
        
        $primeiros_cinco_primos = [];
        $numero = 21;
        
        while (count($primeiros_cinco_primos) < 5) {
            if (isPrimo($numero)) {
                $primeiros_cinco_primos[] = $numero;
            }
            $numero++;
        }
        
        echo "Os primeiros cinco números primos maiores que 20 são: " . implode(", ", $primeiros_cinco_primos);
        
        ?>
    </fieldset>
</body>
</html>