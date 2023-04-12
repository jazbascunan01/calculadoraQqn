<?php
require_once('matematica.php');
require_once('ayudaMostrar.php');

$operadorA = $_REQUEST['operadorA'];
$operadorB = $_REQUEST['operadorB'];
$operacion = $_REQUEST['operacion'];

function calcularResultado($operadorA, $operadorB, $operacion) {

    switch ($operacion) {
        case 'suma':
            $resultado = suma($operadorA, $operadorB); 
            break;
        case 'resta':
            $resultado = resta($operadorA, $operadorB);
            break;
        case 'multiplica':
            $resultado = multiplica($operadorA, $operadorB);
            break;
        case 'divide':
            $resultado = divide($operadorA, $operadorB);
            break;
        default:
            $resultado = '';
            break;
    }

    return $resultado;    
}

$calculo = calcularResultado($operadorA, $operadorB, $operacion);

$contenido = encabezado() . 
    "<p>El resultado es: $calculo</p>".pie();
    
echo $contenido;
