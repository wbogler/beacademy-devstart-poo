<?php

    declare(strict_types = 1);

    class Cliente extends Usuario{

        private string $senha;

        public function getSenha():String
        {
            return $this->senha;
        }

        public function setSenha(string $senha): void
        {
            $this->senha = $senha;
        }

    }


    

    