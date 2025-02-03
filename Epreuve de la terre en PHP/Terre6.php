<?php

/* Créez un programme qui affiche le résultat et le reste d’une division entre deux nombres.

Exemples d’utilisation :
$> python exo.py 5 2
résultat: 2
reste: 1


$> python exo.py 10 0
erreur.


$> python exo.py 3 5
erreur.
*/


// Vérifie si le nombre d'arguments est différent de 3 (le script + 2 arguments)
if ($argc != 3) {
    echo "Il faut passer deux arguments\n";
} else {

$premierargument = $argv[1];
$deuxiemeargument = $argv[2];

// Vérifie si les deux arguments sont des entiers valides

 if ( filter_var($premierargument, FILTER_VALIDATE_INT) === false || filter_var($deuxiemeargument, FILTER_VALIDATE_INT) === false) {
    echo "Il faut que les arguments soient deux entiers.\n";
}

// Vérifie si l'un des deux arguments est égal à 0
else if ($premierargument == 0 || $deuxiemeargument == 0){
    echo "Erreur : division par zéro non permise.\n";
}

else if ($premierargument < $deuxiemeargument ){
    echo "Erreur : le premier argument doit etre plus grand que le second\n";
}
else {

    $resultat = (int)($premierargument / $deuxiemeargument); 
 $reste = $premierargument % $deuxiemeargument ;

    echo "Resultat : ".  $resultat . "\n";
    echo "Reste:: ".  $reste."\n";

}

}





