<?php

require('application/database.php');
session_start();
if(isset($_SESSION['id_user'])){

    $pdo=createconnection();
    $userInfo=getIdUser($_SESSION['id_user']);
}

if(!empty($_POST)){

    $typeBien=htmlspecialchars($_POST['typeBien']);
    $ville=htmlspecialchars($_POST['city']);
    $adress=htmlspecialchars($_POST['address']);
    $description=htmlspecialchars($_POST['comment']);
    $civilite=htmlspecialchars($_POST['civilité']);
    $firstName=htmlspecialchars($_POST['firstName']);
    $lastName=htmlspecialchars($_POST['lastName']);
    $email=htmlspecialchars($_POST['email']);
    $phone=htmlspecialchars($_POST['phone']);

    estimation($typeBien,$ville,$adress,$description,$civilite,$firstName,$lastName,$email,$phone);
}


// Sélection et affichage du template PHTML.
$template = 'estimation';
include 'layout.phtml';