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
        <legend><h2>PROBLEMA DE JUROS</h2></legend>
        <h3>Se você investir R$ 5.000 a uma taxa de juros composta de 8% ao
        ano, quanto terá após 5 anos?</h3>

        <?php
        $valor_principal = 5000;
        $taxa_juros_anual = 0.08;
        $numero_anos = 5;
        
        $valor_futuro = $valor_principal * pow(1 + $taxa_juros_anual, $numero_anos);
        
        echo "Após 5 anos, o valor do investimento será de R$" . number_format($valor_futuro, 2, ',', '.');
        
        ?>
    </fieldset>
</body>
</html>