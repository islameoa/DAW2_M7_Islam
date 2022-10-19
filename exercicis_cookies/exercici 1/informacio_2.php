<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info 2</title>
</head>
<body>
    <?php
        $usuari = $_COOKIE['user'];
        echo("<h1>Benvingut $usuari</h1>");
    ?>
    <h3>Pàgina d'informació 2</h3>
    <br>
    <a href="login.html">Click aquí per tornar al login</a>
</body>
</html>
