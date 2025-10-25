<?php
require_once 'Persona.php';

/*
--EJEMPLO 1

$persona1 = new Persona;
echo $persona1->crear_persona();
echo '<br>';
$persona2 = new Persona;
echo $persona2->crear_persona();
*/

echo Persona::crear().'<br>';
echo Persona::crear().'<br>';
echo Persona::crear().'<br>';
echo Persona::crear().'<br>';