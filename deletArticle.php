<?php
	require('application/database.php');

	$id=$_GET['id'];
	delteArticle($id);
	header('Location:adminBlog.php?id='.$id);


?>