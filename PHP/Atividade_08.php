<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paulinho</title>
</head>
<body>
    <?php
    $valor_a_vista = 8654.00;

    for ($parcelas = 24, $taxa_juros = 0.015; $parcelas <= 60; $parcelas += 12, $taxa_juros += 0.005) {
        $valor_parcelas = ($valor_a_vista * (1 + $taxa_juros * $parcelas)) / $parcelas;
        echo "Para $parcelas vezes: R$ " . number_format($valor_parcelas, 2, ',', '.') . " por parcela<br>";
    }
    ?>

</body>
</html>