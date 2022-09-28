<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 3 Islam EOA</title>
</head>
    <body>
        <?php
            $nom = $_GET['nom'];
            echo ("<h1>Hola $nom</h1>");
            /**EXERCICI 3*/
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];

            $res1 = 100 - $num1;
            $res2 = 100 - $num2;

            if ($num1 > 100 && $num2 > 100) {
                if (abs($res1) < abs($res2)) {
                    echo ("<h1>El número més proper a 100 és $num1</h1>");
                } else {
                    echo ("<h1>El número més proper a 100 és $num2</h1>");
                }
            } else if ($num1 > 100) {
                if (abs($res1) < $res2) {
                    echo ("<h1>El número més proper a 100 és $num1</h1>");
                } else {
                    echo ("<h1>El número més proper a 100 és $num2</h1>");
                }
            } else if($num2 > 100) {
                if ($res1 < abs($res2)) {
                    echo ("<h1>El número més proper a 100 és $num1</h1>");
                } else {
                    echo ("<h1>El número més proper a 100 és $num2</h1>");
                }
            } else {
                if ($res1 < $res2) {
                    echo ("<h1>El número més proper a 100 és $num1</h1>");
                } else {
                    echo ("<h1>El número més proper a 100 és $num2</h1>");
                }
            }
        ?>
    </body>
</html>