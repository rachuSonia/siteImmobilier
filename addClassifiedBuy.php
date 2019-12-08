<?php
require('application/database.php');
session_start();


if(isset($_SESSION['id_user'])){
    $userInfo=getIdUser($_SESSION['id_user']);
}

if(!empty($_POST)){


        $type=$_POST['type'];
        $typeBien=$_POST['typeBien'];
        $description=$_POST['description'];
        $ville=$_POST['city'];
        $departement=$_POST['departement'];
        $prix=$_POST['price'];
        $typeConstruction=$_POST['TypeConstruction'];
        $anneeConstruction=$_POST['AnneeConstruction'];
        $surfaceTotal=$_POST['areaTotal'];
        $surfaceHabitable=$_POST['surfaceHabitable'];
        $surfaceTerrain=$_POST['surfaceTerrain'];
        $nombrePiece=$_POST['nombrePiece'];
        $taxeFonciere=$_POST['TaxesFonciere'];
        $travauxRecent=$_POST['TravauxRecent'];
        $travauxPrevoir=$_POST['TravauxProvisoir'];
        $equipement=$_POST['Equipement'];
        $chauffage=$_POST['chauffage'];
        $eauChaude=$_POST['EauChaude'];
        $plus=$_POST['plus'];

        if(isset($_FILES) && !empty($_FILES['Picturs1']['name'])
            && !empty($_FILES['Picturs2']['name'])
            && !empty($_FILES['Picturs3']['name'])
            && !empty($_FILES['Picturs4']['name'])
            && !empty($_FILES['Picturs5']['name'])
            && !empty($_FILES['Picturs6']['name'])){

            $photo1=$_FILES['Picturs1']['name'];
            $photo2=$_FILES['Picturs2']['name'];
            $photo3=$_FILES['Picturs3']['name'];
            $photo4=$_FILES['Picturs4']['name'];
            $photo5=$_FILES['Picturs5']['name'];
            $photo6=$_FILES['Picturs6']['name'];  
              
            // les formats d'extenssion d'image valide stocker dans un tableau 
            $extensionValide=array('jpg');
            // extraire l'extention de l'image
                 $extensionUpload1=strtolower(substr(strrchr($_FILES['Picturs1']['name'],'.'),1));
                 $extensionUpload2=strtolower(substr(strrchr($_FILES['Picturs2']['name'],'.'),1));
                 $extensionUpload3=strtolower(substr(strrchr($_FILES['Picturs3']['name'],'.'),1));
                 $extensionUpload4=strtolower(substr(strrchr($_FILES['Picturs4']['name'],'.'),1));
                 $extensionUpload5=strtolower(substr(strrchr($_FILES['Picturs5']['name'],'.'),1));
                 $extensionUpload6=strtolower(substr(strrchr($_FILES['Picturs6']['name'],'.'),1));
                // vérifier si l'extention de l'image existe dans le tableau
                 if(in_array($extensionUpload1,$extensionValide) && in_array($extensionUpload2,$extensionValide)
                    && in_array($extensionUpload3,$extensionValide)
                    && in_array($extensionUpload4,$extensionValide)
                    && in_array($extensionUpload5,$extensionValide)
                    && in_array($extensionUpload6,$extensionValide)){
                //   générer une valeur aléatoire et unique pour le nom de l'image
                    $url1=md5(uniqid(rand(),true));
                    $url2=md5(uniqid(rand(),true));
                    $url3=md5(uniqid(rand(),true));
                    $url4=md5(uniqid(rand(),true));
                    $url5=md5(uniqid(rand(),true));
                    $url6=md5(uniqid(rand(),true));
                    // Chemain ou url ou on veux stocker l'image 
                 $chemin1='image/Acheter/'.$url1.'.'.$extensionUpload1;
                 $chemin2='image/Acheter/'.$url2.'.'.$extensionUpload2;
                 $chemin3='image/Acheter/'.$url3.'.'.$extensionUpload3;
                 $chemin4='image/Acheter/'.$url4.'.'.$extensionUpload4;
                 $chemin5='image/Acheter/'.$url5.'.'.$extensionUpload5;
                 $chemin6='image/Acheter/'.$url6.'.'.$extensionUpload6;
               
                $filName1=$_FILES['Picturs1']['tmp_name'];
                $filName2=$_FILES['Picturs2']['tmp_name'];
                $filName3=$_FILES['Picturs3']['tmp_name'];
                $filName4=$_FILES['Picturs4']['tmp_name'];
                $filName5=$_FILES['Picturs5']['tmp_name'];
                $filName6=$_FILES['Picturs6']['tmp_name'];
                // Connaitre les dimensions d'une image
                    $size1=getimagesize($filName1);
                    $size2=getimagesize($filName2);
                    $size3=getimagesize($filName3);
                    $size4=getimagesize($filName4);
                    $size5=getimagesize($filName5);
                    $size6=getimagesize($filName6);
                // Déplacer le fichier recu
                        $result1=move_uploaded_file($filName1,$chemin1);
                        $result2=move_uploaded_file($filName2,$chemin2);
                        $result3=move_uploaded_file($filName3,$chemin3);
                        $result4=move_uploaded_file($filName4,$chemin4);
                        $result5=move_uploaded_file($filName5,$chemin5);
                        $result6=move_uploaded_file($filName6,$chemin6);

                        $image1=imagecreatefromjpeg ($chemin1);
                        $image2=imagecreatefromjpeg ($chemin2); 
                        $image3=imagecreatefromjpeg ($chemin3); 
                        $image4=imagecreatefromjpeg ($chemin4); 
                        $image5=imagecreatefromjpeg ($chemin5); 
                        $image6=imagecreatefromjpeg ($chemin6);  
                        // récupérer les dimensions de l'image la largeur et langueur
                        $width1=imagesx($image1);
                        $height1=imagesy($image1);
                        // image 2
                        $width2=imagesx($image2);
                        $height2=imagesy($image2);
                        // image3
                        $width3=imagesx($image3);
                        $height3=imagesy($image3);
                        // image 4
                        $width4=imagesx($image4);
                        $height4=imagesy($image4);
                        // image 5
                        $width5=imagesx($image5);
                        $height5=imagesy($image5);
                        // image 6
                        $width6=imagesx($image6);
                        $height6=imagesy($image6);
                        // déclarer les dimensions ou l'en souhaite redimensionner l'image
                        $new_width=380;
                        $new_height=380;
                        // Création d'une image vide
                        $thumb1=imagecreatetruecolor($new_width,$new_height);
                        $thumb2=imagecreatetruecolor($new_width,$new_height);   
                        $thumb3=imagecreatetruecolor($new_width,$new_height); 
                        $thumb4=imagecreatetruecolor($new_width,$new_height); 
                        $thumb5=imagecreatetruecolor($new_width,$new_height); 
                        $thumb6=imagecreatetruecolor($new_width,$new_height); 
                        // Ajouter l'image voulu dans la nouvelle image créer    
                imagecopyresized ($thumb1,$image1,0,0,0,0,$new_width,$new_height,$width1,$height1);
                imagecopyresized ($thumb2,$image2,0,0,0,0,$new_width,$new_height,$width2,$height2);
                imagecopyresized ($thumb3,$image3,0,0,0,0,$new_width,$new_height,$width3,$height3);
                imagecopyresized ($thumb4,$image4,0,0,0,0,$new_width,$new_height,$width4,$height4);
                imagecopyresized ($thumb5,$image5,0,0,0,0,$new_width,$new_height,$width5,$height5);
                imagecopyresized ($thumb6,$image6,0,0,0,0,$new_width,$new_height,$width6,$height6);
                        // L'affichgeb de l'image
                        imagejpeg($thumb1,$chemin1);
                        imagejpeg($thumb2,$chemin2);
                        imagejpeg($thumb3,$chemin3);
                        imagejpeg($thumb4,$chemin4);
                        imagejpeg($thumb5,$chemin5);
                        imagejpeg($thumb6,$chemin6);
                        // Libération de la mémoire
                        imagedestroy($image1);
                        imagedestroy($image2);         
                        imagedestroy($image3);
                        imagedestroy($image4);
                        imagedestroy($image5);
                        imagedestroy($image6);
                        $pictur1=$url1.'.'.$extensionUpload1;
                        $pictur2=$url2.'.'.$extensionUpload2;
                        $pictur3=$url3.'.'.$extensionUpload3;
                        $pictur4=$url4.'.'.$extensionUpload4;
                        $pictur5=$url5.'.'.$extensionUpload5;
                        $pictur6=$url6.'.'.$extensionUpload6;
                    addClassifiedBuy($type,$typeBien,$pictur1,$pictur2,$pictur3,$pictur4,
                $pictur5,$pictur6,$description,$ville,$departement,$prix,$typeConstruction,
                $anneeConstruction,$surfaceTotal,$surfaceHabitable,$surfaceTerrain,$nombrePiece,
                $taxeFonciere,$travauxRecent,$travauxPrevoir,$equipement,$chauffage,$eauChaude,
                $plus);
               header('Location:classified.php?id='.$_SESSION['id_user']);
                }                  
        }
}   


 // Sélection et affichage du template PHTML.
$template = 'addClassifiedBuy';
include 'layout.phtml';      

