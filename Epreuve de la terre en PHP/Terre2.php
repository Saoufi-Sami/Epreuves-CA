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
    $longueur++; // Incrémente la longueur jusqu'à ce que nous atteignions la fin de la chaîne
}

$fileName = ''; // Initialise $fileName comme chaîne vide pour commencer à y ajouter des caractères

// Étape 2 : Parcours du chemin à l'envers
for ($i = $longueur - 1; $i >= 0; $i--) {
    // Lorsque l'on rencontre un slash '/', cela indique la fin du nom du fichier, donc on arrête
    if ($chemin[$i] == '/') {
        break; 
    }

    // Étape 3 : Ajouter le caractère courant devant le contenu actuel de $fileName
    // Cela crée l'effet de "construction inversée" du nom du fichier
    $fileName = $chemin[$i] . $fileName;
    // Exemple de concaténation :
    // Si $fileName = "p" et qu'on ajoute "h", alors $fileName devient "hp".
    // À chaque itération, le caractère courant est ajouté en début de $fileName
    // ce qui inverse l'ordre des caractères par rapport à leur position dans le chemin initial.

    // Pourquoi les caractères s'inversent ?
    // Cela se produit parce qu'on utilise la concaténation "ajouter devant" avec :
    // $fileName = $chemin[$i] . $fileName;
    // Cela met chaque nouveau caractère à **gauche** du contenu actuel de $fileName, inversant ainsi l'ordre des caractères.
    // Par exemple, si $fileName = "p" et qu'on ajoute "h", $fileName devient "hp".
    // Si on faisait l'inverse (ajouter à la fin), ce serait comme ça :
    // $fileName = $fileName . $chemin[$i]; // Ce qui préserve l'ordre initial.

}

// Affichage du résultat final (nom du fichier)
echo $fileName . "\n"; // Affiche le nom du fichier récupéré

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
