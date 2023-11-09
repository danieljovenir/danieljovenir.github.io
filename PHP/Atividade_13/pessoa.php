<?php

class Pessoa {
    private $nome;
    private $sobreNome;
    private $dataNascimento;
    private $cpfCnpj;
    private $tipo;
    private $telefone;
    private $endereco;

    public function __construct($nome, $sobreNome, $dataNascimento, $cpfCnpj, $tipo, $telefone, $endereco) {
        $this->nome = $nome;
        $this->sobreNome = $sobreNome;
        $this->dataNascimento = $dataNascimento;
        $this->cpfCnpj = $cpfCnpj;
        $this->tipo = $tipo;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
    }

    public function getNomeCompleto() {
        return $this->nome . " " . $this->sobreNome;
    }

    public function toJson() {
        $data = array(
            'nome' => $this->nome,
            'sobrenome' => $this->sobreNome,
            'dataNascimento' => $this->dataNascimento,
            'cpfCnpj' => $this->cpfCnpj,
            'tipo' => $this->tipo,
            'telefone' => $this->telefone,
            'endereco' => $this->endereco
        );

        return json_encode($data);
    }
}
?>
