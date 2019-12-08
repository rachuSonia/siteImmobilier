<?php
	require('application/database.php');
	session_start();

	if(isset($_SESSION['id_user'])){

		$pdo=createconnection();
		$userInfo=getIdUser($_SESSION['id_user']);
	}

	$_SESSION['ville']=$_GET['ville'];
	$_SESSION['surface']=$_GET['surface'];
	$_SESSION['type']=$_GET['type'];
	$_SESSION['price']=$_GET['price'];
	$_SESSION['page']=$_GET['page'];

	$ville = $_SESSION['ville'];
	$price = $_SESSION['price'];
	$surface = $_SESSION['surface'];
	$type = $_SESSION['type'];
	$page = $_SESSION['page'];


	if(isset($_SESSION['page'])){
		$currentPage=$_SESSION['page'];
		
	}
	else{
		$currentPage=1;
	}
			
			$prevPage=$currentPage-1;
			$nextPage=$currentPage+1;
	

	
	$pdo=createconnection();
    $perPage=4;
  
	$currentPage=$page;
	$start=($currentPage-1)*$perPage;

    $req=$pdo->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM `location` 
                         WHERE `type`=? AND `ville`=? AND `price`<=? AND `surface`<=?
                         ORDER BY price ASC LIMIT $start,$perPage");

    $req->execute(array($type,$ville,$price,$surface));
	$location=$req->fetchAll(PDO::FETCH_ASSOC);
	
    $req=$pdo->prepare("SELECT FOUND_ROWS () as `rows` ");
    $req->execute();
	$row_result=$req->fetch(PDO::FETCH_ASSOC);
	
    $rows=$row_result['rows'];

	$lastRows=ceil($rows/$perPage);
	
	if($rows==0){
		header('Location:noClassified.php');
	}

// Sélection et affichage du template PHTML.
$template = 'rechercheLocation';
include 'layout.phtml';