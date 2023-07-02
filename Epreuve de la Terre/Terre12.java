
//Créez un programme qui transforme une heure affichée en format 24h en une heure affichée en format 12h.
//
//
//Exemples d’utilisation :
//$> ruby exo.rb 23:40
//11:40PM
//
//Attention : midi et minuit.


public class Terre12 {
    public static void main(String[] args) {


        if (args.length == 0) {
            System.out.println("Erreur, aucun argument passé en ligne de commande");


        } else {
            String heureMinute = args[0];
            String[] heureMinuteParts = heureMinute.split(":");

            if (heureMinuteParts.length != 2) {
                System.out.println("Erreur de format");
                return;

            }


            int heure;
            int minute;

            try {
                heure = Integer.parseInt(heureMinuteParts[0]);
                minute = Integer.parseInt(heureMinuteParts[1]);
            } catch (NumberFormatException ex) {
                System.out.println("Vous devez saisir des  entiers pour heure et  minute");
                return;
            }

            if (heure > 23) {
                System.out.println("erreur : une journée fait 24h");
                return;}

            if (minute> 59) {
                System.out.println("erreur : les minutes ne dépasse pas 60.");
                return;}

            if (args.length != 1) {
                System.out.println("Veuillez fournir un seul argument.");
                return;
            }


            else {
                if (heure > 12) {
                    heure -= 12;
                    heureMinuteParts[0] = String.valueOf(heure);
                    heureMinute = heureMinuteParts[0] + ":" + heureMinuteParts[1];

                    System.out.println(heureMinute + " PM ");
                    return;
                }

            }

            if (heure <= 12 && minute > 00) {
                System.out.println(heureMinute + " AM ");
                return;
            }

            if (heure > 00 && heure < 12 && minute == 00) {
                System.out.println(heureMinute + " AM ");
                return;
            }


                if (heure == 00 && minute == 00) {       //Minuit
                    heure = 12;
                    heureMinuteParts[0] = String.valueOf(heure);
                    heureMinute = heureMinuteParts[0] + ":" + heureMinuteParts[1];

                    System.out.println(heureMinute + " PM ");
                    return;

                }

                if (heure == 12 && minute == 00) {    // Midi

                    heure = 12;
                    heureMinuteParts[0] = String.valueOf(heure);
                    heureMinute = heureMinuteParts[0] + ":" + heureMinuteParts[1];

                    System.out.println(heureMinute + " AM ");
                }


                }

            }
        }






// Au lieu de la fonction Split j'aurait pu utiliser  la méthode indexOf(':') pour rechercher l'index du caractère ":" dans la chaîne heureMinute.

//Dans le code donné, la chaîne heureMinute est le premier argument passé en ligne de commande,
// et cette chaîne est ensuite transformée en un tableau de deux éléments à l'aide de la fonction split(":").
//les éléments à l'intérieur de heureMinuteParts ne sont pas des arguments, mais plutôt des éléments du tableau.
