<!DOCTYPE html>
<html>
<head>
    <title>Calcular a Área de um Retângulo</title>
</head>
<body>
    <h1>Calcular a Área de um Retângulo</h1>
    
    <form method="post">
        Lado a (em metros): <input type="text" name="lado_a"><br>
        Lado b (em metros): <input type="text" name="lado_b"><br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if(isset($_POST['calcular'])){
        $lado_a = floatval($_POST['lado_a']);
        $lado_b = floatval($_POST['lado_b']);

        $area = $lado_a * $lado_b;

        if ($area > 10) {
            echo "<h1>A área do retângulo de lados $lado_a e $lado_b metros é $area metros quadrados.</h1>";
        } else {
            echo "<h3>A área do retângulo de lados $lado_a e $lado_b metros é $area metros quadrados.</h3>";
        }
    }
    ?>
</body>
</html>