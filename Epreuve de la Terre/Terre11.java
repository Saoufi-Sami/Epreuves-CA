
//Créez un programme qui affiche si un nombre est premier ou pas.
//
//
//Exemples d’utilisation :
//$> node exo.js 5
//Oui, 5 est un nombre premier.
//
//$> node exo.js 6
//Non, 6 n’est pas un nombre premier.
//
//Attention : 0 et 1 ne sont pas des nombres premiers. Gérez les erreurs d’arguments.


public class Terre11 {
    public static void main(String[] args) {

        if (args.length == 0) {
            System.out.println("Erreur, aucun argument passé en ligne de commande");
        } else {
            int entier;
            try {
                entier = Integer.parseInt(args[0]);
            } catch (NumberFormatException ex) {
                System.out.println("Vous devez saisir des chiffres entiers en tant qu'arguments");
                return;
            }

            if (args.length != 1) {
                System.out.println("Veuillez fournir un seul argument.");
                return;
            }


            boolean Premier = true;

            if (entier <= 1) {
                Premier = false;
            }

            else {

                for (int i = 2; i <= Math.sqrt(entier); i++) {
                    if (entier % i == 0) {
                        Premier = false;
                        break;
                    }
                }
            }

            if (Premier) { // ce qui veut dire ==true
                System.out.println( entier +" est un nombre premier.");
            } else {
                System.out.println( entier +" n'est pas un nombre premier.");
            }



            }

        }

    }












// un nombre premier possède toujours deux diviseurs, c'est pour cela que 0 et 1 ne sont pas des nombres premiers.
//C'est un nombre que l'on peut diviser par un et par lui-même.
//Le contraire d'un nombre premier c'est un nombre composé, ils peuvent être divisé en plusieurs parties égaux. Exemple 9 ÷ 3 cela donne 3 partie de 3.


//Utiliser la fonction Math.sqrt(entier) Pour calculer la racine carrée de l'entier, j'ai déjà fait cette opération sans utiliser la fonction dans l'exercice précédent.
// Calculer la racine carrée d'un nombre.