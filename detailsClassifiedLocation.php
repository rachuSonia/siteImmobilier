<?php
require('application/database.php');
session_start();

$id=$_GET['id'];
$classified=getClassifiedLocation($id);



if(isset($_SESSION['id_user'])){

    $pdo=createconnection();
    $userInfo=getIdUser($_SESSION['id_user']);
}

// Sélection et affichage du template PHTML.
$template = 'detailsClassifiedLocation';
include 'layout.phtml';