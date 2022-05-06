<?php 
require('top.inc.php');
$id=$_GET['id'];
$query = $con->query("SELECT * FROM income WHERE id = '$id'");
$result = array();
$fetchData = $query->fetch_assoc();
$result = $fetchData;
echo json_encode($result);
?>