<?php
    require_once 'Aluno.php';

    class Bolsista extends Aluno {
        private $bolsa;

        public function __construct(...$informacoes) {
            parent::__construct(...$informacoes);
            $this -> setBolsa($informacoes[5]);
        }

        public function getBolsa() {
            return $this -> bolsa;
        }

        private function setBolsa($bolsa) {
            $this -> bolsa = $bolsa;
        }

        public function renovarBolsa() {
            echo '<p>Bolsa renovada!</p>';
        }

        public function pagarMensalidade() {
            echo '<p>Mensalidade paga com desconto!</p>';
        }
    }
?>