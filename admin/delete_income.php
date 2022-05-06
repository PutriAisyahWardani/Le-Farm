<?php 
require('top.inc.php');
$id = $con->real_escape_string($_GET['id']);

$sql=$con->query("DELETE FROM income WHERE id='$id' ");
if ($sql) {
    echo json_encode(array("status" => TRUE));
}
?>