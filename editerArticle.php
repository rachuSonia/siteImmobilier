<?php
require('application/database.php');
session_start();

if($_SESSION['id_user']){
    $userInfo=getIdUser($_SESSION['id_user']);
}

$id=$_GET['id'];
$articles=getArticleUser($id);
$article=$articles['0'];

if(!empty($_POST)){

    if(isset($_POST['newTitle']) && !empty($_POST['newTitle']) && $_POST['newTitle'] != $article['title']){
        $newTitle=htmlspecialchars($_POST['newTitle']);

        $updateTitleArticle=updateTitleArticle($newTitle,$id);
        header('Location:detailsArticle.php?id='.$id);
    }
    
    if(isset($_POST['newArticle']) && !empty($_POST['newArticle']) && $_POST['newArticle'] != $article['content']){
        $newContent=htmlspecialchars($_POST['newArticle']);

        $updateTitleArticle=updateContentArticle($newContent,$id);
        header('Location:detailsArticle.php?id='.$id);
    }
    $user=htmlspecialchars($_POST['auteur']);


}


// Sélection et affichage du template PHTML.
$template = 'editerArticle';
include 'layout.phtml';

	
    