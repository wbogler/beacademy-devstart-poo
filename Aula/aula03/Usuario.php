<?php

    declare(strict_types = 1);

    class Usuario{
        private string $nome;
        private string $email;
        private string $cpf;

        public function __construct(string $nome, string $email, string $cpf){
            $this->nome = $nome;
            $this->email = $email;
            $this->cpf = $cpf;
        }

        public function getNome():String
        {
            return $this->nome;
        }

        public function setNome(string $nome): void
        {
            $this->nome = $nome;
        }

        public function getEmail():String
        {
            return $this->email;
        }

        public function setEmail(string $email): void
        {
            $this->email = $email;
        }

        public function getCpf():String
        {
            return $this->cpf;
        }

        public function setCpf(string $cpf): void
        {
            $this->nome = $cpf;
        }
    }