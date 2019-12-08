<?php
require('application/database.php');

$id=$_GET['id'];
delteClassifiedBuy($id);
header('Location:classified.php?id='.$id);

?>