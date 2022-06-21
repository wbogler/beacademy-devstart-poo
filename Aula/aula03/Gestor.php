<?php

    declare(strict_types = 1);

    class Gestor extends Usuario{

        private float $salario;
        private string $horario;

        public function __construct(string $nome, string $email, string $cpf, float $salario, string $horario){
            parent :: setNome($nome);
            parent :: setEmail($email);
            parent :: setCpf($cpf);
            $this->salario = $salario;
            $this->horario - $horario;
            //construtor com atributos de outra classe. 
        }

        public function getSalario():float
        {
            return $this->salario;
        }

        public function setSalario(float $salario):void
        {
            $this->salario = $salario;
        }
        public function gethorario():string
        {
            return $this->horario;
        }

        public function setHorario(float $horario):void
        {
            $this->horario = $horario;
        }

    }