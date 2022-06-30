<?php
    class Estudar {
        var $materia;
        var $assunto;
        var $duracao;
        var $estudando;

        function iniciarEstudos() {
            $this -> estudando = true;
            echo "Comecei a estudar ".$this -> materia." especificamente ".$this -> assunto;
        }
    }
?>