<?php


require_once "Carro.php";
require_once "Gol.php";
require_once "Uno.php";



$carro = new Carro();
$gol = new Gol();
$uno = new Uno();

echo $gol->motor; 

echo $uno->ident;

echo $uno->teto;

echo $gol->rodas;

echo $uno->cor;

?>