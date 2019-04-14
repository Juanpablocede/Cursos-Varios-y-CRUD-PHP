<?php
function operacion($parametro1,$parametro2,$parametro3)
{
    $suma = ($parametro1+$parametro2+$parametro3);
    $multiplicar = $suma * 2;
    return $multiplicar;
}

print ("El resultado de la funcion es: ". operacion(8,6,9));


?>