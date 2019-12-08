<?php
 require('application/database.php');
 session_start();

 $id=$_GET['id'];
 $classified=getClassifiedBuy($id);

 if(isset($_SESSION['id_user'])){

    $pdo=createconnection();
    $userInfo=getIdUser($_SESSION['id_user']);
}

// Sélection et affichage du template PHTML.
$template = 'detailsClassifiedBuy';
include 'layout.phtml';