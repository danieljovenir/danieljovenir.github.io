<?php
$dados = file_get_contents("pessoas.json");
$pessoas = json_decode($dados, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados das Pessoas</title>
</head>
<body>
    <h1>Dados das Pessoas</h1>
    <ul>
        <?php foreach ($pessoas as $pessoa): ?>
            <li>
                <strong>Nome:</strong> <?php echo $pessoa["nome"]; ?><br>
                <strong>E-mail:</strong> <?php echo $pessoa["email"]; ?>
            </li>
            <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>
