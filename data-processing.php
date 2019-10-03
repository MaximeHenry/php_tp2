<?php
    $identifiant = $_POST['identifiant'];
    $sexe = $_POST['civilite'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $telephone = $_POST['telephone'];
    $pays = $_POST['pays'];
    $action = $_POST['action'];
    if ($action == 'mailer')
    {
        $message = 'Voici votre identifiant: ' . $identifiant . PHP_EOL;
        $message.= 'Votre mot de passe est: ' . $mdp . PHP_EOL;
        $message.= 'Le numéro de téléphone que vous avez fourni est: ' . $telephone . PHP_EOL;
        mail($mail, 'inscription', $message);
        echo '<strong>Votre formulaire a bien été envoyé. </strong> <br/>';
        echo '<a href="http://maximehenry.alwaysdata.net/php_tp2/test.php"> Revenir au formulaire </a><br/>';

        $dbLink = mysqli_connect(dbHost, dbLogin, dbPass) or die('Erreur de connexion au serveur : '. mysqli_connect_error());
        mysqli_select_db($dbLink, dbBd) or die('Erreur dans la selection de la base : ' . mysqli_error($dbLink));
        $today = date('Y-m-d');
        $query = 'INSERT INTO user (id, pseudo, password, sexe, mail, telephone, pays, date_inscription) VALUES (NULL, \'' . $identifiant . '\',\'' . $mdp  .
                    '\',\'' . $sexe . '\',\'' . $mail . '\',\'' . $telephone . '\',\'' . $pays . '\',\'' . $today . '\');';

        if(!($dbResult = mysqli_query($dbLink, $query)))
        {
            echo 'Erreur de requete<br/>';
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
            echo 'Erreur : ' . $query . '<br/>';
            exit();
        }
    }
    else
    {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }
?>
