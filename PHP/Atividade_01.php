<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01</title>
</head>
<body>
    <h1>Atividade 01 </h1>
    <form action="Atividade_01.php" method="post">
        <label>Preencha o valor para X</label>
        <input id="x" name="x" type="text"><br>
        <label>Preencha o valor para Y</label>
        <input id="y" name="y" type="text"><br>
        <label>Preencha o valor para Z</label>
        <input id="z" name="z" type="text"><br>

        <input type="submit">
    </forms>
    <?php
        //Definindo e Puxando Valores do Form
        $valor1 = $_POST["x"];
        $valor2 = $_POST["y"];
        $valor3 = $_POST["z"];
        
        //Somando
        $resultado = $valor1 + $valor2 + $valor3;

        //Comparando
        if ($resultado > 10) {
            echo "<p style='color:Blue'>$resultado</p>";
        } elseif ($valor2 < $valor3) {
            echo "<p style='color:green'>$resultado</p>";
        } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
            echo "<p style='color:red'>$resultado</p>";
        }   
    ?>
</body>
</html>
