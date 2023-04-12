<?php
require_once('ayudaMostrar.php');

$contenido = encabezado(). 
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

echo $contenido;
