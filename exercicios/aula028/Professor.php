<?php
    require_once 'Pessoa.php';

    class Professor extends Pessoa {
        private $especialidade;
        private $salario;

        public function __construct(...$informacoes) {
            parent::__construct(...$informacoes);
            $this -> setEspecialidade($informacoes[3]);
            $this -> setSalario($informacoes[4]);
        }

        public function getEspecialidade() {
            return $this -> especialidade;
        }

        private function setEspecialidade($especialidade) {
            $this -> especialidade = $especialidade;
        }

        public function getSalario() {
            return $this -> salario;
        }

        private function setSalario($salario) {
            $this -> salario = $salario;
        }

        public function receberAumento($aumento) {
            $this -> setSalario($this -> getSalario() + $aumento);
        }
    }
?>