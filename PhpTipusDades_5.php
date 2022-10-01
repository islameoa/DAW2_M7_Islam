<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2 Islam EOA</title>
</head>
    <body>
        <?php
        	//8. Demanar a l’usuari 2 números que representaran 2 anys (per exemple, 2000 i 2050). 
            //Buscar el primer any d’aquest rang que el dia 1 de gener sigui dimecres o si no n’hi ha cap, indicar-ho.      
            $n1 = $_GET['n1'];
            $n2 = $_GET['n2'];
            $encontrado = false;

            if ($n1 < $n2) {
                for ($i=$n1; $i <= $n2; $i++) { 
                    $data = strtotime("$i-01-01");
                    $dia = date("l", $data);
                    if ($dia === "Wednesday") {
                        $any = date("Y", $data) . "<br>";
                        $encontrado = true;
                        echo("El primer any d'aquest interval que té Dimecres 1 de gener és $any");
                        break;
                    }
                }
            } else {
                for ($i=$n2; $i <= $n1; $i++) { 
                    $data = strtotime("$i-01-01");
                    $dia = date("l", $data);
                    if ($dia === "Wednesday") {
                        $any = date("Y", $data) . "<br>";
                        $encontrado = true;
                        echo("El primer any d'aquest interval que té Dimecres 1 de gener és $any");
                        break;
                    }
                }
            }

            if (!$encontrado) {
                echo("Cap any d'aquest interval té Dimecres 1 de gener");
            }
        ?>
    </body>
</html>
