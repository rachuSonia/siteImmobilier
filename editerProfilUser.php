<?php
require('application/database.php');
session_start();

if(isset($_SESSION['id_user'])){
    $userInfo=getIdUser($_SESSION['id_user']);

}


if(isset($_POST['newLastName']) && !empty($_POST['newLastName']) && $_POST['newLastName'] != $userInfo['lastName'] ){

        $newLastName=htmlspecialchars($_POST['newLastName']);

        $pdo=createconnection();
        $req=$pdo->prepare('UPDATE `users` SET `lastName`=? WHERE `id_user`=?');
        $req->execute(array($newLastName,$userInfo['id_user']));
        header('Location:user.php?id='.$userInfo['id_user']);
}


if(isset($_POST['newFirstName']) && !empty($_POST['newFirstName']) && $_POST['newFirstName'] != $userInfo['firstName'] ){

    $newFirstName=htmlspecialchars($_POST['newFirstName']);

    $pdo=createconnection();
    $req=$pdo->prepare('UPDATE `users` SET `firstName`=? WHERE `id_user`=?');
    $req->execute(array($newFirstName,$userInfo['id_user']));
    header('Location:user.php?id='.$userInfo['id_user']);
}


if(isset($_POST['newBirth_date']) && !empty($_POST['newBirth_date']) && $_POST['newBirth_date'] != $userInfo['birth_date'] ){

    $newBirth_date=htmlspecialchars($_POST['newBirth_date']);

    $pdo=createconnection();
    $req=$pdo->prepare('UPDATE `users` SET `birth_date`=? WHERE `id_user`=?');
    $req->execute(array($newBirth_date,$userInfo['id_user']));
    header('Location:user.php?id='.$userInfo['id_user']);
}


if(isset($_POST['newPseudo']) && !empty($_POST['newPseudo']) && $_POST['newPseudo'] != $userInfo['pseudo'] ){

    $newPseudo=htmlspecialchars($_POST['newPseudo']);

    $pdo=createconnection();
    $req=$pdo->prepare('UPDATE `users` SET `pseudo`=? WHERE `id_user`=?');
    $req->execute(array($newPseudo,$userInfo['id_user']));
    header('Location:user.php?id='.$userInfo['id_user']);
}


if(isset($_POST['newMdp1']) && !empty($_POST['newMdp1']) && $_POST['newMdp1'] != $userInfo['password'] ){

    $newMdp1=htmlspecialchars($_POST['newMdp1']);

    $pdo=createconnection();
    $req=$pdo->prepare('UPDATE `users` SET `password`=? WHERE `id_user`=?');
    $req->execute(array($newMdp1,$userInfo['id_user']));
    header('Location:user.php?id='.$userInfo['id_user']);
}


if(isset($_POST['newEmail1']) && !empty($_POST['newEmail1']) && $_POST['newEmail1'] != $userInfo['e_mail'] ){

    $newEmail1=htmlspecialchars($_POST['newEmail1']);

    $pdo=createconnection();
    $req=$pdo->prepare('UPDATE `users` SET `e_mail`=? WHERE `id_user`=?');
    $req->execute(array($newEmail1,$userInfo['id_user']));
    header('Location:user.php?id='.$userInfo['id_user']);
}


if(isset($_POST['newAdress']) && !empty($_POST['newAdress']) && $_POST['newAdress'] != $userInfo['adress'] ){

    $newAdress=htmlspecialchars($_POST['newAdress']);

    $pdo=createconnection();
    $req=$pdo->prepare('UPDATE `users` SET `adress`=? WHERE `id_user`=?');
    $req->execute(array($newAdress,$userInfo['id_user']));
    header('Location:user.php?id='.$userInfo['id_user']);
}


if(isset($_POST['newPhoneMobile']) && !empty($_POST['newPhoneMobile']) && $_POST['newPhoneMobile'] != $userInfo['phoneMobile'] ){

    $newPhoneMobile=htmlspecialchars($_POST['newPhoneMobile']);

    $pdo=createconnection();
    $req=$pdo->prepare('UPDATE `users` SET `phoneMobile`=? WHERE `id_user`=?');
    $req->execute(array($newPhoneMobile,$userInfo['id_user']));
    header('Location:user.php?id='.$userInfo['id_user']);
}



$errors=array();
if(isset($_FILES['newPicturs']) && !empty($_FILES['newPicturs']['name'])){
     
        $tailleMax= 2097152; // taille maximal 2 Mo
        $extensionValide=array('jpg');
        if($_FILES['newPicturs']['size'] <=$tailleMax){
            $pictur=$_FILES['newPicturs']['name'];
             $extensionUpload=strtolower(substr(strrchr($pictur,'.'),1));
            if(in_array($extensionUpload,$extensionValide)){
            $chemin='image/utilisateur/'.$_SESSION['id_user'].'.'.$extensionUpload;
            $filName=$_FILES['newPicturs']['tmp_name'];
            $size=getimagesize($filName);
                    $result=move_uploaded_file($filName,$chemin);
                    if($result){
                        $image=imagecreatefromjpeg($chemin);
                        $width=imagesx($image);
                        $height=imagesy($image);
                        $new_width=150;
                        $new_height=150;
                        $thumb=imagecreatetruecolor($new_width,$new_height);
                        imagecopyresized ($thumb,$image,0,0,0,0,$new_width,$new_height,$width,$height);
                        imagejpeg($thumb,$chemin);
                        imagedestroy($image);
                        $pdo=createconnection();
                        $req=$pdo->prepare('UPDATE `users` SET `avatar`=:avatar WHERE `id_user`=:id_user');
                        $req->execute(array(
                                ':avatar'=> $userInfo['id_user'].'.'.$extensionUpload,
                                ':id_user'=>$userInfo['id_user']
                                ));
                        header('Location:user.php?id='.$userInfo['id_user']);
                    }
                    else{$errors['newPicturs']="Une erreur s'est produite lors de téléchargement de votre photo !!";}
            }
            else{$errors['newPicturs']='Votre photo doit etre au format jpg, jpeg, png ou gif !!';}
        }
        else{$errors['newPicturs']='Votre photo ne doit pas depasser 5 Mo !!';}
}


// Sélection et affichage du template PHTML.
$template = 'editerProfilUser';
include 'layout.phtml';

    