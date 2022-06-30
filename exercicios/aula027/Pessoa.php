<?php
    require_once 'Aluno.php';

    class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;

        public function __construct(...$informacoes) {
            $this -> setNome($informacoes[0]);
            $this -> setIdade($informacoes[1]);
            $this -> setSexo($informacoes[2]);
        }

        public function getNome() {
            return $this -> nome;
        }

        private function setNome($nome) {
            $this -> nome = $nome;
        }

        public function getIdade() {
            return $this -> idade;
        }

        private function setIdade($idade) {
            $this -> idade = $idade;
        }

        public function getSexo() {
            return $this -> sexo;
        }

        private function setSexo($sexo) {
            $this -> sexo = $sexo;
        }

        public function fazerAniversario() {
            $this -> setIdade($this -> getIdade() + 1);
        }
    }
?>