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
    // Affichage du caractère suivi d'un espace avec la concaténation via le point
    echo $c . " ";

       // Condition pour arrêter la boucle à 'z'car 
       //Sans condition d'arrêt, PHP continue à incrémenter les lettres après 'Z' selon l'ordre ASCII, 
       //où 'A' est à 65, 'Z' est à 90, et ensuite 'AA' commence à 97, générant des séquences comme 'AA', 'AB', etc., de manière infinie.
    if ($c == 'Z') break;
}




