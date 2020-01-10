<?php
//On recupère avec la mérthode $_POST les saisies de l'utilisateur
if ((!empty($_POST['civility'])) && (!empty($_POST['firstname'])) && (!empty($_POST['lastname']))) {
    $echoResult = ('Bonjour ' . $_POST['civility'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname']);
}
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['myFile']) AND $_FILES['myFile']['error'] == 0) {
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['myFile']['size'] <= 1000000) {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['myFile']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees)) {
            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['myFile']['tmp_name'], 'uploads/' . basename($_FILES['myFile']['name']));
            $resultCondition = 'L\'envoi a bien été effectué!';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <title>Exo-8 Partie-VII</title>
    </head>
    <body>
        <div class="col-md-12 text-center">
            <!-- formulaire pour récuperer le choix de la civilité, le nom et le prénom -->
            <form action="#" method="POST" enctype="multipart/form-data">
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
                        <li><label for="sendFile">Fichier: </label><input type="file" name="myFile" id="myFile"></li>
                    </ul>
                </fieldset>
                <input type="submit" name="button" class="validate" value="validate" />
            </form>
        </div>
        <div class="col-md-12 text-center"> 
            <!-- On l'affiche sur un champ ici -->
            <p class="answer">
                <?php 
                echo $echoResult;
                ?> </p> 
            <!-- Le resultat des condition de verification -->
            <p>
                <?php echo $resultCondition; ?>
            </p>
            <!-- un autre bouton pour revenir sur la page d'accueil de l'exercice -->
            <a title="linkHomePage" href="../index.php" class="btn btn btn-lg">Page d'accueil</a>
        </div>
    </body> 
</html>
