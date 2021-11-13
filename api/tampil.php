<?php
require_once('../config/koneksi.php');
$myArray = array();
if ($result = mysqli_query($conn, "SELECT * FROM mobil ORDER BY id ASC")) {
    	while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        	$myArray[] = $row;
    	}
	mysqli_close($conn);
    	echo json_encode($myArray);
		header('access-control-allow-mehtods: GET');
        header('access-control-allow-origin: *');
		header('Content-Type: application/json; charset=utf-8');
}