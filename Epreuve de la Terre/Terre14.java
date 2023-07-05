//Créez un programme qui prend en paramètre trois entiers et affiche la valeur du milieu.
//
//
//Exemples d’utilisation :
//$> ruby exo.rb 11 40 34
//34
//
//$> ruby exo.rb 2 1 3
//2
//
//$> ruby exo.rb 2 2 2
//erreur.




public class Terre14 {
    public static void main(String[] args) {


        if (args.length == 0) {
            System.out.println("Erreur, aucun argument passé en ligne de commande");
        return; }

        if (args.length != 3) {
            System.out.println("Veuillez fournir trois arguments.");
            return;

        }

        int entier1;
        int entier2;
        int entier3;

        try {
            entier1 = Integer.parseInt(args[0]);
            entier2 = Integer.parseInt(args[1]);
            entier3 = Integer.parseInt(args[2]);
        }
        catch (NumberFormatException ex) {
            System.out.println("Vous devez saisir des  entiers en ligne de commande");
            return;

        }

        if (((entier1 > entier2) && (entier1 < entier3)) || ((entier1 > entier3) && (entier1 < entier2))) {
            System.out.println(entier1);

        }

        else if (((entier2 > entier3) && (entier2 < entier1)) || ((entier2 > entier1) && (entier2 < entier3))) {

            System.out.println(entier2);

        }

        else if (((entier3 > entier2) && (entier3 < entier1)) || ((entier3 > entier1) && (entier3 < entier2))) {

            System.out.println(entier3);
        }

        else if (((entier1 == entier2) && (entier2 == entier3)) || (entier1 == entier2) || (entier1 == entier3) || (entier2 == entier3)) {

            System.out.println("erreur.");

        }


    }
}