<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 17 Islam EOA</title>
</head>
    <body>
        <?php
            $nom = $_GET['nom'];
            echo ("<h1>Hola $nom</h1>");
            /**EXERCICI 3 */
            $base = $_GET['base'];
            $altura = ceil($base/2);

            $pintados = 1;
            $blancos = 0;


            echo("<table>");
            for ($i=0; $i < $altura; $i++) { 
                echo("<tr>");
                $blancos = ($base - $pintados)/2;
                for ($j=0; $j < $blancos; $j++) { 
                    echo("<td style=\"width:40px; height:40px\"></td>");
                }
                for ($k=0; $k < $pintados; $k++) { 
                    echo("<td style=\"background-color:red; width:40px; height:40px\"></td>");
                }
                $pintados +=2;
                echo("</tr>");
            }
            echo("</table>")
        ?>
    </body>
</html>