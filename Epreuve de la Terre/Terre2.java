public class Terre2 {
    public static void main(String[] args) {
        String fileName;
        if (args.length > 0) {
            fileName = args[0];
        } else {
            fileName = "aucun argument";
        }
        System.out.println( fileName);
    }
}


//Ici, pour ne pas utiliser de fonction et ne pas mettre le nom de mon fichier source en dur et bien, je vais passer le nom de ce fichier source en argument
// lorsque je suis en ligne de commande