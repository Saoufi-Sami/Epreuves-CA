
//Créez un programme qui affiche le nombre de caractères d’une chaîne de caractères passée en argument.


        //Exemples d’utilisation :
        //$> python exo.py “Hello world!”
        //12


        //$> python exo.py
        //erreur.


        //$> python exo.py “Bonjour” “Aurevoir”
        //erreur.

        //$> python exo.py 10
        //erreur.






public class Terre8 {
    public static void main(String[] args) {

        if (args.length == 0) {
            System.out.println("Erreur.");

        } else if (args.length > 1) {

            System.out.println("Erreur.");

        } else {

            String arguments = args[0];

            if (arguments.matches("\\d+")) {
                System.out.println("Erreur.");

            } else {

                char[] chars = arguments.toCharArray();
                System.out.println(chars.length);
            }
        }
    }
}



//On Récupére l'argument en ligne de commande avec String arguments = args[0]
// et de ce string  on va ramener la méthode arguments.matches("\\d+")


//nous avons utilisé une expression régulière (\\d+) pour vérifier si l'argument est un chiffre entier. La méthode matches()
// est utilisée pour effectuer la correspondance entre l'argument et l'expression régulière.
//Si l'argument correspond à l'expression régulière \\d+, cela signifie qu'il est composé uniquement de chiffres et
// donc qu'il est considéré comme un chiffre entier


// on utilise char[] chars = arguments.toCharArray(); Pour transformer une chaîne de caractère en plusieurs caractères, comme ça, lorsque nous ferons (chars.length), nous pourrons  les compter