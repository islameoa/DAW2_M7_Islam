<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Backend</title>
</head>
    <body>
        <?php
            $usuari = $_POST['user'];
            setcookie('user', $usuari);
            if ($usuari == "pwd") {
                echo "<a href=\"informacio_1.php?user={$usuari}\">Anar a informació 1</a>";
                echo("<br>");
                echo("<a href=\"informacio_2.php?user={$usuari}\">Anar a informació 2</a>");
            } else {
                header("Location: http://localhost/login.html", TRUE, 301);
                exit();
            }
        ?>
    </body>
</html>
