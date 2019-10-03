<?php
    include 'base.php';
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = 'SELECT password FROM user WHERE pseudo = \'' . $login . '\';';

    if(!($dbResult = mysqli_query($dbLink, $query)))
    {
        echo 'Erreur de requete<br/>';
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        echo 'Erreur : ' . $query . '<br/>';
        exit();
    }
    if ($password == $dbResult)
    {
        header('Location : http://freenoteapp.fr');
    }
    else
    {
        start_page('erreur');
        header('Location : https://pornhub.com');
    }
