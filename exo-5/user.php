<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Récuperer exo-4 php-partie-7</title>
  </head>
  <body>
    <p>On récupère le formulaire de la page "index": </p>
    <p>Le Nom: <?php echo $_POST['civility'] . ' '  . $_POST['firstname']; ?></p>
    <p>Le Prénom: <?php echo $_POST['lastname']; ?></p>
    <p>Revenir sur la page de formulaire <a href="index.php">click</a></p>
  </body>
</html>
