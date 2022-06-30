<?php
    class Notebook {
        var $fabricante;
        var $cpu;
        var $gpu;
        var $ram;
        var $rom;
        var $bateria;
        var $ligado;

        function ligar() {
            if ($this -> bateria > 0) {
                $this -> ligado = true;
                $this -> bateria -= 1;
                echo "<p>Ligando...<p>";
            } else {
                echo "<p>Bateria descarregada<p>";
            }
        }

        function desligar() {
            $this -> ligado = false;
        }

        function carregar() {
            for($carga = $this -> bateria; $carga <= 100; $carga ++) {
                $this -> bateria = $carga;
            }
            echo '<p>Carga completa</p>';
        }
    }
?>