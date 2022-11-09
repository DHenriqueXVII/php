<?php

require_once 'Cachorro.php';

$Mamifero = new Mamifero;
$Lobo = new Lobo;
$Cachorro = new Cachorro;

$Mamifero -> emitirSom();
$Lobo -> emitirSom();
$Cachorro -> emitirSom();
$Cachorro -> reagirFrase('Toma comida');
$Cachorro -> reagirHorario(14);
$Cachorro -> reagirDono(true);
$Cachorro -> reagirIdadePeso(4, 9);