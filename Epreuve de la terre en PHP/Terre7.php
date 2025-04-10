<?php
/*
Créez un programme qui affiche l’inverse de la chaîne de caractères donnée en argument.

Exemples d’utilisation :
$> node exo.js “Hello world!”
!dlrow olleH

$> node exo.js “lehciM”
Michel

Attention : je compte sur vous pour gérer les potentielles erreurs d’arguments.

Fonctions interdites: 
-La fonction reverse
*/

if ( $argc != 2) {  // Si le nombre d'arguments n'est pas exactement 2 (le script + 1 chaîne), on affiche une erreur car d'ans l'exemple de harry il n'ya qu'un seul argument entre crochet “Hello world!”
      echo "Erreur : Vous devez fournir une seul chaîne en argument.\n";
} else {

    $arguments = $argv[1];  // On récupère l'argument fourni (la chaîne à inverser)
    
    $resultatsinverse = "";  // On initialise une variable vide pour stocker le résultat inverse

    // La boucle commence à l'indice du dernier caractère de la chaîne ($i = strlen($arguments) - 1) strelen compte le nombre de caractères.
    // et parcourt la chaîne de droite à gauche jusqu'à atteindre l'indice 0.
    for ($i = strlen($arguments) - 1; $i >= 0; $i--) { 
        // Tant que $i est supérieur ou égal à 0, on ajoute chaque caractère au résultat inverse.
        // $i-- décrémente $i de 1 à chaque itération, donc on passe aux caractères précédents de la chaîne.
        $resultatsinverse .= $arguments[$i];  // On concatène chaque caractère à $resultatsinverse
    }

    // On affiche la chaîne inversée et on ajoute un saut de ligne à la fin
    echo $resultatsinverse . "\n";  // Le \n permet d'ajouter un retour à la ligne après le résultat
}
