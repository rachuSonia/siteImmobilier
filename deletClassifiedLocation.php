<?php

require('application/database.php');
$id=$_GET['id'];
delteClassifiedLocation($id);
header('Location:classified.php?id='.$id);



?>