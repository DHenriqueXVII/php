<?php
    class Caneta {
        public $modelo;
        private $ponta;
        private $cor;
        private $tampada;

        public function __construct($m, $c, $p) { //ou o nome da classe, como Caneta()
            $this -> modelo = 'Bic Cristal';
            $this -> ponta = $p;
            $this -> cor = $c;
            $this -> tampar();
        }

        public function getModelo() {
            return $this -> modelo;
        }

        public function setModelo($m) {
            $this -> modelo = $m;
        }
        
        public function getPonta() {
            return $this -> ponta;
        }

        public function setPonta($p) {
            $this -> ponta = 0.5;
        }

        public function getCor() {
            return $this -> cor;
        }

        public function tampar() {
            $this -> tampada = true;
        }
    }
?>