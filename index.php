<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculadora</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <ul>
        <li><a href="pi.php">Pi</a></li>
        <li><a href="acerca.php">Acerca</a></li>
    </ul> 
    <form method="post" action="calculadora.php">
        <label>A:</label><input type="text" name="operadorA"> 
        <label>B:</label><input type="text" name="operadorB"> 
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="divide">Divide</option>
            <option value="multiplica">Multiplica</option>
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>