public class Terre13 {
    public static void main(String[] args) {


        if (args.length == 0) {
            System.out.println("Erreur, aucun argument passé en ligne de commande");
        }

        if (args.length != 1) {
            System.out.println("Veuillez fournir un seul argument.");
            return;

        }


        String heureMinute = args[0];
        String[] heureMinuteParts = heureMinute.split(":");

        if (heureMinuteParts.length != 2) {
            System.out.println("Erreur de format");
            return;

        }


        int heure = Integer.parseInt(heureMinuteParts[0]); // heure est un int car un calcul va agir dessus

        String minuteString = heureMinuteParts[1]; // ici on a besoin que ce soit un string pour pouvoir faire notre méthode avec PM pour que tout soit caractères


        if (minuteString.endsWith("PM")) {
            if (heure != 12) {
                heure += 12;
            }
            minuteString = minuteString.substring(0, minuteString.length() - 2);
        }



        if (minuteString.endsWith("PM") || minuteString.endsWith("AM")) {
            if (heure == 12 && minuteString.equals("00AM")) {
                heure = 0; // Minuit (00:00)
                minuteString = "00";
            } else if (heure == 12 && minuteString.equals("00PM")) {
                heure = 12; // Midi (12:00)
                minuteString = "00";
            } else {
                minuteString = minuteString.substring(0, minuteString.length() - 2);
            }
        }

        int minute;  // Je suis obligé de l'initialiser à zéro en dehors du try catch

        try {

            minute = Integer.parseInt(minuteString);
        } //Maintenant le minutestring va pouvoir est stocké dans une variable minute en int
        // Car la méthode au-dessus est passé ( ligne 33),
        // maintenant nous pourrons contrôler clairement si des caractères sont passés en ligne de commande sans avoir besoin de controler minute qui n'est plus un string


        catch (NumberFormatException ex) {
            System.out.println("Vous devez saisir des  entiers pour heure et  minute");
            return;
        }




        if (heure > 23 || minute > 59) {
            System.out.println("erreur");
            return;
        }

        System.out.println( String.format("%02d", heure) + ":" + String.format("%02d", minute)); //
    }

}



//La condition if (minuteString.endsWith("PM"))est vérifiée, car la chaîne se termine par "PM".
//Dans le bloc if, 12 est ajouté à la variable heure.
//Ensuite, la sous-chaîne de minuteStringest extraite pour supprimer les deux derniers caractères "PM". Cela se fait avec la ligne minuteString = minuteString.substring(0, minuteString.length() - 2);.
//Après cela, la variable minuteStringcontient maintenant la valeur de la minute sans "PM".
//Enfin, la conversion de la valeur d' minuteStringen entier est effectuée dans le bloc try, et la variable minute est initialisée avec cette valeur.

//Si je n'utilise pas "%02d"
// %indique le début de la spécification de format.
//0indique l'utilisation des zéros de remplissage.
//2indique que le champ doit occuper au moins 2 caractères.
//dindique que la valeur est un entier
//il sera affiché 12:0 et pas 12:00 a cause de la conversion par défaut d'un nombre entier en une chaîne de caractères ne tient pas compte du format souhaité (par exemple, avec un zéro de remplissage pour les valeurs inférieures à 10).
// Par conséquent, lorsqu'il minuteest égal à 0, il est converti en la chaîne de caractères "0" sans aucun zéro de remplissage.