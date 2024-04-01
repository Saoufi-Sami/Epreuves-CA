<?php
/*
Créez un programme qui affiche l’alphabet à partir de la lettre donnée en argument en lettres minuscules suivi d’un retour à la ligne.


Exemples d’utilisation :
$> python exo.py n
nopqrstuvwxyz
$>



Attention : votre programme devra utiliser une boucle.

*/





// D'abord, on vérifie si quelqu'un a donné un argument quand ils ont lancé notre programme.
if (isset($argv[1])) {
    // Si oui, on prend cet argument et on le met dans une boîte qu'on appelle $argument.
    $argument = $argv[1];

    // Maintenant, on regarde si notre lettre est bien entre 'a' et 'z' (donc, une petite lettre).
    // Si $argument est plus grand ou égal à 'a' ET plus petit ou égal à 'z', alors c'est bon, c'est une petite lettre.
    if ($argument >= 'a' && $argument <= 'z') {
        // Super, c'est une petite lettre. Maintenant, on va montrer toutes les lettres depuis celle-là jusqu'à 'z'.
        for ($i = $argument; $i <= 'z'; $i++) {
            // On montre la lettre actuelle.
            echo $i;
            // Mais, si on est arrivé à 'z', on doit faire deux choses :
            if ($i == 'z') {
                // Premièrement, on va à la ligne pour que tout soit propre.
                echo "\n";
                // Deuxièmement, on arrête la boucle parce qu'on a fini notre tâche.
                break; // C'est comme dire "stop, on a terminé ici."
            }
        }
    } else {
        // Si l'argument n'est pas une petite lettre, on dit gentiment à l'utilisateur de réessayer avec une petite lettre.
        echo "Veuillez fournir une lettre minuscule comme argument.\n";
    }
} else {
    // Si l'utilisateur a oublié de donner un argument, on le lui rappelle.
    echo "Aucun argument fourni.\n";
}



  

