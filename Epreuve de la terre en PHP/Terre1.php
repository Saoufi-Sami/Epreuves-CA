<?php
/*
Créez un programme qui affiche l’alphabet en lettres minuscules suivi d’un retour à la ligne.

Exemples d’utilisation :
$> python exo.py
abcdefghijklmnopqrstuvwxyz
$>

Attention : votre programme devra utiliser une boucle.
*/



// Boucle pour parcourir les caractères de 'A' à 'Z'
for ($c = 'A'; $c <= 'Z'; $c++) {
    // Affichage du caractère suivi d'un espace
    echo $c . " ";

       // Condition pour arrêter la boucle à 'z'
    if ($c == 'Z') break;
}



?>
