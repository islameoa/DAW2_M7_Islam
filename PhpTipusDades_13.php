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
        	// Crear un programa que pida al usuario un código de barras. Si el número de dígitos es inferior a 8, se asumirá que es un código
            // EAN-8; si es superior a 8 pero inferior a 13, se asumirá EAN-13. En ambos casos, se completarán el resto de dígitos colocando ceros a la izquierda.
            // El programa deberá indicar si el código de barras es correcto o no lo es, y además, si se trata de EAN-13 indicará el país al que pertenece el código.    
            
            $ean = $_GET['ean'];
            
            if (strlen($ean) <= 8) {
                $eandef = str_pad($ean, 8, "0", STR_PAD_LEFT);
                $total = 0;
                for ($i=6; $i >= 0; $i--) {
                    $actual = substr($eandef, $i, 1);
                    if ($i%2 == 0) {
                        $actualint = intval($actual) * 3;
                        $total += $actualint;
                    } else {
                        $actualint = intval($actual);
                        $total += $actualint;
                    }
                }
                if (($total + intval(substr($eandef, 7, 1))) % 10 == 0){
                    echo "EAN correcte";
                } else {
                    echo "EAN incorrecte";
                }
            } else if (strlen($ean) <= 13) {
                $eandef = str_pad($ean, 13, "0", STR_PAD_LEFT);
                $total = 0;
                for ($i=11; $i >= 0; $i--) {
                    $actual = substr($eandef, $i, 1);
                    if ($i%2 == 0) {
                        $actualint = intval($actual);
                        $total += $actualint;
                    } else {
                        $actualint = intval($actual) * 3;
                        $total += $actualint;
                    }
                }
	
		$pais = "";
                if (substr($eandef, 0, 1) == "0") {
                    $pais = "(EEUU)";
                }
                if (substr($eandef, 0, 3) == "380") {
                    $pais = "(Bulgaria)";
                }
                if (substr($eandef, 0, 2) == "50") {
                    $pais = "(Inglaterra)";
                }
                if (substr($eandef, 0, 3) == "539") {
                    $pais = "(Irlanda)";
                }
                if (substr($eandef, 0, 3) == "560") {
                    $pais = "(Portugal)";
                }
                if (substr($eandef, 0, 2) == "70") {
                    $pais = "(Noruega)";
                }

                if (($total + intval(substr($eandef, 12, 1))) % 10 == 0){
                    echo "EAN correcte $pais";
                } else {
                    echo "EAN incorrecte $pais";
                }
            } else {
                echo("Número massa llarg");
            }
        ?>
    </body>
</html>

