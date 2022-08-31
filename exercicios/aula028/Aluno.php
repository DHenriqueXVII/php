<?php
    require_once 'Pessoa.php';

    class Aluno extends Pessoa {
        private $matricula;
        private $curso;
        
        public function __construct(...$informacoes) {
            parent::__construct(...$informacoes);
            $this -> setMatricula($informacoes[3]);
            $this -> setCurso($informacoes[4]);
        }

        public function getMatricula() {
            return $this -> matricula;
        }

        protected function setMatricula($matricula) {
            $this -> matricula = $matricula;
        }

        public function getCurso() {
            return $this -> curso;
        }
        
        protected function setCurso($curso) {
            $this -> curso = $curso;
        }
        
        public function pagarMensalidade() {
            echo '<p>Mensalidade paga!</p>';
        }
    }
?>