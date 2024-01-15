<?php 

$host 		= 'localhost';
$username 	= 'root';
$password	= '';
$dbname		= 'web-bimabola';

$dbhost = mysqli_connect($host,$username,$password,$dbname);
    if (!$dbhost){
          die("Koneksi gagal:".mysqli_connect_error());
    }
?>


