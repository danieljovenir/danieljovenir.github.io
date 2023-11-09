<?php

require_once "Pessoa.php";

$voce = new Pessoa("Seu", "Sobrenome", "01/01/1990", "12345678901", "Física", "(11) 1234-5678", "Rua Exemplo, 123");
$pai = new Pessoa("NomePai", "SobrenomePai", "05/05/1960", "98765432101", "Física", "(11) 9876-5432", "Rua Pai, 456");
$mae = new Pessoa("NomeMae", "SobrenomeMae", "10/10/1965", "11122233344", "Física", "(11) 1111-2222", "Rua Mãe, 789");

$pessoas = array($voce, $pai, $mae);

foreach ($pessoas as $pessoa) {
    $jsonContent = $pessoa->toJson();
    file_put_contents('pessoa_' . $pessoa->getNomeCompleto() . '.json', $jsonContent);
}

echo "Dados salvos nos arquivos JSON.";
?>
