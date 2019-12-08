<?php
require('application/database.php');
session_start();

if(isset($_SESSION['id_user'])){

    $pdo=createconnection();
    $userInfo=getIdUser($_SESSION['id_user']);

}

// Sélection et affichage du template PHTML.
$template = 'detailsProfilUser';
include 'layout.phtml';

    