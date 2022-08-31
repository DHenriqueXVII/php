<?php
    abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;

        public function __construct($nome, $idade, $sexo) {
            $this -> setNome($nome);
            $this -> setIdade($idade);
            $this -> setSexo($sexo);
        }

        public function getNome() {
            return $this -> nome;
        }

        protected function setNome($nome) {
            $this -> nome = $nome;
        }

        public function getIdade() {
            return $this -> idade;
        }

        protected function setIdade($idade) {
            $this -> idade = $idade;
        }

        public function getSexo() {
            return $this -> sexo;
        }

        protected function setSexo($sexo) {
            $this -> sexo = $sexo;
        }

        public final function fazerAniversário() {
            $this -> setIdade($this -> getIdade() + 1);
        }
    }
?>