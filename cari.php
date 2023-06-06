<?php
include 'pweb.php';
/**
 * @var $connection PDO

*/

$cari = $_GET['mahasiswa'];

$statement = $connection->query("select * from tabelmahasiswa WHERE nama='$cari'");

$statement->setFetchMode(PDO::FETCH_ASSOC);
$result = $statement->fetchAll();
header('Content-Type: application/json');
if ($result) {
	echo json_encode($result);
}else{
	echo "Tidak Ditemui";
}