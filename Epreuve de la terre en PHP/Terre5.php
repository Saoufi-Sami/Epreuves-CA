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


// Vérifie si aucun argument n'est passé (seulement le nom du script en gros si il ya un agrument c'est seulement le script)
if ($argc == 1) {
    echo "Tu ne me la mettras pas à l’envers il n’y a rien.\n";
} 
// Vérifie si le nombre total d'arguments n'est pas exactement 2 en gros si c'est 2 c que ya un le script + 1 argument donc c'est ok  mais la on regarde si c different de 2 donc le scprit + largument c'est que tu en a mis + par ex 3 ou 4.
else if ($argc != 2) {
    echo "Il faut passer un seul argument de type entier .\n";
} 

// la premiere couche c'est is_numeric() qui vérifie si la valeur est un nombre valide (entier ou flottant),
// donc elle accepte des chiffres avec des virgules comme "6.5", "-3.2" mais aussi des chaînes numériques comme "123" mais pa de chaines de characteres.

// la deuxieme couche c'est filter_var() avec FILTER_VALIDATE_INT qui va encore plus filtrer et  permet de vérifier que la valeur est **un entier valide**
// Cela signifie qu'il doit s'agir d'un nombre entier sans virgule ni caractère non numérique. pour la filter var on voi bien dans l'explication de cette fonction qu'il faut lui passer un filtre et ici le filtre c'est le 
//FILTER_VALIDATE_INT
//En gros, on a une double protection :
//is_numeric() : Vérifie si c'est un nombre.
// filter_var(..., FILTER_VALIDATE_INT) : Vérifie si c'est un entier pur.
// Si une des deux conditions échoue, on affiche l'erreur. 
//is_numeric() : C'est la première porte. Elle laisse passer tous les nombres, qu'ils soient entiers (comme 5) ou décimaux (comme 3.14), mais elle rejette les caractères non numériques (comme "abc" ou "xyz").
//filter_var($argv[1], FILTER_VALIDATE_INT) : C'est la deuxième porte. Elle rejette les nombres décimaux (comme 3.14) et ne laisse passer que les entiers (comme 5 ou -2). Donc, cette porte va s'assurer que seul un entier valide passe, rejetant par exemple 3.14 ou 5,5.

else if (!is_numeric($argv[1]) || filter_var($argv[1], FILTER_VALIDATE_INT) === false) {
    echo "Tu ne me la mettras pas à l’envers  je veux un entier .\n";
} 
else {
    // Convertir l'argument en entier
    $nombre = (int)$argv[1];
    
    // Vérifier si le nombre est pair ou impair
 // Le modulo (%) permet de diviser le nombre par 2 et de vérifier le reste
if ($nombre % 2 == 0) { // Si le reste est égal à 0, le nombre est pair
    echo "pair\n"; // Affiche "pair"
} else { // Si le reste n'est pas 0, le nombre est impair
    echo "impair\n"; // Affiche "impair"
}
}
?>
