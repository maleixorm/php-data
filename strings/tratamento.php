<?php

require "recursos/funcoes/functions.php";

$string = "  Eu sou uma string  ";
$string1 = "EU SOU UMA STRING";
$string2 = "  Eu sou uma nova string";
$string3 = "Eu sou uma nova string  ";
$codigo = 2;

# trim - ltrim - rtrim
$trim = trim($string);
$ltrim = ltrim($string);
$rtrim = rtrim($string);

echo $string;
quebrarLinha();
echo $trim;
quebrarLinha();
echo $ltrim;
quebrarLinha();
echo $rtrim;
quebrarLinha();