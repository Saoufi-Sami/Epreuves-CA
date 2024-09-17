<?php
/*
Créez un programme qui permet de déterminer si l’argument donné est un entier pair ou impair..


Exemples d’utilisation :
$> ruby exo.rb 2
pair

$> ruby exo.rb 5
impair


$> ruby exo.rb Bonjour
Tu ne me la mettras pas à l’envers.

$> ruby exo.rb
Tu ne me la mettras pas à l’envers.


Attention : gérez aussi les entiers négatifs.

Fonctions interdites: 
-En Ruby: even? et odd?
*/


// Vérifie si aucun argument n'est passé (seulement le nom du script)
if ($argc == 1) {
    echo "Tu ne me la mettras pas à l’envers il n’y a rien.\n";
} 
// Vérifie si le nombre total d'arguments n'est pas exactement 2
else if ($argc != 2) {
    echo "Il faut passer un seul argument de type entier .\n";
} 
// Vérifie si l'argument n'est pas un entier valide
else if (!is_numeric($argv[1]) || filter_var($argv[1], FILTER_VALIDATE_INT) === false) {
    echo "Tu ne me la mettras pas à l’envers avec ton mot je veux un chiffre.\n";
} 
else {
    // Convertir l'argument en entier
    $nombre = (int)$argv[1];
    
    // Vérifier si le nombre est pair ou impair
    if ($nombre % 2 == 0) {
        echo "pair\n";
    } else {
        echo "impair\n";
    }
}
?>
