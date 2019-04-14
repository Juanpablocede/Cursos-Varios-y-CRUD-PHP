<?php
/*
 Existen dos tipos de arreglos, los arreglos predefinidos y los arreglos asociativos
 */
//Artreglos predefinidos
$arreglo01 = array("Juan","Jonathan","Johans","Johander",1,2,3);
print($arreglo01[0]);
print("<br />");
print sizeof($arreglo01)."<br/>"; //Tamaño del arreglo

//Arreglos asociativos o personalizados
$arreglo02 = array("clave1" => "Juan", "clave2" => "Jonathan", "clave3" => "Johans", "clave4" => "Johander");
print($arreglo02["clave1"].'<br />');

for($i=0; $i<=(sizeof($arreglo01)-1); $i++)
{
    if($i<(sizeof($arreglo01)-1))
    {
        print($arreglo01[$i].', ');
        
    }
    else
    {
        print($arreglo01[$i]);
    }
}

$cuenta = 0;
while (sizeof($arreglo01) == $cuenta)
{
    print($arreglo01[$cuenta]);
    $cuenta++;
}

do
{
    print("<br />".$arreglo01[$cuenta]);
    $cuenta++;
}while($cuenta<=(sizeof($arreglo01)));

/*La instruccion foreach permite extraer todos los elementos de un arreglo;
 *es similar a como si se estuviera reccoriendo el arreglo*/
//Arreglos predefinidos
foreach($arreglo01 as $valordelarreglo)
{
    print($valordelarreglo)."<br/>";
}

//Arreglos asociativos
foreach($arreglo02 as $clave => $elementos)
{
    print($clave."=".$elementos)."<br/>";
}



?>