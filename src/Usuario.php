<?php
class Usuario implements Observador {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function atualizar($mensagem) {
        echo "{$this->nome} recebeu a mensagem: {$mensagem}\n";
    }
}
