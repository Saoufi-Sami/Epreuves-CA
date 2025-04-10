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
// pk on met [$longueur] en parenthese de chemin ? en gros on met l'indice de longueur a ce moment la pour a chaque iteration la boucle verifie qu'il ya toujours un indice de dispo 
// Première itération : Tant que $chemin[0] existe (/), on rajoute 1 à $longueur.
// Deuxième itération : Tant que $chemin[1] existe (T), on rajoute 1 à $longueur.
// Quand ça s'arrête ? Dès qu'on atteint un index qui n'existe pas dans $chemin, isset($chemin[$longueur]) retourne false, et la boucle s'arrête.

$longueur = 0;
while (isset($chemin[$longueur])) {
    $longueur++; // Incrémente la longueur jusqu'à ce que nous atteignions la fin de la chaîne
}

$fileName = ''; // Initialise $fileName comme chaîne vide pour commencer à y ajouter des caractères

// Étape 2 : Parcours du chemin à l'envers
// La longueur de la chaîne est 11, car elle contient 11 caractères ("/Terre2.php").
// Cependant, comme l'indexation commence à 0, l'indice du dernier caractère est 10, 
// soit $longueur - 1. C'est pourquoi on utilise $longueur - 1 pour commencer la boucle
// à partir du dernier caractère et remonter vers le début.
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
