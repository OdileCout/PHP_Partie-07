<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <title>Exo-6 Partie-VII</title>
    </head>
    <body>
        <div class="col-md-12 text-center">
            <!-- On recupère avec la mérthode $_POST les saisies de l'utilisateur;
            On l'affiche sur un champ ici -->
            <?php
            $regexNistname = '#^([A-Z]|[a-z])[a-z]*(-)?[a-z]+$#';
            if (count($_POST) > 0 || count($_GET) > 0) {
                if (!preg_match($regexNistname, $_POST['firstname'])) {
                    echo 'Veuillez bien remplir le champ du nom';
                } else if (!preg_match($regexNistname, $_POST['lastname'])) {
                    echo 'Veuillez bien remplir le champ du prénom';
                }
                echo 'Données envoyées';
            } else {
                ?>
                <div class="col-md-12 text-center">
                    <!-- formulaire pour récuperer le choix de la civilité, le nom et le prénom -->
                    <form action="#" method="POST">
                        <fieldset>
                            <legend>Formulaire</legend>
                            <label for="chose">Civilité: </label>
                            <select name="civility">
                                <option disabled selected>veillez selectionner</option>
                                <option value="madame">Madame</option>
                                <option value="monsieur" >Monsieur</option>
                            </select>
                            <ul>
                                <li><label for="firstname">Nom: </label><input type="text" name="firstname" id="firstname" /></li>
                                <li><label for="lastname">Prénom: </label><input type="text" name="lastname" id="lastname" /></li>
                            </ul>
                        </fieldset>
                        <input type="submit" name="button" class="validate" value="validate" />
                    </form>
                </div>
<?php } ?>   
            <!-- un autre bouton pour revenir sur la page d'accueil de l'exercice -->
            <a title="linkHomePage" href="../index.php" class="btn btn-light btn-lg">Page d'accueil</a>
        </div>
    </body> 
</html>
