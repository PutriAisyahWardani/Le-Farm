<?php 
require('top.inc.php');

$nama = $con->real_escape_string($_POST['nama']);
$jumlah = $con->real_escape_string($_POST['jumlah']);

$data = array();
$data['error_string'] = array();
$data['inputerror'] = array();
$data['status'] = TRUE;

if($nama == ''){
	$data['inputerror'][] = 'nama';
	$data['error_string'][] = 'Nama wajib di isi';
	$data['status'] = FALSE;
}

if($jumlah == ''){
	$data['inputerror'][] = 'jumlah';
	$data['error_string'][] = 'Jumlah wajib diisi';
	$data['status'] = FALSE;
}

if($data['status'] === FALSE){
	echo json_encode($data);
	exit();
}

$sql=$con->query("INSERT INTO income VALUES ('','$nama','$jumlah',NULL) ");
if ($sql) {
    echo json_encode(array("status" => TRUE));
}
?>