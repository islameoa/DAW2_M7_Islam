<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 1 Islam EOA</title>
</head>
    <body>
        <?php
        	//1. Crea una pàgina que rebi un text. Mostrar si al text hi ha el mateix nombre de lletres “a” que de “b”.
       
            $frase = $_GET['text'];
            $contadora = substr_count($frase, "a");
            $contadorb = substr_count($frase, "b");
            if ($contadora == $contadorb){
                echo ("<h1>Al text hi ha $contadora a i $contadorb b, hi ha el mateix nombre de a que de b</h1>");
            } else {
                echo ("<h1>Al text hi ha $contadora a i $contadorb b, no hi ha el mateix nombre de a que de b</h1>");
            }
        ?>
    </body>
</html>

