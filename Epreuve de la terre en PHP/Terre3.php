<?php
/*
Créez un programme qui affiche les arguments qu’il reçoit ligne par ligne, peu importe le nombre d’arguments.


Exemples d’utilisation :
$> ruby exo.rb je suis solide !
je
suis
solide
!
*/




if ($argc > 1) {

    for ( $i = 1; $i < $argc; $i++) {

        echo $argv[$i] . "\n";
    }
}

else {

    echo "aucun arguments";
}



?>
