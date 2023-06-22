public class Terre7 {
    public static void main(String[] args) {

        if (args.length == 0) {
            System.out.println("Aucun argument fourni");

        } else {

            for (int j = 0; j < args.length; j++) {
                String argumentents = args[j];

                char[] chars = argumentents.toCharArray();


                String resultatinversé = "";

                for (int i = chars.length - 1; i >= 0; i--) {

                    resultatinversé += chars[i];


                }

                System.out.println(resultatinversé);


            }
        }
    }

}


//La ligne char[] chars = argument1.toCharArray();      convertit la chaîne de caractères argument1 en un tableau de caractères.
// Cela permet de manipuler les caractères individuellement.


//args.length sert a reporter la longueur du tableau args, c'est-à-dire le nombre d'éléments (ou de caractères) qu'il contient.

////Lorsque nous utilisons chars.length - 1, cela signifie que nous soustrayons 1 de la longueur totale de la chaîne pour obtenir l'indice du dernier caractère. Dans le cas de "Hello World", la longueur est de 11,
// donc chars.length - 1est égal à 10, qui est l'indice du dernier caractère "d".


//la concaténation de chaînes à l'aide de l'opérateur += peut être inefficace en termes de performances,
// car une nouvelle instance de String est créée à chaque concaténation.
// Si vous devez effectuer de nombreuses concaténations, il est recommandé d'utiliser une classe telle que StringBuilder pour des performances optimales.
