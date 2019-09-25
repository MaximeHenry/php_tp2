<?php
    $identifiant = $_POST['identifiant'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $telephone = $_POST['telephone'];
    $action = $_POST['action'];
    if ($action == 'mailer')
    {
        $message = 'Voici votre identifiant: ' . $identifiant . PHP_EOL;
        $message.= 'Votre mot de passe est: ' . $mdp . PHP_EOL;
        $message.= 'Le numéro de téléphone que vous avez fourni est: ' . $telephone . PHP_EOL;
        mail($mail, 'inscription', $message);
        echo '<strong>Votre formulaire a bien été envoyé. </strong> <br/>';
        echo '<a href="http://maximehenry.alwaysdata.net/php_tp2/test.php"> Revenir au formulaire </a><br/>';
    }
    else
    {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }
?>
