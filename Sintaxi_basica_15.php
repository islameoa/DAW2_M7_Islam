<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 15 Islam EOA</title>
</head>
    <body>
        <?php
            $nom = $_GET['nom'];
            echo ("<h1>Hola $nom</h1>");
            /**EXERCICI 3 */
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];

            echo("<table border =\"1\">");
            for ($i=1; $i <= $num1; $i++) { 
                echo("<tr></tr>");
                for ($j=1; $j <= $num2; $j++) { 
                    echo("<td>$i.$j</td>");
                }
            }
            echo("</table>")
        ?>
    </body>
</html>