<?php
require('application/database.php');
session_start();


if(isset($_SESSION['id_user'])){
    $userInfo=getIdUser($_SESSION['id_user']);
}

$id=$_GET['id'];
$data=getArticleUser($id);

if(!empty($_POST)){
    $pseudo=htmlspecialchars($_POST['name']);
    $comment=htmlspecialchars($_POST['commentaire']);
    $errors=array();
		if(empty($pseudo)){
			$errors['name']='Entrez un pseudo !';
		}

		if(empty($comment)){
			$errors['commentaire']='Entrez un commentaire !';
		}

		if(count($errors)==0){

            addComment($id, $pseudo, $comment);
			$succes='Votre commentaire à bien était poster !!';
			unset($pseudo);
			unset($contenu);
		}

}

deleteComment($id);
$getCommentaire=getComment($id);

// Sélection et affichage du template PHTML.
$template = 'detailsArticle';
include 'layout.phtml';