<?php  
//buka koneksi diawal halaman
error_reporting(E_ERROR | E_PARSE);

$c = new mysqli("localhost", "root", "", "fashion_shop");
if ($c->connect_errno) {
	echo json_encode(array('result' => 'ERROR', 'message' => 'Failed to connect DB'));
	die();
}

//$mysqli->close();
?>