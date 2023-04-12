<?php
require_once('ayudaMostrar.php');

$contenido = '';
if (isset($_REQUEST['nombre'])) {
    $nombre = $_REQUEST['nombre'];
    $contenido = "<p>Por: $nombre</p>";
}

$contenido = encabezado() .
        $contenido.
        "<p>TUDAI - QQn 2023</p>".pie();

echo $contenido;