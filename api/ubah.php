<?php
require_once('../config/koneksi.php');
parse_str(file_get_contents('php://input'), $value);

$id =  $value['id'];
$nama_mobil = $value['nama_mobil'];
$tipe_mobil = $value['tipe_mobil'];
$harga = $value['harga'];
$stok = $value['stok'];


    $sql = mysqli_query($conn, "UPDATE mobil SET nama_mobil = '$nama_mobil', tipe_mobil = '$tipe_mobil', harga = '$harga', stok = '$stok' WHERE id = '$id'");
    if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
      
    } else {
        echo json_encode(array('RESPONSE' => 'FAILED'));
    } 