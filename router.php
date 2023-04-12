<?php
require_once('acerca.php');
require_once('pi.php');
require_once('calculadora.php');

$action = $_REQUEST['action'];

$parametros = explode('/', $action);

switch ($parametros[0]) {
    case 'acerca':
        mostrarAcerca();
        break;
    case 'pi':
        mostrarPi();
        break;    
    default:
        mostrarCalculo($parametros[1], $parametros[2], $parametros[0]);
        # code...
        break;
}
