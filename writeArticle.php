<?php
require('application/database.php');
session_start();

if(isset($_SESSION['id_user'])){
    $userInfo=getIdUser($_SESSION['id_user']);
}

if(!empty($_POST)){

    $title=$_POST['title'];
    $content=$_POST['article'];
    $user=$_POST['auteur'];

    addArticle($title,$content,$userInfo['id_user']);
    header('Location:blog.php?id='.$userInfo['id_user']);
}



// Sélection et affichage du template PHTML.
$template = 'writeArticle';
include 'layout.phtml';