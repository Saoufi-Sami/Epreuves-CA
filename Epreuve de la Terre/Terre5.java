public class Terre5 {
    public static void main(String[] args) {



        if (args.length == 0) {
            System.out.println("Tu ne me la feras pas à l'envers car il n'ya aucun arguements passé en ldc");

        } else {

            try {

                String argument = args[0];
                int Ent = Integer.parseInt(args[0]);
                if (Ent % 2 == 0) {
                    System.out.println("pair");
                } else
                    System.out.println("impair");

            } catch (NumberFormatException e) {
                System.out.println("Tu ne me la feras pas à l'envers ce n'est pas un entier");
            }


            }

        }
    }


    //je commence avec une condition if (args.length == 0) au début  pour vérifier si aucun argument n'est passé en ligne de commande.
// Si la longueur de args est égale à 0, cela signifie qu'il n'y a pas d'arguments,
// donc nous affichons le message "Tu ne me la feras pas à l'envers car il n'ya aucun arguements passé en ldc."



////j'ai récupéré l'argument donné en ligne de commande avec  String argument = args[0]



//lorsque vous passez un argument en ligne de commande, il est traité comme une chaîne de caractères, quelle que soit sa valeur Que ce soit un chiffre ou autre, donc il faut le convertir.
//j'ai utilisé la méthode Integer.parseInt() Qui me permet de convertir ma chaîne de caractère en entier de type int .
//Elle prend en argument la chaîne de caractères que vous souhaitez convertir et renvoie l'entier correspondant.Ici, l'arguments est args[0] donc le chiffre que moi j'ai ecri exemple = 2



//pour comprendre la condition entier % 2 == 0 :
//Si le reste de la division de entier par 2 est égal à 0, cela signifie que entier est divisible par 2 sans laisser de reste. Donc entier est pair.
//Si le reste de la division de entier par 2 n'est pas égal à 0, cela signifie qu'il y a un reste, donc entier est impair.



//NumberFormatException est une exception en Java qui est levée lorsqu'une chaîne de caractères ne peut pas être convertie en un nombre valide.
// Par exemple, si vous essayez de convertir la chaîne "abc" en un entier, cela générera une NumberFormatException.




//Le bloc try contient le code où nous effectuons la conversion de la chaîne en entier à l'aide de Integer.parseInt(argument). Si la conversion réussit, le code à l'intérieur du bloc try continue normalement.
//
//Cependant, si la conversion échoue et génère une NumberFormatException, le flux d'exécution est transféré au bloc catch. Dans le bloc catch,
// nous pouvons spécifier le code à exécuter lorsque cette exception est attrapée. Dans notre exemple, nous affichons le message "Tu ne me la feras pas à l'envers"
//
//En utilisant cette structure try-catch, nous pouvons gérer les cas où la conversion de la chaîne en entier échoue en attrapant spécifiquement la NumberFormatException.
// Cela nous permet de détecter et de réagir aux situations où l'argument passé n'est pas un entier valide.