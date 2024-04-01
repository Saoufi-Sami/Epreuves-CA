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



// Ici, on regarde si on a reçu des arguments en plus quand on a lancé le script.
if ($argc > 1) {
    // Ok, on a des arguments en plus. $argc nous dit combien au total, mais on ne compte pas le nom du script.
    // On commence à 1 parce que 0, c'est le nom de notre script, et ça, on n'a pas besoin de le répéter.
    for ($i = 1; $i < $argc; $i++) {
        // On affiche chaque truc en plus, un par ligne. $argv[$i] c'est le truc actuel qu'on regarde.
        echo $argv[$i] . "\n"; // "\n" c'est pour passer à la ligne après avoir affiché le truc.
    }
} else {
    // Si on arrive ici, c'est qu'on a pas reçu des arguments en plus. Juste le nom du script, et c'est tout.
    echo "Aucun truc supplémentaire donné.\n";
}


?>
