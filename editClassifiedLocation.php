<?php
require('application/database.php');
session_start();

if(isset($_SESSION['id_user'])){
    $userInfo=getIdUser($_SESSION['id_user']);
}

$id=$_GET['id'];
$classifiedLocation=getClassifiedLocation($id);


// édition des champs du formulaire d'informations sur les anonces

if(!empty($_POST['newType']) && $_POST['newType']!=$classifiedLocation['type']){
    $newtype=$_POST['newType'];
    $newtype=updateClassifiedLocationType($newtype,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newTypeBien']) && $_POST['newTypeBien']!=$classifiedLocation['typeAppartement']){
    $newTypeAppartement=$_POST['newTypeBien'];
    $newTypeAppartement=updateClassifiedLocationTypeAppart($newTypeAppartement,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newDescription']) && $_POST['newDescription']!=$classifiedLocation['description']){
    $newDescription=$_POST['newDescription'];
    $newTypeAppartement=updateClassifiedLocationDescription($newDescription,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newCity']) && $_POST['newCity']!=$classifiedLocation['ville']){
    $newCity=$_POST['newCity'];
    $newTypeAppartement=updateClassifiedLocationCity($newCity,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newDepartement']) && $_POST['newDepartement']!=$classifiedLocation['departement']){
    $newDepartement=$_POST['newDepartement'];
    $newDepartement=updateClassifiedLocationDepartement($newDepartement,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newArea']) && $_POST['newArea']!=$classifiedLocation['surface']){
    $newArea=$_POST['newArea'];
    $newArea=updateClassifiedLocationArea($newArea,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newSurfaceHabitable']) && $_POST['newSurfaceHabitable']!=$classifiedLocation['surfaceHabitable']){
    $newSurfaceHabitable=$_POST['newSurfaceHabitable'];
    $newSurfaceHabitable=updateClassifiedLocationAreaHabitable($newSurfaceHabitable,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newNombrePiece']) && $_POST['newNombrePiece']!=$classifiedLocation['nombrePiece']){
    $newNombrePiece=$_POST['newNombrePiece'];
    $newNombrePiece=updateClassifiedLocationNombrePiece($newNombrePiece,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newTypeConstruction']) && $_POST['newTypeConstruction']!=$classifiedLocation['typeConstruction']){
    $newTypeConstruction=$_POST['newTypeConstruction'];
    $newTypeConstruction=updateClassifiedLocationTypeConstruction($newTypeConstruction,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newAnneeConstruction']) && $_POST['newAnneeConstruction']!=$classifiedLocation['anneeConstruction']){
    $newAnneeConstruction=$_POST['newAnneeConstruction'];
    $newAnneeConstruction=updateClassifiedLocationAnneeConstruction($newAnneeConstruction,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newPrice']) && $_POST['newPrice']!=$classifiedLocation['price']){
    $newPrice=$_POST['newPrice'];
    $newPrice=updateClassifiedLocationPrice($newPrice,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newProvisionCharge']) && $_POST['newProvisionCharge']!=$classifiedLocation['provisionCharge']){
    $newProvisionCharge=$_POST['newProvisionCharge'];
    $newProvisionCharge=updateClassifiedLocationProvisionCharge($newProvisionCharge,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newTravauxRecent']) && $_POST['newTravauxRecent']!=$classifiedLocation['travauxRecent']){
    $newTravauxRecent=$_POST['newTravauxRecent'];
    $newTravauxRecent=updateClassifiedLocationTravauxRecent($newTravauxRecent,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newTravauxPrevoir']) && $_POST['newTravauxPrevoir']!=$classifiedLocation['travausPrevoir']){
    $newTravauxPrevoir=$_POST['newTravauxPrevoir'];
    $newTravauxPrevoir=updateClassifiedLocationTravauxPrevoir($newTravauxPrevoir,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newHnoraireCharge']) && $_POST['newHnoraireCharge']!=$classifiedLocation['honoraireCharge']){
    $newHnoraireCharge=$_POST['newHnoraireCharge'];
    $newHnoraireCharge=updateClassifiedLocationHnoraireCharge($newHnoraireCharge,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newConstitutionDossier']) && $_POST['newConstitutionDossier']!=$classifiedLocation['constitutionDossier']){
    $newConstitutionDossier=$_POST['newConstitutionDossier'];
    $newConstitutionDossier=updateClassifiedLocationConstitutionDossier($newConstitutionDossier,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newEtatDesLieux']) && $_POST['newEtatDesLieux']!=$classifiedLocation['etatDesLieux']){
    $newEtatDesLieux=$_POST['newEtatDesLieux'];
    $newEtatDesLieux=updateClassifiedLocationEtatDesLieux($newEtatDesLieux,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newDepotGarantie']) && $_POST['newDepotGarantie']!=$classifiedLocation['depotGarantie']){
    $newDepotGarantie=$_POST['newDepotGarantie'];
    $newDepotGarantie=updateClassifiedLocationDepotGarantie($newDepotGarantie,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newChauffage']) && $_POST['newChauffage']!=$classifiedLocation['chauffage']){
    $newChauffage=$_POST['newChauffage'];
    $newChauffage=updateClassifiedLocationChauffage($newChauffage,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}
if(!empty($_POST['newEauChaude']) && $_POST['newEauChaude']!=$classifiedLocation['eauChaude']){
    $newEauChaude=$_POST['newEauChaude'];
    $newEauChaude=updateClassifiedLocationEauChaude($newEauChaude,$id);
    header('Location:classified.php?id='.$_SESSION['id_user']);
}

// édition des photos d'annonces
if(!empty($_FILES['newPicturs1']['name']) && $_FILES['newPicturs1']['name']!=$classifiedLocation['photo1']){
    $pictur_one=$_FILES['newPicturs1']['name'];
    $extentionValide=array('jpg');
    $extentionUpload1=strtolower(substr(strrchr($pictur_one,'.'),1));
    if(in_array($extentionUpload1,$extentionValide)){
        $url1=md5(uniqid(rand(),true));
        $chemin1='image/Location/'.$url1.'.'.$extentionUpload1;
        $filName1=$_FILES['newPicturs1']['tmp_name'];
        $size1=getimagesize($filName1);
        $result1=move_uploaded_file($filName1,$chemin1);
        $image1=imagecreatefromjpeg($chemin1);
        $width1=imagesx($image1);
        $height1=imagesy($image1);
        $new_width=380;
        $new_height=380;
        $thumb1=imagecreatetruecolor($new_width,$new_height);
        imagecopyresized ($thumb1,$image1,0,0,0,0,$new_width,$new_height,$width1,$height1);
        imagejpeg($thumb1,$chemin1);
        imagedestroy($image1);
        $newPictur1=updateClassifiedLocationPictur_one($url1.'.'.$extensionUpload1,$id);
        header('Location:classified.php?id='.$_SESSION['id_user']);
    }
}
if(!empty($_FILES['newPicturs2']['name']) && $_FILES['newPicturs2']['name']!=$classifiedLocation['photo2']){
    $pictur_too=$_FILES['newPicturs2']['name'];
    $extentionValide=array('jpg');
    $extentionUpload2=strtolower(substr(strrchr($pictur_too,'.'),1));
    if(in_array($extentionUpload2,$extentionValide)){
        $url2=md5(uniqid(rand(),true));
        $chemin2='image/Location/'.$url2.'.'.$extentionUpload2;
        $filName2=$_FILES['newPicturs2']['tmp_name'];
        $size2=getimagesize($filName2);
        $result2=move_uploaded_file($filName2,$chemin2);
        $image2=imagecreatefromjpeg($chemin2);
        $width2=imagesx($image2);
        $height2=imagesy($image2);
        $new_width=380;
        $new_height=380;
        $thumb2=imagecreatetruecolor($new_width,$new_height);
        imagecopyresized ($thumb2,$image2,0,0,0,0,$new_width,$new_height,$width2,$height2);
        imagejpeg($thumb2,$chemin2);
        imagedestroy($image2);
        $newPictur2=updateClassifiedLocationPictur_too($url2.'.'.$extensionUpload2,$id);
        header('Location:classified.php?id='.$_SESSION['id_user']);
    }
}
if(!empty($_FILES['newPicturs3']['name']) && $_FILES['newPicturs3']['name']!=$classifiedLocation['photo3']){
    $pictur_three=$_FILES['newPicturs3']['name'];
    $extentionValide=array('jpg');
    $extentionUpload3=strtolower(substr(strrchr($pictur_three,'.'),1));
    if(in_array($extentionUpload3,$extentionValide)){
        $url3=md5(uniqid(rand(),true));
        $chemin3='image/Location/'.$url3.'.'.$extentionUpload3;
        $filName3=$_FILES['newPicturs3']['tmp_name'];
        $size3=getimagesize($filName3);
        $result3=move_uploaded_file($filName3,$chemin3);
        $image3=imagecreatefromjpeg($chemin3);
        $width3=imagesx($image3);
        $height3=imagesy($image3);
        $new_width=380;
        $new_height=380;
        $thumb3=imagecreatetruecolor($new_width,$new_height);
        imagecopyresized ($thumb3,$image3,0,0,0,0,$new_width,$new_height,$width3,$height3);
        imagejpeg($thumb3,$chemin3);
        imagedestroy($image3);
        $newPictur3=updateClassifiedLocationPictur_three($url3.'.'.$extensionUpload3,$id);
        header('Location:classified.php?id='.$_SESSION['id_user']);
    }
}
if(!empty($_FILES['newPicturs4']['name']) && $_FILES['newPicturs4']['name']!=$classifiedLocation['photo4']){
    $pictur_foor=$_FILES['newPicturs4']['name'];
    $extentionValide=array('jpg');
    $extentionUpload4=strtolower(substr(strrchr($pictur_foor,'.'),1));
    if(in_array($extentionUpload4,$extentionValide)){
        $url4=md5(uniqid(rand(),true));
        $chemin4='image/Location/'.$url4.'.'.$extentionUpload4;
        $filName4=$_FILES['newPicturs4']['tmp_name'];
        $size4=getimagesize($filName4);
        $result4=move_uploaded_file($filName4,$chemin4);
        $image4=imagecreatefromjpeg($chemin4);
        $width4=imagesx($image4);
        $height4=imagesy($image4);
        $new_width=380;
        $new_height=380;
        $thumb4=imagecreatetruecolor($new_width,$new_height);
        imagecopyresized ($thumb4,$image4,0,0,0,0,$new_width,$new_height,$width4,$height4);
        imagejpeg($thumb4,$chemin4);
        imagedestroy($image4);
        $newPictur4=updateClassifiedLocationPictur_foor($url4.'.'.$extensionUpload4,$id);
        header('Location:classified.php?id='.$_SESSION['id_user']);
    }
}
if(!empty($_FILES['newPicturs5']['name']) && $_FILES['newPicturs5']['name']!=$classifiedLocation['photo5']){
    $pictur_five=$_FILES['newPicturs5']['name'];
    $extentionValide=array('jpg');
    $extentionUpload5=strtolower(substr(strrchr($pictur_five,'.'),1));
    if(in_array($extentionUpload5,$extentionValide)){
        $url5=md5(uniqid(rand(),true));
        $chemin5='image/Location/'.$url5.'.'.$extentionUpload5;
        $filName5=$_FILES['newPicturs5']['tmp_name'];
        $size5=getimagesize($filName5);
        $result5=move_uploaded_file($filName5,$chemin5);
        $image5=imagecreatefromjpeg($chemin5);
        $width5=imagesx($image5);
        $height5=imagesy($image5);
        $new_width=380;
        $new_height=380;
        $thumb5=imagecreatetruecolor($new_width,$new_height);
        imagecopyresized ($thumb5,$image5,0,0,0,0,$new_width,$new_height,$width5,$height5);
        imagejpeg($thumb5,$chemin5);
        imagedestroy($image5);
        $newPictur5=updateClassifiedLocationPictur_five($url5.'.'.$extensionUpload5,$id);
        header('Location:classified.php?id='.$_SESSION['id_user']);
    }
}
if(!empty($_FILES['newPicturs6']['name']) && $_FILES['newPicturs6']['name']!=$classifiedLocation['photo6']){
    $pictur_six=$_FILES['newPicturs6']['name'];
    $extentionValide=array('jpg');
    $extentionUpload6=strtolower(substr(strrchr($pictur_six,'.'),1));
    if(in_array($extentionUpload6,$extentionValide)){
        $url6=md5(uniqid(rand(),true));
        $chemin6='image/Location/'.$url6.'.'.$extentionUpload6;
        $filName6=$_FILES['newPicturs6']['tmp_name'];
        $size6=getimagesize($filName6);
        $result6=move_uploaded_file($filName6,$chemin6);
        $image6=imagecreatefromjpeg($chemin6);
        $width6=imagesx($image6);
        $height6=imagesy($image6);
        $new_width=380;
        $new_height=380;
        $thumb6=imagecreatetruecolor($new_width,$new_height);
        imagecopyresized ($thumb6,$image6,0,0,0,0,$new_width,$new_height,$width6,$height6);
        imagejpeg($thumb6,$chemin6);
        imagedestroy($image6);
        $newPictur6=updateClassifiedLocationPictur_six($url6.'.'.$extensionUpload6,$id);
        header('Location:classified.php?id='.$_SESSION['id_user']);
    }
}

  
// Sélection et affichage du template PHTML.
$template = 'editClassifiedLocation';
include 'layout.phtml';