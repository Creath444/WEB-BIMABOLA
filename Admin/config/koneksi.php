<?php 
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = 'kata_sandi';
$DB_NAME = 'web-bimabola';

$dbhost = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
    if (!$dbhost){
          die("Koneksi gagal:".mysqli_connect_error());
    }
?>


