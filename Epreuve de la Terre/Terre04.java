

public class Terre4 {
    public static void main(String[] args)


    {

        String argument = args[0];

        for (char i = argument.charAt(0); i<='z'; i++)

        {
            System.out.print(i);
    }
        System.out.println();

    }
}

//j'ai récupéré l'argument donné en ligne de commande avec  String argument = args[0]
// j'ai déclaré la variable i en tant que type char pour itérer à travers les caractères de l'alphabet.
// j'ai Utilisé argument.charAt(0) pour obtenir le premier caractère de l'argument passé en ligne de commande.