<?php
$operadorA = $_REQUEST['operadorA'];
$operadorB = $_REQUEST['operadorB'];
$operacion = $_REQUEST['operacion'];

switch ($operacion) {
    case 'suma':
        $resultado = $operadorA + $operadorB; 
        break;
    case 'resta':
        $resultado = $operadorA - $operadorB;
        break;
    case 'multiplica':
        $resultado = $operadorA * $operadorB;
        break;
    case 'divide':
        $resultado = $operadorA / $operadorB;
        break;

    default:
        $resultado = '';
        break;
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculadora</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
    <p>El resultado es: <?php echo($resultado); ?></p>
    <a href="index.php">Volver</a>
</body>

</html>