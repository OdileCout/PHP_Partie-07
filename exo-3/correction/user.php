<?php
if (!empty($_GET['name'])) {
    if (preg_match('#^([A-Z]|[a-z])[a-z]*(-)?[a-z]+$#', $_GET['name'])) {  //utiliser filter_var
        echo strip_tags($_GET['name']) . ' est valide !';
    } else {
        echo $_GET['name'] . ' n\'est pas valide, recommencez !';
    }
} else {
    echo 'Votre nom n\'est pas rempli';
}
if (!empty($_GET['firstname'])) {
    if (preg_match('#^([A-Z]|[a-z])[a-z]*(-)?[a-z]+$#', $_GET['firstname'])) {
        echo strip_tags($_GET['firstname']) . ' est valide !';
    } else {
        echo $_GET['firstname'] . ' n\'est pas valide, recommencez !';
    }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Exo 3</title>
    </head>
    <body>
        <p><?php echo $_GET['name']; ?></p>
        <p><?php
            echo $_GET['firstname']
            ?></p>
    </body>
</html>