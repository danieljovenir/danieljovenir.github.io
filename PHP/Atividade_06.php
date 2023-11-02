<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joaozinho no Mercado</title>
</head>
<body>
    <?php
    $preco_macas = 5.00;
    $preco_melancia = 3.00;
    $preco_laranja = 2.50;
    $preco_repolho = 4.00;
    $preco_cenoura = 3.50;
    $preco_batatinha = 2.00;

    $quantidade_macas = 2;
    $quantidade_melancia = 1;
    $quantidade_laranja = 3;
    $quantidade_repolho = 0.5;
    $quantidade_cenoura = 1;
    $quantidade_batatinha = 2;

    $valor_macas = $preco_macas * $quantidade_macas;
    $valor_melancia = $preco_melancia * $quantidade_melancia;
    $valor_laranja = $preco_laranja * $quantidade_laranja;
    $valor_repolho = $preco_repolho * $quantidade_repolho;
    $valor_cenoura = $preco_cenoura * $quantidade_cenoura;
    $valor_batatinha = $preco_batatinha * $quantidade_batatinha;

    $total = $valor_macas + $valor_melancia + $valor_laranja + $valor_repolho + $valor_cenoura + $valor_batatinha;
    $dinheiro_disponivel = 50.00;

    if ($total > $dinheiro_disponivel) {
        $valor_excedente = $total - $dinheiro_disponivel;
        echo "<span style='color: red;'>Compra ultrapassou o limite em R$ $valor_excedente.</span>";
    } elseif ($total < $dinheiro_disponivel) {
        $valor_restante = $dinheiro_disponivel - $total;
        echo "<span style='color: blue;'>Pode gastar mais R$ $valor_restante.</span>";
    } else {
        echo "<span style='color: green;'>Compra realizada com sucesso. Saldo esgotado.</span>";
    }
    ?>

</body>
</html>