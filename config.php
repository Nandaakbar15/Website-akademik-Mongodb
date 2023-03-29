<?php 
require_once __DIR__ . "/vendor/autoload.php";

$collection = (new MongoDB\Client)->KRS->tbMahasiswa;
$collection2 = (new MongoDB\Client)->KRS->tbDosen;
$collection3 = (new MongoDB\Client)->KRS->tbMatakuliah;
$collection4 = (new MongoDB\Client)->KRS->tbKRS;

?>