<?php

require_once "Pessoa.php";

$pessoa = new Pessoa("Daniel", "Espindola", "1990-01-01", "123456789", "Física", "123-456-7890", "Rua São Bento, 325");

$nomeCompleto = $pessoa->getNomeCompleto();
$dataNascimento = $pessoa->getDataNascimento();

echo "Nome completo: " . $nomeCompleto . "<br>";
echo "Data de nascimento: " . $dataNascimento;

?>
