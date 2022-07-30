<?php
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

    $atleta = new Maratona("Gaby", $idade, $cpf);

    $atleta-> verificaIdade($idade);
    print_r($atleta);

?>