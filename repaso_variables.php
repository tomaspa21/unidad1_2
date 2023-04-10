<?php

//numerica
$numero= 4;
echo"Esto es una variable numerica <br>";
var_dump($numero);
echo "<hr>";
//string
$palabra= "Esto es un string ";
echo "<br>" .$palabra ."<br>";
var_dump($palabra);
echo "<hr>";
//boleana
$boleana= true;
echo "<br>" .$boleana ."<br>";
var_dump($boleana);
echo "<hr>";
//Arrays
$colores= array ("rojo","azul","verde");
echo "Esto es un array: $colores[1] <br>";
var_dump($colores);
echo "<hr>";
//Arrays con propiedades
$verduras= array ("verdura1"=>"lechuga", "verdura2"=>"zanahoria", "verdura3"=>"morron");
echo "Esto es un array con propiedades: $verduras [2]";
var_dump($verduras);
echo "<hr>";
//Variables objetos
$frutas= (object)["fruta1"=>"pera" , "fruta2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta1 <br>";
var_dump($frutas);
