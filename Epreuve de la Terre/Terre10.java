//Créez un programme qui affiche la racine carrée d’un entier positif.
//
//
//Exemples d’utilisation :
//$> node exo.js 9
//3
//
//Attention : je compte sur vous pour gérer les potentielles erreurs d’arguments.

public class Terre10 {
    public static void main(String[] args) {
        if (args.length == 0) {
            System.out.println("Erreur, aucun argument passé en ligne de commande");
        } else {
            int entier;
            try {
                entier = Integer.parseInt(args[0]);
            } catch (NumberFormatException ex) {
                System.out.println("Vous devez saisir des chiffres en tant qu'arguments");
                return;
            }

            if (entier <= 0) {
                System.out.println("Erreur : l'argument est inférieur à 0");
                return;
            }

            if (args.length != 1) {
                System.out.println("Veuillez fournir un seul argument.");
                return;
            }

            double approximation = (double) entier / 2; // Approximation initiale
            double precision = 0.0001; // Précision souhaitée

            while (Math.abs(approximation * approximation - entier) > precision) {
                approximation = (approximation + entier / approximation) / 2;
            }
            System.out.printf("La racine carrée sans chiffres après la virgule  de %d est : %.0f%n", entier, approximation);
            System.out.println("La racine carrée reel de " + entier + " est : " + approximation);
        }
    }
}

