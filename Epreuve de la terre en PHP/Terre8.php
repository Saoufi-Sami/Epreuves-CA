<?php
//Créez un programme qui affiche le nombre de caractères d’une chaîne de caractères passée en argument.


//Exemples d’utilisation :
//$> python exo.py “Hello world!”
//12


//$> python exo.py
//erreur.


//$> python exo.py “Bonjour” “Aurevoir”
//erreur.

//$> python exo.py 10
//erreur.





// Vérifie s'il y a exactement 1 argument en plus du nom du script (donc 2 au total avec $argc) donc içi on couvre deux erreurs le fait d'avoir 0 arguement et d'en avois plus de 1.
if ($argc != 2) {
    // Si ce n'est pas le cas, on affiche une erreur.
    echo "Erreur : Vous devez fournir une seule chaîne en argument.\n";
    // Et on arrête le script ici pour eviter que sa crash en continuan le script car malgres l'erreur sans exit le script va conitnuer et agrv1 ne va rien trouver et donc va faire crasher.
    exit;
}

// Si on a bien 2 arguments, on vérifie si le deuxième (l’argument passé) est un nombre.
else if (is_numeric($argv[1])) {
    // Si c'est un nombre, on refuse et on affiche une erreur.
    echo "Erreur : Vous devez fournir une chaîne en argument et pas des chiffres.\n";
    exit;
} else {
    // Si les deux conditions précédentes sont bonnes,
    // on récupère l’argument dans une variable.
    $arguments = $argv[1];

    // On initialise la variable $nombre (pas nécessaire, mais tu l’as fait comme ça).
    $nombre = "";

    // On stocke dans $nombre la longueur de la chaîne de caractères passée en argument.
    $nombre = strlen($arguments);
}

// Enfin, on affiche le nombre de caractères à l’écran.
echo $nombre . "\n";
