<?php
    class Funcionario extends Pessoa {
        private $setor;
        private $trabalhando;

        public function getSetor() {
            return $this -> setor;
        }

        private function setSetor($setor) {
            $this -> setor = $setor;
        }

        public function getTrabalhando() {
            return $this -> trabalhando;
        }

        private function setTrabalhando($trabalhando) {
            $this -> trabalhando = $trabalhando;
        }

        public function mudarTrabalho($trabalho) {
            $this -> setSetor($trabalho);
        }
    }
?>