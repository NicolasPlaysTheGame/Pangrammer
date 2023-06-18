<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('nicolas.leignel@gmail.com', 'Nouveau pangramme', $_POST['pangram'], 'From: webmaster@monsite.fr');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
</body>

</html>