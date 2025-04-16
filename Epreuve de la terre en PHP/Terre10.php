<?php

//Créez un programme qui affiche la racine carrée d’un entier positif.
//
//
//Exemples d’utilisation :
//$> node exo.js 9
//3
//
//Attention : je compte sur vous pour gérer les potentielles erreurs d’arguments.



if ($argc != 2) {
    // On vérifie qu'on a exactement 1 argument (le nombre dont on veut la racine carrée)
    echo "Erreur : Vous devez fournir un seul argument.\n";
    exit;
} else if (!is_numeric($argv[1])) {
    // Si l'utilisateur n'a pas donné un chiffre (ex : "abc" ou "bonjour"), on arrête.
    echo "Erreur : Vous devez fournir un chiffre.\n";
    exit;
} else if ($argv[1] <= 0) {
    // Si le chiffre est nul ou négatif, ce n’est pas autorisé (racine carrée d’un négatif est interdite ici)
    echo "Erreur : Vous devez fournir un chiffre supérieur à 0.\n";
    exit;
} else {
    // On récupère la valeur entrée par l'utilisateur
    $entier = $argv[1];

    // On initialise $racine à null pour dire : "je n’ai encore rien trouvé"
    // null = vide, inconnu volontairement → on attend de voir si on trouve quelque chose
    $racine = null;

    // On va tester tous les entiers depuis 1 jusqu’à $entier
    // pour voir s’il en existe un qui, multiplié par lui-même, donne exactement $entier
    for ($i = 1; $i <= $entier; $i++) {
        if ($i * $i == $entier) {
            // Si on trouve que $i * $i = $entier, alors $i est la racine carrée entière qu’on cherche
            $racine = $i;

            // On n’a plus besoin de continuer la boucle, on a trouvé la bonne valeur
            break;
        }
    }
}

// Ici on sort de la boucle
// On regarde si $racine a changé depuis "null"
if ($racine !== null) {
    // Si $racine a été modifiée, ça veut dire qu’on a trouvé une racine entière
    echo $racine .  "\n";
} else {
    // Si $racine est restée à null, ça veut dire qu’on n’a trouvé aucune racine exacte
    echo "Pas de racine entière\n";
}
