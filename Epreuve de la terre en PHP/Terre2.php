<?php
/*
Créez un programme qui affiche son nom de fichier.

Exemples d’utilisation :
$> node exo.js
exo.js

$> node crevette.js
crevette.js

*/

// Supposons que le chemin soit défini en dur pour cet exemple. Dans un cas réel, on utiliserait $_SERVER['SCRIPT_NAME'].
$chemin = '/Terre2.php';

// Cette boucle compte tous les caractères dans $chemin, en partant du premier (le slash '/') jusqu'au dernier ('p'). 
// En gros, tant que dans chemin tu trouves un caractère, rajoute 1 à longueur. Cela inclut tout : lettres, chiffres, points, et slashs.
$longueur = 0;
while (isset($chemin[$longueur])) {
    $longueur++;
}

// Initialise la variable pour stocker le nom du fichier. Ce nom est construit en parcourant le chemin à l'envers.
$fileName = '';

// Parcourt la chaîne $chemin en sens inverse, à partir du dernier caractère.
for ($i = $longueur - 1; $i >= 0; $i--) { 
    if($chemin[$i] == '/') {
        // Si un slash '/' est trouvé, cela indique le début du chemin et donc la fin du nom du fichier. On sort de la boucle.
        break;
    }
    // a chaque boucle Ajoute le caractère courant au début de $fileName. Cela permet de reconstruire le nom du fichier dans l'ordre correct.
    $fileName = $chemin[$i] . $fileName;
}

// Affiche le nom du fichier reconstruit avec un saut de ligne pour eviter d'avoir un % dans le terminal lors de l'affichage.
echo $fileName . "\n";

// "longueur - 1" est utilisé pour obtenir l'indice du dernier caractère de la chaîne, et pas le numéro du caractère lui-même.
// Cela permet d'accéder au dernier caractère valide de la chaîne, car les indices commencent à 0.

/*
Quand un 'break' est utilisé dans la boucle, cela arrête immédiatement la boucle et les instructions après la boucle sont exécutées.
Toute instruction avant le 'break' dans la même itération est exécutée. Cela signifie que le caractère à l'indice où le 'break' est exécuté
(contribuant à la construction de $fileName) est pris en compte avant de sortir de la boucle.
*/

/*
Astuce : Si le chemin n'était pas à définir en dur, on pourrait utiliser $_SERVER['SCRIPT_NAME'] pour obtenir dynamiquement
le chemin du fichier exécuté. Cela permettrait au script d'être plus flexible et utilisable pour différents fichiers.
*/

?>
