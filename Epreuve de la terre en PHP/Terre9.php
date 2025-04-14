<?php

//#Créez un programme qui affiche le résultat d’une puissance.

//#L’exposant ne pourra pas être négatif.

//#Exemples d’utilisation :

//#$> node exo.js 2 3
//#8

//#Attention : je compte sur vous pour gérer les potentielles erreurs d’arguments.


if ($argc != 3) {
    // On vérifie qu'on a exactement 2 arguments (base et exposant)
    echo "Erreur : Vous devez fournir deux arguments.\n";
    exit;
} else if (!is_numeric($argv[1]) || !is_numeric($argv[2])) {
    // Si l'un des deux n'est pas un chiffre, on affiche une erreur
    echo "Erreur : Vous devez fournir deux chiffres.\n";
    exit;
} else {
    // On récupère les valeurs
    $chiffre = $argv[1];
    $exposant = $argv[2];

    // Si l'exposant est négatif, on refuse (car c’est interdit dans l'exo)
    if ($exposant < 0) {
        echo "Erreur : L'exposant doit être supérieur ou égal à 0.\n";
        exit;
    }

    // Calcul manuel de la puissance (chiffre^exposant)
    // On initialise le résultat à 1 (car c’est la base neutre pour une multiplication).
    // Ensuite, on fait une boucle qui se répète autant de fois que l’exposant.
    // À chaque tour, on multiplie le résultat par le chiffre de départ.
    // Exemple : pour 2^3 → 1 × 2 × 2 × 2 = 8

    $resultat = 1;
    for ($nbiteration = 1; $nbiteration <= $exposant; $nbiteration++) {
        $resultat *= $chiffre;
        // En fait, on multiplie $resultat par $chiffre autant de fois que la valeur de l'exposant en sachant que a chaque iteration nous ajoutons 1 a resultat.
        // À chaque tour de boucle, $resultat garde le résultat précédent et le multiplie encore une fois par $chiffre.
        // On commence avec $resultat = 1, donc il prend la bonne valeur dès la première multiplication.
    }
}

// On affiche le résultat final
echo $resultat . "\n";
