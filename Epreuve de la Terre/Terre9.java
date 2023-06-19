//#Créez un programme qui affiche le résultat d’une puissance.
        //#L’exposant ne pourra pas être négatif.
        //#Exemples d’utilisation :
        //#$> node exo.js 2 3
        //#8
        //#Attention : je compte sur vous pour gérer les potentielles erreurs d’arguments.







public class Terre9 {
    public static void main(String[] args) {

        if (args.length == 0) {
            System.out.println("  Vous n'avez pas saisi d'arguments ");
        }

        else {
            int chiffre ;
            int exposant ;

            try {
                chiffre = Integer.parseInt(args[0]);
                exposant = Integer.parseInt(args[1]);
            }

            catch (NumberFormatException ex) {
                System.out.println("Vous devez saisir des chiffres en tant qu'arguments");
                return;
            }


            if (exposant <= 0) {
                System.out.println("Attention, l'exposant doit être positif et supérieur à 0");
            }


            else {
                int resultat = 1;
                for (int nbIteration = 1; nbIteration <= exposant; nbIteration++) {
                    resultat *= chiffre;
                }
                System.out.println(resultat);
            }
        }
    }
}