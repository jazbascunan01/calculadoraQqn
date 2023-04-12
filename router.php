<?php
require_once('acerca.php');
require_once('pi.php');
require_once('calculadora.php');
require_once('ayudaMostrar.php');

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

if (!empty($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

switch ($action) {
    case 'home':
        home();
        break;    
    case 'acerca':
        mostrarAcerca();
        break;
    case 'pi':
        mostrarPi();
        break;    
    default: {
            $parametros = explode('/', $action);
            mostrarCalculo($parametros[1], $parametros[2], $parametros[0]);
        # code...
        }
        break;
}
