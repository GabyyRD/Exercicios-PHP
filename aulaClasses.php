<?php
//Desculpa o atrasooo, já tinha feito mas acabou que achei que tava errado e não enviei
    class Maratona
    {
        public $nome;
        public $idade;
        private $cpf;

        function __construct(string $nome, int $idade, int $cpf)
        {
            $this-> nome = $nome;
            $this-> idade = $idade;
            $this-> cpf = $cpf;
        }

        function verificaIdade(int $idade)
        {
            if ($this->idade < 18 or $this->idade > 70){
                echo "Inscrição não confirmada. Idade não permitida.";
            }
        }

        function getCpf()
        {
             return $this->cpf;
        }
    }

    $atleta = new Maratona("Gaby", 19, 98765432189);

    $atleta-> verificaIdade(19);
    print_r($atleta);

?>