<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    
    $pessoa = array("nome" => $nome, "email" => $email);
    
    $dados = file_get_contents("pessoas.json");
    $pessoas = json_decode($dados, true);
    
    if ($pessoas == null) {
        $pessoas = array();
    }
    
    $pessoas[] = $pessoa;
    
    file_put_contents("pessoas.json", json_encode($pessoas));
    
    header("Location: index.html");
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
