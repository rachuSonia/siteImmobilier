<?php
// se connecter à la base de donnée
require('application/database.php');
session_start();


if(isset($_SESSION['id_user'])){
    $userInfo=getIdUser($_SESSION['id_user']);
}


// Sélection et affichage du template PHTML.
$template = 'index';
include 'layout.phtml';


    


    


    