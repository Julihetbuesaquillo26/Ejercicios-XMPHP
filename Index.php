<?php

//Defina la edad y nombre de un usuario, si es menor de edad digan que no puede acceder al sitio, si es mayor 
//de edad,un mensaje de bienvenida con el nombre

$Nombre = 'Juanita';
$Edad = '18';

if ($Edad >= 18){
    echo 'Bienvenido ' . $Nombre .' a la plataforma educativa';
}else{
    echo '<br>  Usted no tiene permisos para acceder a la plataforma ' . $Nombre;
}

//Defina un numero y muestre si es par o impar,"El npumero X es:"

$numPar = '25';
if ($numPar % 2 ==0){
    echo '<br>El numero ' .$numPar .' es par';
}else{
    echo '<br>El numero ' .$numPar .' no es par';
}
?>