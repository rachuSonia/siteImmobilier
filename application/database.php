<?php

// fonction pour se connecter a la base de donnée
function createconnection(){
    $pdo=new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

// fonction qui insert les données d'un utilisateur pour prendre rendez-vous pour une estimation
function estimation($typeBien,$ville,$adress,$description,$civilite,$firstName,$lastName,$email,$phone){
    $pdo=createconnection();
    $req=$pdo->prepare("INSERT INTO `estimation` (`typeBien`,`ville`,`adresse`,`description_projet`,`civilite`,`prenom`,`nom`,`email`,`telephone`)
                                            VALUES (:typeBien,:ville,:adresse,:description_projet,:civilite,:prenom,:nom,:email,:telephone)");

    $req->execute(array(
        ':typeBien'=>$typeBien,
        ':ville'=>$ville,
        ':adresse'=>$adress,
        ':description_projet'=>$description,
        ':civilite'=>$civilite,
        ':prenom'=>$firstName,
        ':nom'=>$lastName,
        ':email'=>$email,
        'telephone'=>$phone
    ));
}

// fonction qui récupére les données d'un utilisateur par rapport à son id 

function getIdUser($id){
    $pdo=createconnection();
    $req=$pdo->prepare('SELECT * FROM `users` WHERE `id_user`=?');
    $req->execute(array($id));
    $idUser=$req->fetch(PDO::FETCH_ASSOC);
    return $idUser;
}

// fonction qui permet de récupérer les annonces de vente
function listClassifiedBuy(){
    $pdo=createconnection();
    $req=$pdo->prepare('SELECT * FROM `acheter`');

    $req->execute();
    $details=$req->fetchAll(PDO::FETCH_ASSOC);
    return $details;
}


// fonction qui permet de récupérer les annonces de location
function listClassifiedLocation(){
    $pdo=createconnection();
    $req=$pdo->prepare('SELECT * FROM `location`');

    $req->execute();
    $details=$req->fetchAll(PDO::FETCH_ASSOC);
    return $details;
}

// fonction qui récupére les details d'une annonce selectionnée par l'utilisateur en location
function getClassifiedLocation($id){
    $pdo=createconnection();
    $req=$pdo->prepare('SELECT * FROM `location` WHERE id=?');

    $req->execute(array($id));
    $details=$req->fetch(PDO::FETCH_ASSOC);
    return $details;
}

// fonction qui récupére les details d'une annonce selectionnée par l'utilisateur en vente
function getClassifiedBuy($id){
    $pdo=createconnection();
    $req=$pdo->prepare('SELECT * FROM `acheter` WHERE `id`=?');
    $req->execute(array($id));
    $detailsBuy=$req->fetch(PDO::FETCH_ASSOC);
    return $detailsBuy;
}

// fonction qui insert les informations personnel d'un utilisation au moments de l'inscription
function registerUser($picturs,$lastName,$firstName,$birth_date,$pseudo,$password,$email,$adress,$phoneMobil){
    $pdo=createconnection();
    $req=$pdo->prepare('INSERT INTO `users` (`lastName`,`firstName`,`birth_date`,`pseudo`,`password`,`e_mail`,`adress`,`phoneMobile`)
                        VALUES (:lastName,:firstName,:birth_date,:pseudo,:password,:e_mail,:adress,:phoneMobil)');
    $req->execute(array(
        ':lastName'=>$lastName,
        ':firstName'=>$firstName,
        ':birth_date'=>$birth_date,
        ':pseudo'=>$pseudo,
        ':password'=>$password,
        ':e_mail'=>$email,
        ':adress'=>$adress,
        ':phoneMobil'=>$phoneMobil,
    ));                      
}

// fonction qui récupére tout les informations d'un utilisateur
function listUser(){
    $pdo=createconnection();
    $req=$pdo->prepare('SELECT * FROM `users`');
    $req->execute();
    $listUser=$req->fetchAll(PDO::FETCH_ASSOC);
    return $listUser;
}

// fonction qui permet d'ajouter un article inserer par unn utilisateur à la base de donnée
function addArticle($title,$content,$id){
    $pdo=createconnection();
    $req=$pdo->prepare('INSERT INTO `posts` (title,content,date_publication,id_user)
                        VALUES (:title,:content,NOW(),:id_user)');
    $req->execute(array(
        ':title'=>$title,
        ':content'=>$content,
        'id_user'=>$id
    ));
}

// fonction qui permet de récuperer tout les articles d'un utilisateur et les afficher
function listPosts(){
    $pdo=createconnection();
    $req=$pdo->prepare('SELECT `id_post`,`title`,`content`,`date_publication`,`pseudo` FROM `posts`
                        JOIN `users` ON `users`.`id_user`=`posts`.`id_user`');
    $req->execute();
    $posts=$req->fetchAll(PDO::FETCH_ASSOC);
    return $posts;
}

// fonction qui permet de recuperer un detail d'un article d'un utilisateur
function getArticleUser($id){
    $pdo=createConnection();
	$req=$pdo->prepare('SELECT * FROM `posts` JOIN `users` ON `users`.`id_user`=`posts`.`id_user` WHERE `posts`.`id_post`= ?');
	$req->execute(array($id));
	$data=$req->fetchAll(PDO::FETCH_ASSOC);
	return $data;
}

// fonction qui pemet de d'inserer des commentaire ajouter par un utilisateur
function addComment($id,$pseudo,$comment){
    $pdo=createconnection();
    $req=$pdo->prepare('INSERT INTO `comments` (`name`,`comment`,`date_publication`,`id_post`)
                        VALUES (:pseudo,:comment,NOW(),:id_post)');
    $req->execute(array(
        ':pseudo'=>$pseudo,
        ':comment'=>$comment,
        ':id_post'=>$id
    ));
}

// fonction qui permet de recuperer les commentaire et les afficher
function getComment($id){
    $pdo=createConnection();
	$req=$pdo->prepare('SELECT * FROM `comments` WHERE `id_post`=?');
	$req->execute(array($id));
	$getcommentaire=$req->fetchAll(PDO::FETCH_ASSOC);
	return $getcommentaire;
}

// fontion qui permet de supprimer un commentaire
function deleteComment($id){
    $pdo=createConnection();
    $req=$pdo->prepare('DELETE FROM `comments` WHERE `id_comment`=?');
	$req->execute(array($id));
}

// fonction qui permet à un utilisateur de editer le titre de son article
function updateTitleArticle($newTitle,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `posts` SET `title`=? WHERE `id_post`=?');
	$req->execute(array($newTitle,$id));
}

// fonction qui permet à un utilisateur de editer le contenue de son article
function updateContentArticle($newContent,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `posts` SET `content`=? WHERE `id_post`=?');
	$req->execute(array($newContent,$id));
}

// fonction qui permet de supprimer son article
function delteArticle($id){
	$pdo=createConnection();
	$req=$pdo->prepare('DELETE FROM `posts` WHERE `id_post`=?');
	$req->execute(array($id));
}

// fonction qui permet de supprimer une annonce de vente
function delteClassifiedBuy($id){
	$pdo=createConnection();
	$req=$pdo->prepare('DELETE FROM `acheter` WHERE `id`=?');
	$req->execute(array($id));
}

// fonction qui permet de supprimer une annonce de location
function delteClassifiedLocation($id){
	$pdo=createConnection();
	$req=$pdo->prepare('DELETE FROM `location` WHERE `id`=?');
	$req->execute(array($id));
}

// fonction qui permet d'ajouter à l'administrateur une annonce de vente a la base de donnée
function addClassifiedBuy($type,$typeBien,$photo1,$photo2,$photo3,$photo4,
$photo5,$photo6,$description,$ville,$departement,$prix,$typeConstruction,$anneeConstruction,
$surfaceTotal,$surfaceHabitable,$surfaceTerrain,$nombrePiece,$taxeFonciere,$travauxRecent,
$travauxPrevoir,$equipement,$chauffage,$eauChaude,$plus){
    $pdo=createConnection();
    $req=$pdo->prepare("INSERT INTO `acheter`(`type`,`typeBien`,`photo1`,`photo2`,`photo3`,`photo4`,
                `photo5`,`photo6`,`description`,`ville`,`departement`,`prix`,`typeConstruction`,
                `anneeConstruction`,`surfaceTotal`,`surfaceHabitable`,`surfaceTerrain`,
                `nombrePiece`,`taxeFonciere`,`travauxRecent`,`travauxPrevoir`,`equipement`,
                `chauffage`,`eauChaude`,`plus`)
                VALUES (:type,:typeBien,:photo1,:photo2,:photo3,:photo4,:photo5,:photo6,:description,
                :ville,:departement,:prix,:typeConstruction,:anneeConstruction,:surfaceTotal,
                :surfaceHabitable,:surfaceTerrain,:nombrePiece,:taxeFonciere,:travauxRecent,
                :travauxPrevoir,:equipement,:chauffage,:eauChaude,:plus)");
    $req->execute(array(
        ':type'=>$type,
        ':typeBien'=>$typeBien,
        ':photo1'=>$photo1,
        ':photo2'=>$photo2,
        ':photo3'=>$photo3,
        ':photo4'=>$photo4,
        ':photo5'=>$photo5,
        ':photo6'=>$photo6,
        ':description'=>$description,
        ':ville'=>$ville,
        ':departement'=>$departement,
        ':prix'=>$prix,
        ':typeConstruction'=>$typeConstruction,
        ':anneeConstruction'=>$anneeConstruction,
        ':surfaceTotal'=>$surfaceTotal,
        ':surfaceHabitable'=>$surfaceHabitable,
        ':surfaceTerrain'=>$surfaceTerrain,
        ':nombrePiece'=>$nombrePiece,
        ':taxeFonciere'=>$taxeFonciere,
        ':travauxRecent'=>$travauxRecent,
        ':travauxPrevoir'=>$travauxPrevoir,
        ':equipement'=>$equipement,
        ':chauffage'=>$chauffage,
        ':eauChaude'=>$eauChaude,
        ':plus'=>$plus

    ));
 }

// fonction qui permet d'ajouter à l'administrateur une annonce de location a la base de donnée
function addClassifiedLocation($type,$typeAppartement,$photo1,$photo2,$photo3,$photo4,$photo5,
    $photo6,$description,$ville,$departement,$surface,$surfaceHabitable,$nombrePiece,
    $typeConstruction,$anneeConstruction,$price,$provisionCharge,$travauxRecent,$travausPrevoir,
    $honoraireCharge,$constitutionDossier,$etatDesLieux,$depotGarantie,$chauffage,$eauChaude){
        $pdo=createConnection();
        $req=$pdo->prepare("INSERT INTO `location` (`type`,`typeAppartement`,`photo1`,`photo2`,
             `photo3`,`photo4`,`photo5`,`photo6`,`description`,`ville`,`departement`,`surface`,
             `surfaceHabitable`,`nombrePiece`,`typeConstruction`,`anneeConstruction`,`price`,
             `provisionCharge`,`travauxRecent`,`travausPrevoir`,`honoraireCharge`,
             `constitutionDossier`,`etatDesLieux`,`depotGarantie`,`chauffage`,`eauChaude`)
            VALUES(:type,:typeAppartement,:photo1,:photo2,:photo3,:photo4,:photo5,:photo6,
            :description,:ville,:departement,:surface,:surfaceHabitable,:nombrePiece,
            :typeConstruction,:anneeConstruction,:price,:provisionCharge,:travauxRecent,
            :travausPrevoir,:honoraireCharge,:constitutionDossier,:etatDesLieux,:depotGarantie,
            :chauffage,:eauChaude)");
            $req->execute(array(
                ':type'=>$type,
                ':typeAppartement'=>$typeAppartement,
                ':photo1'=>$photo1,
                ':photo2'=>$photo2,
                ':photo3'=>$photo3,
                ':photo4'=>$photo4,
                ':photo5'=>$photo5,
                ':photo6'=>$photo6,
                ':description'=>$description,
        ':ville'=>$ville,
        ':departement'=>$departement,
        ':surface'=>$surface,
        ':surfaceHabitable'=>$surfaceHabitable,
        ':nombrePiece'=>$nombrePiece,
        ':typeConstruction'=>$typeConstruction,
        ':anneeConstruction'=>$anneeConstruction,
        ':price'=>$price,
        ':provisionCharge'=>$provisionCharge,
        ':travauxRecent'=>$travauxRecent,
        ':travausPrevoir'=>$travausPrevoir,
        ':honoraireCharge'=>$honoraireCharge,
        ':constitutionDossier'=>$constitutionDossier,
        ':etatDesLieux'=>$etatDesLieux,
        ':depotGarantie'=>$depotGarantie,
        ':chauffage'=>$chauffage,
        ':eauChaude'=>$eauChaude
    ));
                }


// Les fonction qui permettent de modifier une annonce de vente

function updateClassifiedBuyType($newtype,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `type`=? WHERE `id`=?');
	$req->execute(array($newtype,$id));
}

function updateClassifiedBuyTypeAppart($newtypeBien,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `typeBien`=? WHERE `id`=?');
	$req->execute(array($newtypeBien,$id));
}

function updateClassifiedBuyDescription($newDescription,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `description`=? WHERE `id`=?');
	$req->execute(array($newDescription,$id));
}

function updateClassifiedBuyDepartement($newDepartement,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `departement`=? WHERE `id`=?');
	$req->execute(array($newDepartement,$id));
}

function updateClassifiedBuyCity($newcity,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `ville`=? WHERE `id`=?');
	$req->execute(array($newcity,$id));
}

function updateClassifiedBuyPrice($newPrice,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `prix`=? WHERE `id`=?');
	$req->execute(array($newPrice,$id));
}
function updateClassifiedBuyTypeConstruction($newTypeConstruction,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `typeConstruction`=? WHERE `id`=?');
	$req->execute(array($newTypeConstruction,$id));
}
function updateClassifiedBuyAnneeConstruction($newAnneeConstruction,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `anneeConstruction`=? WHERE `id`=?');
	$req->execute(array($newAnneeConstruction,$id));
}
function updateClassifiedBuySurfaceTotal($newSurfaceTotal,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `surfaceTotal`=? WHERE `id`=?');
	$req->execute(array($newSurfaceTotal,$id));
}
function updateClassifiedBuySurfaceHabitable($newSurfaceHabitable,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `surfaceHabitable`=? WHERE `id`=?');
	$req->execute(array($newSurfaceHabitable,$id));
}
function updateClassifiedBuySurfaceTerrain($newSurfaceTerrain,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `surfaceTerrain`=? WHERE `id`=?');
	$req->execute(array($newSurfaceTerrain,$id));
}
function updateClassifiedBuyNombrePiece($newNombrePiece,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `nombrePiece`=? WHERE `id`=?');
	$req->execute(array($newNombrePiece,$id));
}
function updateClassifiedBuyTaxeFonciere($newTaxeFonciere,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `taxeFonciere`=? WHERE `id`=?');
	$req->execute(array($newTaxeFonciere,$id));
}

function updateClassifiedBuyTravauxRecent($newTravauxRecent,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `travauxRecent`=? WHERE `id`=?');
	$req->execute(array($newTravauxRecent,$id));
}

function updateClassifiedBuyTravauxPrevoir($newTravauxPrevoir,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `travauxPrevoir`=? WHERE `id`=?');
	$req->execute(array($newTravauxPrevoir,$id));
}
function updateClassifiedBuyEquipement($newEquipement,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `equipement`=? WHERE `id`=?');
	$req->execute(array($newEquipement,$id));
}
function updateClassifiedBuyChauffage($newChauffage,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `chauffage`=? WHERE `id`=?');
	$req->execute(array($newChauffage,$id));
}
function updateClassifiedBuyEauChaude($newEauChaude,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `eauChaude`=? WHERE `id`=?');
	$req->execute(array($newEauChaude,$id));
}
function updateClassifiedBuyPlus($newPlus,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `plus`=? WHERE `id`=?');
	$req->execute(array($newPlus,$id));
}
function updateClassifiedBuyPictur_one($newPictur_one,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `photo1`=? WHERE `id`=?');
	$req->execute(array($newPictur_one,$id));
}
function updateClassifiedBuyPictur_too($newPictur_too,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `photo2`=? WHERE `id`=?');
	$req->execute(array($newPictur_too,$id));
}
function updateClassifiedBuyPictur_three($newPictur_three,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `photo3`=? WHERE `id`=?');
	$req->execute(array($newPictur_three,$id));
}
function updateClassifiedBuyPictur_foor($newPictur_foor,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `photo4`=? WHERE `id`=?');
	$req->execute(array($newPictur_foor,$id));
}
function updateClassifiedBuyPictur_five($newPictur_five,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `photo5`=? WHERE `id`=?');
	$req->execute(array($newPictur_five,$id));
}
function updateClassifiedBuyPictur_six($newPictur_six,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `acheter` SET `photo6`=? WHERE `id`=?');
	$req->execute(array($newPictur_six,$id));
}



// Les fonction qui permettent de modifier une annonce de location

function updateClassifiedLocationType($newtype,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `type`=? WHERE `id`=?');
	$req->execute(array($newtype,$id));
}

function updateClassifiedLocationTypeAppart($newTypeAppartement,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `typeAppartement`=? WHERE `id`=?');
	$req->execute(array($newTypeAppartement,$id));
}

function updateClassifiedLocationDescription($newDescription,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `description`=? WHERE `id`=?');
	$req->execute(array($newDescription,$id));
}

function updateClassifiedLocationCity($newCity,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `ville`=? WHERE `id`=?');
	$req->execute(array($newCity,$id));
}
function updateClassifiedLocationDepartement($newDepartement,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `departement`=? WHERE `id`=?');
	$req->execute(array($newDepartement,$id));
}
function updateClassifiedLocationArea($newArea,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `surface`=? WHERE `id`=?');
	$req->execute(array($newArea,$id));
}
function updateClassifiedLocationAreaHabitable($newSurfaceHabitable,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `surfaceHabitable`=? WHERE `id`=?');
	$req->execute(array($newSurfaceHabitable,$id));
}
function updateClassifiedLocationNombrePiece($newNombrePiece,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `nombrePiece`=? WHERE `id`=?');
	$req->execute(array($newNombrePiece,$id));
}
function updateClassifiedLocationTypeConstruction($newTypeConstruction,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `typeConstruction`=? WHERE `id`=?');
	$req->execute(array($newNomnewTypeConstructionbrePiece,$id));
}
function updateClassifiedLocationAnneeConstruction($newAnneeConstruction,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `anneeConstruction`=? WHERE `id`=?');
	$req->execute(array($newAnneeConstruction,$id));
}
function updateClassifiedLocationPrice($newPrice,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `price`=? WHERE `id`=?');
	$req->execute(array($newPrice,$id));
}
function updateClassifiedLocationProvisionCharge($newProvisionCharge,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `provisionCharge`=? WHERE `id`=?');
	$req->execute(array($newProvisionCharge,$id));
}
function updateClassifiedLocationTravauxRecent($newTravauxRecent,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `travauxRecent`=? WHERE `id`=?');
	$req->execute(array($newTravauxRecent,$id));
}
function updateClassifiedLocationTravauxPrevoir($newTravauxPrevoir,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `travausPrevoir`=? WHERE `id`=?');
	$req->execute(array($newTravauxPrevoir,$id));
}
function updateClassifiedLocationHnoraireCharge($newHnoraireCharge,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `honoraireCharge`=? WHERE `id`=?');
	$req->execute(array($newHnoraireCharge,$id));
}
function updateClassifiedLocationConstitutionDossier($newConstitutionDossier,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `constitutionDossier`=? WHERE `id`=?');
	$req->execute(array($newConstitutionDossier,$id));
}
function updateClassifiedLocationEtatDesLieux($newEtatDesLieux,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `etatDesLieux`=? WHERE `id`=?');
	$req->execute(array($newEtatDesLieux,$id));
}
function updateClassifiedLocationDepotGarantie($newDepotGarantie,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `depotGarantie`=? WHERE `id`=?');
	$req->execute(array($newDepotGarantie,$id));
}
function updateClassifiedLocationChauffage($newChauffage,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `chauffage`=? WHERE `id`=?');
	$req->execute(array($newChauffage,$id));
}
function updateClassifiedLocationEauChaude($newEauChaude,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `eauChaude`=? WHERE `id`=?');
	$req->execute(array($newEauChaude,$id));
}
function updateClassifiedLocationPictur_one($newPictur_one,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `photo1`=? WHERE `id`=?');
	$req->execute(array($newPictur_one,$id));
}
function updateClassifiedLocationPictur_too($newPictur_too,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `photo2`=? WHERE `id`=?');
	$req->execute(array($newPictur_too,$id));
}
function updateClassifiedLocationPictur_three($newPictur_three,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `photo3`=? WHERE `id`=?');
	$req->execute(array($newPictur_three,$id));
}
function updateClassifiedLocationPictur_foor($newPictur_foor,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `photo4`=? WHERE `id`=?');
	$req->execute(array($newPictur_foor,$id));
}
function updateClassifiedLocationPictur_five($newPictur_five,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `photo5`=? WHERE `id`=?');
	$req->execute(array($newPictur_five,$id));
}
function updateClassifiedLocationPictur_six($newPictur_six,$id){
    $pdo=createConnection();
    $req=$pdo->prepare('UPDATE `location` SET `photo6`=? WHERE `id`=?');
	$req->execute(array($newPictur_six,$id));
}
?>