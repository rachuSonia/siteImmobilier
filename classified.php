<?php
require('application/database.php');
session_start();

if(isset($_SESSION['id_user'])){
    $userInfo=getIdUser($_SESSION['id_user']);
}  

$classifiedBuy=listClassifiedBuy();

// Sélection et affichage du template PHTML.
$template = 'classified';
include 'layout.phtml';

