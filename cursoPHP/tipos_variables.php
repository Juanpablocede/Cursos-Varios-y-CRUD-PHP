<?php

//Las variables se definen con el simbolo $

// Tipo string o cadena de texto
$nombres = "Juan Pablo Cedeño";

// Tipo numerico entero
$numero_entero = 7;

// Tipo decimal o double
$numero_decimal = 7.7;

// Boleanas verdadero o falso. Estas variables devuelven los valores 1 si es verdadero y 0 si el falso
$verdadero  = true;
$falso = false;

// Concatenaciones
// Con las dobles comillas y dentro de ellas se pueden colocar las variables que se quieren concatenar
echo "Hola: $nombres";

// Tambien se puede concatenar de las siguientes manera y es la mas recomendada.
echo "hola: " . $nombres;

// Para ver el tipo de datos que almacena una variable

echo gettype($numero_decimal);




?>
