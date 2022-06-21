<?php
    declare (strict_types = 1);

    class Produtos{
        private string $nome;
        private float $preco;

        //construtor com parametros
        public function __construct(string $nome, float $preco){
            $this->nome = $nome;
            $this->preco = $preco;
        }
        /*Construtor para PHP8
        public function __constructo(
            private string $nome;
            private float $preco;
        ){}
        */

        function getNome() : string
        {
            return $this->nome;
        }
        function setNome($novoNome) : void
        {
            $this->nome = $novoNome;
        }
        function getPreco() : float
        {
            return $this->preco;
        }
        function setPreco($novoPreco) : void
        {
            if($novoPreco>0){
                $this->nome = $novoPreco;
            }else{
                die("Valor negativo");
            }
            
        }
    }