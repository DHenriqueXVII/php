<?php
    class Conta {
        public $numero;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct() {
            $this -> setNumero(rand(100, 999));
            $this -> setSaldo(0);
            $this -> setStatus(false);
        }

        public function getNumero() {
            return $this -> numero;
        }

        public function setNumero($n) {
            $this -> numero = $n;
        }

        public function getTipo() {
            return $this -> tipo;
        }

        public function setTipo($t) {
            $this -> tipo = $t;
        }

        public function getDono() {
            return $this -> dono;
        }

        public function setDono($d) {
            $this -> dono = $d;
        }

        public function getSaldo() {
            return $this -> saldo;
        }

        public function setSaldo($s) {
            $this -> saldo = $s;
        }

        public function getStatus() {
            return $this -> status;
        }

        public function setStatus($s) {
            $this -> status = $s;
        }

        public function abrirConta($t) {
            $this -> setTipo($t);
            $this -> setStatus(true);

            $this -> getTipo() == 'corrente' ? $this -> setSaldo(50) : $this -> setSaldo(150);
        }

        public function fecharConta() {
            if ($this -> getSaldo() == 0) {
                $this -> setStatus(false);
            } else {
                echo '<p>Não foi possível fechar conta</p>';
            }
        }

        public function depositar($d) {
            if ($this -> getStatus() == true) {
                $this -> setSaldo($this -> getSaldo() + $d);
            } else {
                echo '<p>Não foi possível depositar</p>';
            }
        }

        public function sacar($s) {
            if ($this -> saldo >= $s && $this -> getStatus() == true) {
                $this -> setSaldo($this -> getSaldo() - $s);
            } else {
                echo '<p>Não foi possível sacar</p>';
            }
        }

        public function pagarMensalidade() {
            if (($this -> getSaldo() >= 12 || $this -> getSaldo() >= 20) && $this -> getStatus() == true) {
                if ($this -> getTipo() == 'corrente') {
                    $this -> setSaldo($this -> getSaldo() - 12);
                } else {
                    $this -> setSaldo($this -> getSaldo() - 20);
                }
            }
        }
    }
?>