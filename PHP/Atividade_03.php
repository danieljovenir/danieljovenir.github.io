<!DOCTYPE html>
<html>
<head>
    <title>Calcular a Área de um Quadrado</title>
</head>
<body>
    <h1>Calcular a Área de um Quadrado</h1>
    
    <form method="post">
        Comprimento do lado (em metros): <input type="text" name="lado"><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if(isset($_POST['calcular'])){
        $lado = floatval($_POST['lado']);

        $area = $lado * $lado;

        echo "<p>A área do quadrado de lado $lado metros é $area metros quadrados</p>";
    }
    ?>
</body>
</html>