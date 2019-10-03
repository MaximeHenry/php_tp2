<?php
    $dbHost = 'mysql-maximehenry.alwaysdata.net';
    $dbLogin = '189635';
    $dbPass = 'simiazza';

    $dbLink = mysqli_connect($dbHost, $dbLogin, $dbPass) or die('Erreur de connexion au serveur : '. mysqli_connect_error());
    mysqli_select_db($dbLink, dbBd) or die('Erreur dans la selection de la base : ' . mysqli_error($dbLink));
    $query = 'SELECT id, mail, date FROM user';
    if(!($dbResult = mysqli_query($dbLink, $query)))
    {
        echo 'Erreur de requete<br/>';
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        echo 'Erreur : ' . $query . '<br/>';
        exit();
    }
    while ($dbRow = mysqli_fetch_assoc($dbResult))
    {
        echo $dbRow['id'] . '<br/>';
        echo $dbRow['pseudo'] . '<br/>';
        echo $dbRow['password'] . '<br/>';
        echo $dbRow['sexe'] . '<br/>';
        echo $dbRow['mail'] . '<br/>';
        echo $dbRow['telephone'] . '<br/>';
        echo $dbRow['pays'] . '<br/>';
        echo date('d.m.Y', strtotime($dbRow['date_inscription'])) . '<br/>';
        echo '<br/><br/>';
    }
?>
