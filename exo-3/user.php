<?php ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <title>récuperer exo-3 php-partie-7</title>
    </head>
    <body>
        <div class="col-md-12 text-center bg-primary">
            <p>On récupère le formulaire de la page "index": </p>
            <p>Le Nom: <?php echo $_POST['firstname']; ?></p>
            <p>Le Prénom: <?php echo $_POST['lastname']; ?></p>
            <a title="linkHomePage" href="../index.php" class="btn btn-light btn-lg">Page d'accueil</a> 
        </div>
    </body>
</html>
