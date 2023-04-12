<?php
require_once('util/acerca.php');
require_once('util/pi.php');
require_once('util/calculadora.php');
require_once('util/ayudaMostrar.php');

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
