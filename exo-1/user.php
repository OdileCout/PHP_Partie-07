<?php 

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>récuperer exo1 php-partie-7</title>
  </head>
  <body>
    <p>On récupère le formulaire de la page "index": </p>
    <p>Le Nom: <?php echo $_GET['firstname']; ?></p>
    <p>Le Prénom: <?php echo $_GET['lastname']; ?></p>
    <p>Revenir sur la page de formulaire <a href="index.php">click</a></p>
  </body>
</html>
