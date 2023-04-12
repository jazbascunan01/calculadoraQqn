<?php

function encabezado()
{
    $encabezado = "<!DOCTYPE html>
        <html>
        <head>
            <meta charset='utf-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <title>Calculadora</title>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
        </head>
        <body>
            <h1>Calculadora</h1>";

    return $encabezado;
}

function pie()
{
    $pie = "<a href=\"index.php\">Volver</a> 
        </body>
        </html>";

    return $pie;
}

function home()
{
    $contenido = encabezado() .
        "<ul>
            <li><a href=\"pi.php\">Pi</a></li>
            <li><a href=\"acerca.php\">Acerca</a></li>
        </ul> 
        <form method=\"get\" action=\"calculadora.php\">
            <label>A:</label><input required type=\"text\" name=\"operadorA\"> 
            <label>B:</label><input required type=\"text\" name=\"operadorB\"> 
            <select name=\"operacion\">
                <option value=\"suma\">Suma</option>
                <option value=\"resta\">Resta</option>
                <option value=\"divide\">Divide</option>
                <option value=\"multiplica\">Multiplica</option>
            </select>
    
            <button type=\"submit\">Enviar</button>
        </form>
    </body>
    </html>";

    echo ($contenido);
}
