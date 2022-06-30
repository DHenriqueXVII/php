<?php
    class Caneta {
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        function rabiscar() {
            if ($this -> tampada == true || $this -> carga == 0) {
                echo "<h1>ERRO! Não posso rabiscar!</h1>";
            } else {
                echo "<h1>Rabiscando</h1>";
                $this -> carga -= 10;
            }
        }

        function tampar() {
            $this -> tampada = true;
        }

        function destampar() {
            $this -> tampada = false;
        }

        function carregar() {
            while ($this -> carga < 100) {
                $this -> carga += 10;
            }
        }
    }
?>