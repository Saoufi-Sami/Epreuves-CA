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
// $argc donne le nombre d'arguments passés au script, y compris le nom du script lui-même.
// Il te donne un nombre total d'arguments. Il commence toujours à 1 car c'est le  nom du script.
if ($argc > 1) {
    // Ok, on a des arguments en plus. $argc nous dit combien au total, mais on ne compte pas le nom du script.
    // On commence à 1 parce que 1, c'est le nom de notre script, et ça, on n'a pas besoin de le répéter.
    for ($i = 1; $i < $argc; $i++) {
        // On affiche chaque caractere en plus, un par ligne. $argv[$i] c'est le caractere actuel qu'on regarde.
        // $argv est un tableau qui contient les arguments passés au script donc lorsque on fai un echo de argv on recevra des valeurs et pas des chiffres comme argc.
// L'élément à l'index 0 est le nom du script, et les autres éléments (de l'index 1 à la fin) sont les arguments supplémentaires.
        echo $argv[$i] . "\n"; // "\n" c'est pour passer à la ligne après avoir affiché l'argument.
    }
} else {
    // Si on arrive ici, c'est qu'on a pas reçu d'arguments en plus. Juste le nom du script, et c'est tout.
    echo "Aucun arguments supplémentaire donné.\n";
}


?>
