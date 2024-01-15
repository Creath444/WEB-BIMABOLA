<?php
include '../config/koneksi.php';

if (isset($_GET['id'])) {
//mengambil id yang ingin dihapus
	$id = $_GET['id'];

	$query = "SELECT * FROM tbl_berita WHERE id_berita = '$id'";
	$hasil_query = mysqli_query($dbhost, $query);
	$data = mysqli_fetch_array($hasil_query);
	$gambar = $data['gambar'];
	$path = '../assets/img/'.$gambar;
	if(file_exists($path)){
		unlink($path);
	}

//jalankan query DELETE untuk menghapus data
	$query = "DELETE FROM tbl_berita WHERE id_berita='$id' ";
	$hasil_query = mysqli_query($dbhost, $query);

//periksa query, apakah ada kesalahan
	if ($hasil_query) {
		echo '<script language="javascript" type="text/javascript">
		alert("Hapus gambar berhasil !");</script>';
		echo "<meta http-equiv='refresh' content='0; url=../index.php?page=berita'>";
	} else {
		echo '<script language="javascript" type="text/javascript">
		alert("Hapus gambar gagal !");</script>';
		echo "<meta http-equiv='refresh' content='0; url=../index.php?page=berita'>";
	}
}

?>