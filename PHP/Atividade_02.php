<?php
// Crie um programa para testar se um número é divisível por 2.

// - Caso for verdade escrever a frase "Valor divisível por 2";
// - Caso for falso escrever a frase "O valor não é divisível por 2".
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Atividade_02.php" method="post">
        <label>Escreva um valor para o campo X:</label><br>
        <input id="x" name="x" type="text">
        <input type="submit">
    </form>
</body>
</html>

<?php
$valorX = $_POST['x'];

if ($valorX = is_integer(1)) {
    echo 'Esse valor é divisível por 2';
} else {
    echo 'Esse valor não é divisível por 2';
}

?>


