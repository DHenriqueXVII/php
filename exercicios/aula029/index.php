<?php

require_once 'Mamifero.php';
require_once 'Reptil.php';
require_once 'Peixe.php';
require_once 'Ave.php';

$mamifero = new Mamifero;
$reptil = new Reptil;
$peixe = new Peixe;
$ave = new Ave;

$mamifero -> emitirSom();
$reptil -> emitirSom();
$peixe -> emitirSom();
$ave -> emitirSom();