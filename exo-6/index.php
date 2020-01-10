<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <title>Exo-5 Partie-VII</title>
    </head>
    <body>
        <?php
        //si les champ n'est pas vide, on affiche l'echo, sinon (ça veut dire rempli), on affiche le formulaire
        if ((!empty($_POST['civility'])) && (!empty($_POST['firstname'])) && (!empty($_POST['lastname'])) && (preg_match('/^([A-Za-z]{2}[ éàëA-Za-z]*)$/', $_POST['firstname'])) && (preg_match('/^([A-Za-z]{2}[ éàëA-Za-z]*)$/', $_POST['lastname']))) {
            ?>
            <!-- On recupère avec la mérthode $_POST les saisies de l'utilisateur;
            On l'affiche sur un champ ici -->
            <p class="answer"><?php echo $_POST['civility'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname']; ?></p>
        <?php } else { ?>
            <!-- formulaire pour récuperer le choix de la civilité, le nom et le prénom -->
            <form action="" method="POST">
                <fieldset>
                    <label for="chose">Civilité: </label>
                    <select name="civility">
                        <option>Madame</option>
                        <option>Monsieur</option>
                    </select><br />
                    <ul>
                        <li><label for="firstname">Nom: </label><input type="text" name="firstname" id="firstname" placeholder="RAKOTONOMENJANAHARY " /></li>
                        <li><label for="lastname">Prénom: </label><input type="text" name="lastname" id="lastname" placeholder="Nirina" /></li>
                    </ul>
                </fieldset>
                <input type="submit" name="button" class="validate" />
            </form>   
        <?php } ?> 
        <!-- un autre bouton pour revenir sur la page d'accueil des exercices -->
        <a title="linkHomePage" href="../index.php" class="btn btn-light btn-lg">Page d'accueil</a>
    </body>
</html>






