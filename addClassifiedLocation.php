<?php
require('application/database.php');
session_start();

if(isset($_SESSION['id_user'])){
    $userInfo=getIdUser($_SESSION['id_user']);
}


if(!empty($_POST)){


    $type=$_POST['type'];
    $typeAppartement=$_POST['typeBien'];
    $description=$_POST['Description'];
    $ville=$_POST['city'];
    $departement=$_POST['departement'];
    $surface=$_POST['area'];
    $surfaceHabitable=$_POST['surfaceHabitable'];
    $nombrePiece=$_POST['nombrePiece'];
    $typeConstruction=$_POST['TypeConstruction'];
    $anneeConstruction=$_POST['AnneeConstruction'];
    $price=$_POST['price'];
    $provisionCharge=$_POST['ProvisionCharge'];
    $travauxRecent=$_POST['TravauxRecent'];
    $travausPrevoir=$_POST['TravauxPrevoir'];
    $honoraireCharge=$_POST['HnoraireCharge'];
    $constitutionDossier=$_POST['constitutionDossier'];
    $etatDesLieux=$_POST['EtatDesLieux'];
    $depotGarantie=$_POST['depotGarantie'];
    $chauffage=$_POST['chauffage'];
    $eauChaude=$_POST['EauChaude'];
    if(isset($_FILES)){


        $photo1=$_FILES['Picturs1']['name'];
        $photo2=$_FILES['Picturs2']['name'];
        $photo3=$_FILES['Picturs3']['name'];
        $photo4=$_FILES['Picturs4']['name'];
        $photo5=$_FILES['Picturs5']['name'];
        $photo6=$_FILES['Picturs6']['name'];

        $extentionValide=array('jpg');
        $extentionUpload1=strtolower(substr(strrchr($photo1,'.'),1));
        $extentionUpload2=strtolower(substr(strrchr($photo2,'.'),1));
        $extentionUpload3=strtolower(substr(strrchr($photo3,'.'),1));
        $extentionUpload4=strtolower(substr(strrchr($photo4,'.'),1));
        $extentionUpload5=strtolower(substr(strrchr($photo5,'.'),1));
        $extentionUpload6=strtolower(substr(strrchr($photo6,'.'),1));

        if(in_array($extentionUpload1,$extentionValide) && 
            in_array($extentionUpload2,$extentionValide)
            && in_array($extentionUpload3,$extentionValide)
            && in_array($extentionUpload4,$extentionValide)
            && in_array($extentionUpload5,$extentionValide)
            && in_array($extentionUpload6,$extentionValide)){


            $url1=md5(uniqid(rand(),true));
            $url2=md5(uniqid(rand(),true));
            $url3=md5(uniqid(rand(),true));
            $url4=md5(uniqid(rand(),true));
            $url5=md5(uniqid(rand(),true));
            $url6=md5(uniqid(rand(),true));

            $chemin1='image/Location/'.$url1.'.'.$extentionUpload1;
            $chemin2='image/Location/'.$url2.'.'.$extentionUpload2;
            $chemin3='image/Location/'.$url3.'.'.$extentionUpload3;
            $chemin4='image/Location/'.$url4.'.'.$extentionUpload4;
            $chemin5='image/Location/'.$url5.'.'.$extentionUpload5;
            $chemin6='image/Location/'.$url6.'.'.$extentionUpload6;

            $filName1=$_FILES['Picturs1']['tmp_name'];
            $filName2=$_FILES['Picturs2']['tmp_name'];
            $filName3=$_FILES['Picturs3']['tmp_name'];
            $filName4=$_FILES['Picturs4']['tmp_name'];
            $filName5=$_FILES['Picturs5']['tmp_name'];
            $filName6=$_FILES['Picturs6']['tmp_name'];

            $size1=getimagesize($filName1);
            $size2=getimagesize($filName2);
            $size3=getimagesize($filName3);
            $size4=getimagesize($filName4);
            $size5=getimagesize($filName5);
            $size6=getimagesize($filName6);

            $result1=move_uploaded_file($filName1,$chemin1);
            $result2=move_uploaded_file($filName2,$chemin2);
            $result3=move_uploaded_file($filName3,$chemin3);
            $result4=move_uploaded_file($filName4,$chemin4);
            $result5=move_uploaded_file($filName5,$chemin5);
            $result6=move_uploaded_file($filName6,$chemin6);

            $image1=imagecreatefromjpeg($chemin1);
            $image2=imagecreatefromjpeg($chemin2);
            $image3=imagecreatefromjpeg($chemin3);
            $image4=imagecreatefromjpeg($chemin4);
            $image5=imagecreatefromjpeg($chemin5);
            $image6=imagecreatefromjpeg($chemin6);

            $width1=imagesx($image1);
            $height1=imagesy($image1);

            $width2=imagesx($image2);
            $height2=imagesy($image2);

            $width3=imagesx($image3);
            $height3=imagesy($image3);

            $width4=imagesx($image4);
            $height4=imagesy($image4);

            $width5=imagesx($image5);
            $height5=imagesy($image5);

            $width6=imagesx($image6);
            $height6=imagesy($image6);

            $new_width=380;
            $new_height=380;

            $thumb1=imagecreatetruecolor($new_width,$new_height);
            $thumb2=imagecreatetruecolor($new_width,$new_height);
            $thumb3=imagecreatetruecolor($new_width,$new_height);
            $thumb4=imagecreatetruecolor($new_width,$new_height);
            $thumb5=imagecreatetruecolor($new_width,$new_height);
            $thumb6=imagecreatetruecolor($new_width,$new_height);

            imagecopyresized ($thumb1,$image1,0,0,0,0,$new_width,$new_height,$width1,$height1);
            imagecopyresized ($thumb2,$image2,0,0,0,0,$new_width,$new_height,$width2,$height2);
            imagecopyresized ($thumb3,$image3,0,0,0,0,$new_width,$new_height,$width3,$height3);
            imagecopyresized ($thumb4,$image4,0,0,0,0,$new_width,$new_height,$width4,$height4);
            imagecopyresized ($thumb5,$image5,0,0,0,0,$new_width,$new_height,$width5,$height5);
            imagecopyresized ($thumb6,$image6,0,0,0,0,$new_width,$new_height,$width6,$height6);

            imagejpeg($thumb1,$chemin1);
            imagejpeg($thumb2,$chemin2);
            imagejpeg($thumb3,$chemin3);
            imagejpeg($thumb4,$chemin4);
            imagejpeg($thumb5,$chemin5);
            imagejpeg($thumb6,$chemin6);

            imagedestroy($image1);
            imagedestroy($image2);
            imagedestroy($image3);
            imagedestroy($image4);
            imagedestroy($image5);
            imagedestroy($image6);

            $pictur1=$url1.'.'.$extentionUpload1;
            $pictur2=$url2.'.'.$extentionUpload2;
            $pictur3=$url3.'.'.$extentionUpload3;
            $pictur4=$url4.'.'.$extentionUpload4;
            $pictur5=$url5.'.'.$extentionUpload5;
            $pictur6=$url6.'.'.$extentionUpload6;

            addClassifiedLocation($type,$typeAppartement,$pictur1,$pictur2,$pictur3,$pictur4,$pictur5,
            $pictur6,$description,$ville,$departement,$surface,$surfaceHabitable,$nombrePiece,
            $typeConstruction,$anneeConstruction,$price,$provisionCharge,$travauxRecent,
            $travausPrevoir,$honoraireCharge,$constitutionDossier,$etatDesLieux,$depotGarantie,
            $chauffage,$eauChaude);

          header('Location:classified.php?id='.$_SESSION['id_user']);
        }

    }
}
 
// Sélection et affichage du template PHTML.
$template = 'addClassifiedLocation';
include 'layout.phtml';   

    