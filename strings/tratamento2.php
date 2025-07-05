<?php

require "recursos/funcoes/functions.php";

$string = "  Eu sou uma string  ";
$string1 = "EU SOU UMA STRING";
$string2 = "  Eu sou uma nova string";
$string3 = "Eu sou uma nova string  ";
$codigo = 2;


# strlen - mostra a quantidade de caracteres de uma string
$len = strlen($string3);
echo $len;
quebrarLinha();


# substr - mostra um determinado numero de caracteres
$sbs = substr($string3, 3, 12);
echo $sbs;
quebrarLinha();