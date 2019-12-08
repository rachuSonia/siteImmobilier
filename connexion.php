<?php
require('application/database.php');
session_start();

// Connection automatique de l'utilisateur dans le cas d'éxistance de cookies
include('cookieConnection.php');

if(!empty($_POST) && isset($_POST)){

    $email=htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);


   
    if(!empty($email) && !empty($password)){

        $pdo=createconnection();
        $req=$pdo->prepare('SELECT * FROM `users` WHERE `e_mail`=? AND `password`=?');
        $req->execute(array($email,$password));
        $userExist=$req->rowCount();
    
        if($userExist==1){
    
                if (isset($_POST['rememberMe'])){
                    setcookie('email',$email,time()+365*24*3600,null,null,false,true);
                    setcookie('password',$password,time()+365*24*3600,null,null,false,true);
                }
                $userConnect=$req->fetch();
                $_SESSION['id_user']=$userConnect['id_user'];
                $_SESSION['password']=$userConnect['password'];
                $_SESSION['e_mail']=$userConnect['e_mail'];
    
               header('Location:user.php?id='.$_SESSION['id_user']);
          
         
        }
        else{$errors="Mot de passe ou email non valide !!";}
    }
    else{$errors='Tout les champs doivent etre complété !!';}

}

// Sélection et affichage du template PHTML.
$template = 'connexion';
include 'layout.phtml';

    