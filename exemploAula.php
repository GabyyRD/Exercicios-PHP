<?php
    //Classe Banco
    class Banco
    {
        //Atributos do Banco
        public $nome;
        private $cpf;
        private $saldo;

        //Construtor da sua classe Banco
        function __construct(string $nome, int $cpf,float $saldo = 0)
        {
            $this->nomeBanco = $nome;
            $this->cpf = $cpf;
            $this->saldo = $saldo;
        }

        //Métodos da sua classe Banco
        function depositar(int $valor): void
        {
            $this->saldo += $valor;
        }

        function sacar(int $valor): void
        {
            if($this->saldo >= $valor) $this->saldo -= $valor;
            else echo "Saldo insuficiente\n";
        }

        function getCpf(): int
        {
            return $this->cpf;
        }
    }

    //Criação do seu objeto
    $cliente = new Banco("Pablo", 123456789);
    
    //Utilização dos métodos do objeto
    $cliente->depositar(200);
    $cliente->sacar(20);
    print_r($cliente);

    $cliente->sacar(200);
    print_r($cliente);
?>