<?php
require_once('../config/koneksi.php');

if (isset($_POST['nama_mobil']) && isset($_POST['tipe_mobil']) && isset($_POST['harga']) && isset($_POST['stok'])) {
	$nama_mobil   	= $_POST['nama_mobil'];
	$tipe_mobil 	= $_POST['tipe_mobil'];
	$harga 			= $_POST['harga'];
	$stok 			= $_POST['stok'];
	$sql = $conn->prepare("INSERT INTO mobil (nama_mobil, tipe_mobil, harga, stok) VALUES (?, ?, ?, ?)");
	$sql->bind_param('ssdd', $nama_mobil, $tipe_mobil, $harga, $stok);
	$sql->execute();
	if ($sql) {
		echo json_encode(array('RESPONSE' => 'SUCCESS'));
		header('access-control-allow-mehtods: POST');
        header('access-control-allow-origin: *');
	} else {
		echo json_encode(array('RESPONSE' => 'FAILED'));
	}
} else {
	echo "GAGAL";
}