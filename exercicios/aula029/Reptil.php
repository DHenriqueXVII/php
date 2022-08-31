<?php

require_once 'Animal.php';

class Reptil extends Animal {
    public function locomover() {
        echo 'rastejando';
    }

    public function alimentar() {
        echo 'Comendo vegetais';
    }

    public function emitirSom() {
        echo 'Som de réptil';
    }
}