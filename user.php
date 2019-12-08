<?php
require('application/database.php');
session_start();

// Connection automatique de l'utilisateur dans le cas d'éxistance de cookies
include('cookieConnection.php');

if(isset($_SESSION['id_user'])){

    $pdo=createconnection();
    $userInfo=getIdUser($_SESSION['id_user']);
}


// Sélection et affichage du template PHTML.
$template = 'user';
include 'layout.phtml';