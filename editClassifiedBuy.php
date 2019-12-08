<?php
require('application/database.php');
session_start();

if(isset($_SESSION['id_user'])){
    $userInfo=getIdUser($_SESSION['id_user']);
}


$id=$_GET['id'];
$classifiedBuy=getClassifiedBuy($id);

// edition des champs du formulaire d'informations sur les annonces


if(!empty($_POST['newType']) && $_POST['newType']!= $classifiedBuy['type']){
    $newtype=$_POST['newType'];
    $newType=updateClassifiedBuyType($newtype,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(isset($_POST['newTypeBien']) &&!empty($_POST['newTypeBien']) && $_POST['newTypeBien']!= $classifiedBuy['typeBien']){
    $newTypeBien=$_POST['newTypeBien'];
    $newTypeBienn=updateClassifiedBuyTypeAppart($newtypeBien,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newDescription']) && $_POST['newDescription']!= $classifiedBuy['description']){
    $newDescription=$_POST['newDescription'];
    $newDescription=updateClassifiedBuyDescription($newDescription,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newDepartement']) && $_POST['newDepartement']!= $classifiedBuy['departement']){
    $newDepartement=$_POST['newDepartement'];
    $newDepartement=updateClassifiedBuyDepartement($newDepartement,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newCity']) && $_POST['newCity']!= $classifiedBuy['ville']){
    $newCity=$_POST['newCity'];
    $newCity=updateClassifiedBuyCity($newcity,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newPrice']) && $_POST['newPrice']!= $classifiedBuy['prix']){
    $newPrice=$_POST['newPrice'];
    $newPrice=updateClassifiedBuyPrice($newPrice,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newTypeConstruction']) && $_POST['newTypeConstruction']!= $classifiedBuy['typeConstruction']){
    $newTypeConstruction=$_POST['newTypeConstruction'];
    $newTypeConstruction=updateClassifiedBuyTypeConstruction($newTypeConstruction,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newAnneeConstruction']) && $_POST['newAnneeConstruction']!= $classifiedBuy['anneeConstruction']){
    $newAnneeConstruction=$_POST['newAnneeConstruction'];
    $newAnneeConstruction=updateClassifiedBuyAnneeConstruction($newAnneeConstruction,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newAreaTotal']) && $_POST['newAreaTotal']!= $classifiedBuy['surfaceTotal']){
    $newSurfaceTotal=$_POST['newAreaTotal'];
    $newSurfaceTotal=updateClassifiedBuySurfaceTotal($newSurfaceTotal,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newSurfaceHabitable']) && $_POST['newSurfaceHabitable']!= $classifiedBuy['surfaceHabitable']){
    $newSurfaceHabitable=$_POST['newSurfaceHabitable'];
    $newSurfaceHabitable=updateClassifiedBuySurfaceHabitable($newSurfaceHabitable,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newSurfaceTerrain']) && $_POST['newSurfaceTerrain']!= $classifiedBuy['surfaceTerrain']){
    $newSurfaceTerrain=$_POST['newSurfaceTerrain'];
    $newSurfaceTerrain=updateClassifiedBuySurfaceTerrain($newSurfaceTerrain,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newNombrePiece']) && $_POST['newNombrePiece']!= $classifiedBuy['nombrePiece']){
    $newNombrePiece=$_POST['newNombrePiece'];
    $newNombrePiece=updateClassifiedBuyNombrePiece($newNombrePiece,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newTaxesFonciere']) && $_POST['newTaxesFonciere']!= $classifiedBuy['taxeFonciere']){
    $newTaxeFonciere=$_POST['newTaxesFonciere'];
    $newTaxeFonciere=updateClassifiedBuyTaxeFonciere($newTaxeFonciere,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newTravauxRecent']) && $_POST['newTravauxRecent']!= $classifiedBuy['travauxRecent']){
    $newTravauxRecent=$_POST['newTravauxRecent'];
    $newTravauxRecent=updateClassifiedBuyTravauxRecent($newTravauxRecent,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newTravauxProvisoir']) && $_POST['newTravauxProvisoir']!= $classifiedBuy['travauxPrevoir']){
    $newTravauxPrevoir=$_POST['newTravauxProvisoir'];
    $newTravauxPrevoir=updateClassifiedBuyTravauxPrevoir($newTravauxPrevoir,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newEquipement']) && $_POST['newEquipement']!= $classifiedBuy['equipement']){
    $newEquipement=$_POST['newEquipement'];
    $newEquipement=updateClassifiedBuyEquipement($newEquipement,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newChauffage']) && $_POST['newChauffage']!= $classifiedBuy['chauffage']){
    $newChauffage=$_POST['newChauffage'];
    $newChauffage=updateClassifiedBuyChauffage($newChauffage,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newEauChaude']) && $_POST['newEauChaude']!= $classifiedBuy['eauChaude']){
    $newEauChaude=$_POST['newEauChaude'];
    $newEauChaude=updateClassifiedBuyEauChaude($newEauChaude,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

if(!empty($_POST['newPlus']) && $_POST['newPlus']!= $classifiedBuy['plus']){
    $newPlus=$_POST['newPlus'];
    $newPlus=updateClassifiedBuyPlus($newPlus,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}


// édition des photos des annonces


if(!empty($_FILES['newPicturs1']) && $_FILES['newPicturs1']['name']!= $classifiedBuy['photo1']){
    $Pictur_one=$_FILES['newPicturs1']['name'];
     // les formats d'extenssion d'image valide stocker dans un tableau 
     $extensionValide=array('jpg');
     // extraire l'extention de l'image
     $extensionUpload1=strtolower(substr(strrchr($_FILES['newPicturs1']['name'],'.'),1));
    // vérifier si l'extention de l'image existe dans le tableau
    if(in_array($extensionUpload1,$extensionValide)){
         //   générer une valeur aléatoire et unique pour le nom de l'image
         $url1=md5(uniqid(rand(),true));
                // Chemain ou url ou on veux stocker l'image 
          $chemin1='image/Acheter/'.$url1.'.'.$extensionUpload1;
          $filName1=$_FILES['newPicturs1']['tmp_name'];
              // Connaitre les dimensions d'une image
              $size1=getimagesize($filName1);
              // Déplacer le fichier recu
              $result1=move_uploaded_file($filName1,$chemin1);
              $image1=imagecreatefromjpeg ($chemin1);
               // récupérer les dimensions de l'image la largeur et langueur
               $width1=imagesx($image1);
               $height1=imagesy($image1);
               // déclarer les dimensions ou l'en souhaite redimensionner l'image
               $new_width=380;
               $new_height=380;
                // Création d'une image vide
               $thumb1=imagecreatetruecolor($new_width,$new_height);
                 // Ajouter l'image voulu dans la nouvelle image créer
               imagecopyresized ($thumb1,$image1,0,0,0,0,$new_width,$new_height,$width1,$height1);
                // L'affichgeb de l'image
                imagejpeg($thumb1,$chemin1);
                // Libération de la mémoire
                imagedestroy($image1);
                $newPictur1=updateClassifiedBuyPictur_one($url1.'.'.$extensionUpload1,$id);
                header('Location:classified.php?id='.$_SESSION['id_user']);
            }
}

if(!empty($_FILES['newPicturs2']) && $_FILES['newPicturs2']['name']!= $classifiedBuy['photo2']){
    $Pictur_too=$_FILES['newPicturs2']['name']; 
     $extensionValide=array('jpg');
     $extensionUpload2=strtolower(substr(strrchr($_FILES['newPicturs2']['name'],'.'),1));
    if(in_array($extensionUpload2,$extensionValide)){
         $url2=md5(uniqid(rand(),true));
          $chemin2='image/Acheter/'.$url2.'.'.$extensionUpload2;
          $filName2=$_FILES['newPicturs2']['tmp_name'];
              $size2=getimagesize($filName2);
              $result2=move_uploaded_file($filName2,$chemin2);
              $image2=imagecreatefromjpeg ($chemin2);
               $width2=imagesx($image2);
               $height2=imagesy($image2);
               $new_width=380;
               $new_height=380;
               $thumb2=imagecreatetruecolor($new_width,$new_height);
                 imagecopyresized ($thumb2,$image2,0,0,0,0,$new_width,$new_height,$width2,$height2);
                 imagejpeg($thumb2,$chemin2);
                imagedestroy($image2);
                $newPictur2=updateClassifiedBuyPictur_too($url2.'.'.$extensionUpload2,$id);
                 header('Location:classified.php?id='.$_SESSION['id_user']);
                       }
           }

if(!empty($_FILES['newPicturs3']) && $_FILES['newPicturs3']['name']!= $classifiedBuy['photo3']){
    $Pictur_three=$_FILES['newPicturs3']['name']; 
    $extensionValide=array('jpg');
    $extensionUpload3=strtolower(substr(strrchr($_FILES['newPicturs3']['name'],'.'),1));
        if(in_array($extensionUpload3,$extensionValide)){
                $url3=md5(uniqid(rand(),true));
                $chemin3='image/Acheter/'.$url3.'.'.$extensionUpload3;
                $filName3=$_FILES['newPicturs3']['tmp_name'];
                 $size3=getimagesize($filName3);
                $result3=move_uploaded_file($filName3,$chemin3);
                $image3=imagecreatefromjpeg ($chemin3);
                 $width3=imagesx($image3);
                $height3=imagesy($image3);
                $new_width=380;
                $new_height=380;
                 $thumb3=imagecreatetruecolor($new_width,$new_height);
                imagecopyresized ($thumb3,$image3,0,0,0,0,$new_width,$new_height,$width3,$height3);
                imagejpeg($thumb3,$chemin3);
                 imagedestroy($image3);
                  $newPictur3=updateClassifiedBuyPictur_three($url3.'.'.$extensionUpload3,$id);
                 header('Location:classified.php?id='.$_SESSION['id_user']);
                             }
                 }

    if(!empty($_FILES['newPicturs4']) && $_FILES['newPicturs4']['name']!= $classifiedBuy['photo4']){
        $Pictur_foor=$_FILES['newPicturs4']['name']; 
        $extensionValide=array('jpg');
        $extensionUpload4=strtolower(substr(strrchr($_FILES['newPicturs4']['name'],'.'),1));
            if(in_array($extensionUpload4,$extensionValide)){
                 $url4=md5(uniqid(rand(),true));
                $chemin4='image/Acheter/'.$url4.'.'.$extensionUpload4;
                $filName4=$_FILES['newPicturs4']['tmp_name'];
                 $size4=getimagesize($filName4);
                $result4=move_uploaded_file($filName4,$chemin4);
                $image4=imagecreatefromjpeg ($chemin4);
                 $width4=imagesx($image4);
                $height4=imagesy($image4);
                $new_width=380;
                $new_height=380;
                $thumb4=imagecreatetruecolor($new_width,$new_height);
                imagecopyresized ($thumb4,$image4,0,0,0,0,$new_width,$new_height,$width4,$height4);
                imagejpeg($thumb4,$chemin4);
                imagedestroy($image4);
                $newPictur4=updateClassifiedBuyPictur_foor($url4.'.'.$extensionUpload4,$id);
                header('Location:classified.php?id='.$_SESSION['id_user']);
                 }
            }
     if(!empty($_FILES['newPicturs5']) && $_FILES['newPicturs5']['name']!= $classifiedBuy['photo5']){
         $Pictur_five=$_FILES['newPicturs5']['name']; 
        $extensionValide=array('jpg');
        $extensionUpload5=strtolower(substr(strrchr($_FILES['newPicturs5']['name'],'.'),1));
             if(in_array($extensionUpload5,$extensionValide)){
               $url5=md5(uniqid(rand(),true));
                 $chemin5='image/Acheter/'.$url5.'.'.$extensionUpload5;
                 $filName5=$_FILES['newPicturs5']['tmp_name'];
                  $size5=getimagesize($filName5);
                $result5=move_uploaded_file($filName5,$chemin5);
                $image5=imagecreatefromjpeg ($chemin5);
                 $width5=imagesx($image5);
                $height5=imagesy($image5);
                 $new_width=380;
                $new_height=380;
                $thumb5=imagecreatetruecolor($new_width,$new_height);
                imagecopyresized ($thumb5,$image5,0,0,0,0,$new_width,$new_height,$width5,$height5);
                imagejpeg($thumb5,$chemin5);
                imagedestroy($image5);
                $newPictur5=updateClassifiedBuyPictur_five($url5.'.'.$extensionUpload5,$id);
                header('Location:classified.php?id='.$_SESSION['id_user']);
                 }
            }
 if(!empty($_FILES['newPicturs6']) && $_FILES['newPicturs6']['name']!= $classifiedBuy['photo6']){
     $Pictur_six=$_FILES['newPicturs6']['name']; 
     $extensionValide=array('jpg');
    $extensionUpload6=strtolower(substr(strrchr($_FILES['newPicturs6']['name'],'.'),1));
         if(in_array($extensionUpload6,$extensionValide)){
           $url6=md5(uniqid(rand(),true));
           $chemin6='image/Acheter/'.$url6.'.'.$extensionUpload6;
           $filName6=$_FILES['newPicturs6']['tmp_name'];
           $size6=getimagesize($filName6);
             $result6=move_uploaded_file($filName6,$chemin6);
             $image6=imagecreatefromjpeg ($chemin6);
              $width6=imagesx($image6);
             $height6=imagesy($image6);
              $new_width=380;
            $new_height=380;
            $thumb6=imagecreatetruecolor($new_width,$new_height);
                imagecopyresized ($thumb6,$image6,0,0,0,0,$new_width,$new_height,$width6,$height6);
                imagejpeg($thumb6,$chemin6);
                imagedestroy($image6);
                $newPictur6=updateClassifiedBuyPictur_six($url6.'.'.$extensionUpload6,$id);
                header('Location:classified.php?id='.$_SESSION['id_user']);
                 }
            }


// Sélection et affichage du template PHTML.
$template = 'editClassifiedBuy';
include 'layout.phtml';