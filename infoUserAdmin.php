<?php
require('application/database.php');
session_start();

if(isset($_SESSION['id_user'])){

    $userInfo=getIdUser($_SESSION['id_user']);
}
else{

    header('Location:connexion.php');
}

$users=listUser();



// Sélection et affichage du template PHTML.
$template = 'infoUserAdmin';
include 'layout.phtml';