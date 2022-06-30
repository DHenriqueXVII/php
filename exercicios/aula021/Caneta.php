<?php
    class Caneta {
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar() {
            if ($this -> tampada == true /*|| $this -> carga == 0*/) {
                echo "<h1>ERRO! Não posso rabiscar!</h1>";
            } else {
                echo "<h1>Rabiscando</h1>";
                $this -> carga -= 10;
            }
        }

        public function tampar() {
            $this -> tampada = true;
        }

        public function destampar() {
            $this -> tampada = false;
        }

        private function carregar() {
            while ($this -> carga < 100) {
                $this -> carga += 10;
            }
        }
    }
?>