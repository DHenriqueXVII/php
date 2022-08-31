<?php
    require_once 'Aluno.php';

    class Tecnico extends Aluno {
        private $registroProfissional;

        public function __construct(...$informacoes) {
            parent::__construct(...$informacoes);
            $this -> setRegistroProfissional($informacoes[5]);
        }

        public function getRegistroProfissional() {
            return $this -> registroProfissional;
        }

        private function setRegistroProfissional($registroProfissional) {
            $this -> registroProfissional = $registroProfissional;
        }

        public function praticar() {
            echo '<p>Praticando...</p>';
        }
    }
?>