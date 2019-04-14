<?php
$numero=50;
echo $numero;

$numero01=8;
$numero02=9;
$numero03=0;

$numero03=$numero01 * $numero02;

print("<br/>El resultado de ".$numero01 ." * ".$numero02." es: ".$numero03);

$texto="esto es una variable de tipo trexto";
echo("<br /> ".$texto);

/*
 Las variables de tipo booleanas poseen el valor true o false 
 cuando es true devuelve el valor de 1
 cuando es false devuelve el valor de 0 o vacio
 */

$resultado = true;
$respuesta = false;

echo('<br />la variable $resultado es '.$resultado.' la variable $respuesta es '.$respuesta);
 
/*
 Las variables tambien se pueden defir de tipo GLOBAL y LOCALES.
 Las variables GLOBALES son aquellas que se utilizan en todo el programa y en las
 funciones que este llame
 Las variables LOCALES solo se utilizan dentro del programa o dentro de las funciones.
  Para declarar una variable GOBLAL se utiliza la parabra global
 */

 global $variableglobal;


?>