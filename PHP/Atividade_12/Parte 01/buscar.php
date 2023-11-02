<?php
$host = "localhost";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "1234";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if (!$conn) {
    echo "Erro na conexão com o banco de dados.";
    exit;
}

if (isset($_GET['nome'])) {
    $nome = pg_escape_string($_GET['nome']);
    $query = "SELECT * FROM pessoas WHERE pessoas.nome LIKE '%$nome%'";
    $result = pg_query($conn, $query);

    if (!$result) {
        echo "Erro na consulta ao banco de dados.";
        exit;
    }

    echo "<h2>Resultados da Busca por '$nome':</h2>";
    echo "<ul>";
    while ($row = pg_fetch_assoc($result)) {
        echo "<li>Nome: " . $row['nome'] . ", Email: " . $row['email'] . "</li>";
    }
    echo "</ul>";
}

pg_close($conn);
?>