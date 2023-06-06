<?php
include 'pweb.php';
/**
 * @var $connection PDO
*/
$statement = $connection->query("select * from tabelmahasiswa");

$statement->setFetchMode(PDO::FETCH_ASSOC);

$result = $statement->fetchAll();
header('Content-Type: application/json');
echo json_encode($result);
