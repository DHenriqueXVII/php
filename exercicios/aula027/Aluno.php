<?php
    require_once 'Professor.php';

    class Aluno extends Pessoa {
        private $matricula;
        private $curso;

        public function getMatricula() {
            return $this -> matricula;
        }

        private function setMatricula($matricula) {
            $this -> matricula = $matricula;
        }

        public function getCurso() {
            return $this -> curso;
        }

        private function setCurso($curso) {
            $this -> curso = $curso;
        }

        public function cancelarMatricula() {}
    }
?>