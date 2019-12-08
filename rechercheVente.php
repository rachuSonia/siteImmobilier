<?php
require('application/database.php');
session_start();

if(isset($_SESSION['id_user'])){

    $pdo=createconnection();
    $userInfo=getIdUser($_SESSION['id_user']);
}

$_SESSION['type']=$_GET['type'];
$_SESSION['price']=$_GET['price'];
$_SESSION['surface']=$_GET['surface'];
$_SESSION['areaTerrain']=$_GET['areaTerrain'];
$_SESSION['ville']=$_GET['ville'];
$_SESSION['page']=$_GET['page'];

$type=$_SESSION['type'];
$price=$_SESSION['price'];
$area=$_SESSION['surface'];
$areaTerrain=$_SESSION['areaTerrain'];
$city=$_SESSION['ville'];
$page=$_SESSION['page'];


if(isset($page)){
	$currentPage=$page;
}
else{
	$currentPage=1;
}

$prevPage=$currentPage-1;
$nextPage=$currentPage+1;

$pdo=createconnection();

$perPage=4;
$start=($currentPage-1)*$perPage;


$req=$pdo->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM `acheter` WHERE `type`=? AND `prix`<=? AND `surfaceTotal`<=? AND `surfaceTerrain`<=? AND `ville`=?
				ORDER BY `prix` ASC LIMIT $start,$perPage");
$req->execute(array($type,$price,$area,$areaTerrain,$city));
$buy=$req->fetchAll(PDO::FETCH_ASSOC);

$req=$pdo->prepare('SELECT FOUND_ROWS () as `rows`');
$req->execute();
$rowsTotal=$req->fetch(PDO::FETCH_ASSOC);

$rows=$rowsTotal['rows'];

$lastRows=ceil($rows/$perPage);

		if($rows==0){
			header('Location:noClassified.php');
		}



// Sélection et affichage du template PHTML.
$template = 'rechercheVente';
include 'layout.phtml';