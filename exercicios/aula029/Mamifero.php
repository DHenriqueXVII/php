<?php

require_once 'Animal.php';

class Mamifero extends Animal {
    private $corPelo;

    public function locomover() {
        echo 'Correndo';
    }

    public function alimentar() {
        echo 'Mamando';
    }

    public function emitirSom() {
        echo 'Som de mamífero';
    }
}