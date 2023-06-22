public class Terre6 {
    public static void main(String[] args) {


        int dividend = Integer.parseInt(args[0]);
        int divisive = Integer.parseInt(args[1]);

        if (divisive == 0) {
            System.out.println("erreur.");

        }

        else {
            int result = dividend / divisive;
            int rest = dividend % divisive;

            if (dividend / divisive < 1)
            {
                System.out.println("erreur.");
            }

            else {
                System.out.println("Resultat = " + result + "\n" + "Reste = " + rest);
            }


        }

    }
}

//j'ai récupéré l'argument donné en ligne de commande avec   args[0] et args[1].

// j'ai converti la chaine de charactere des arguments en entier avec Integer.parseInt.

// les operations tel que la division se fait dans le code et pas avec les arguments en ldc.

// J'ai créé deux variables contenant le résultat, et le reste dans le cas où l'opération le permet.

// Si la division du dividende par le diviseur est plus petite ou égal à un et bien il faut afficher le message d'erreur

// Sinon, afficher le résultat et le reste avec un saut a la lignz entre eux \n

// J'ai inséré  int result = dividend / divisive
//            int rest = dividend % divisive; dans le bloc else et pas dans le bloc if divise 0 Car sinon il le compté comme une exception et il faisait le calcul,
//            mais on ne peut pas calculé avec 0. Et du coup ça me donner une erreur.