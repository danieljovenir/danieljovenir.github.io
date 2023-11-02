<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariazinha</title>
</head>
<body>
    <?php
    $numero_parcelas = 60;
    $valor_parcela = 489.65;
    $valor_carro_a_vista = 22500.00;

    $juros_pagos = ($numero_parcelas * $valor_parcela) - $valor_carro_a_vista;

    echo "Mariazinha pagará R$ " . number_format($juros_pagos, 2, ',', '.') . " apenas em juros.";
    ?>
</body>
</html>