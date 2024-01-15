<?php 

include '../config/koneksi.php';

if (isset($_POST['submit'])) {

	$kategori 	= $_POST['kategori'];
	$judul 		= $_POST['judul'];
	$penulis	= $_POST['penulis'];
	$isi		= $_POST['isi'];
	$tanggal	= $_POST['tanggal'];

// ambil data file
	$rand = rand(1,999);
	$file_gambar 	= $_FILES['gambar']['name'];
	$tmp_name 		= $_FILES['gambar']['tmp_name'];
	$ukuran 		= $_FILES['gambar']['size'];
	$ext 			= pathinfo($file_gambar, PATHINFO_EXTENSION);

// tentukan lokasi file akan dipindahkan		
	$dirUpload = '../assets/img/'.$rand.'_'.$file_gambar;


	if($ext != "jpg" && $ext != "png" && $ext != "jpeg"	&& $ext != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}else{
		if($ukuran < 1044070){		
// membuat format nama random file
			$gambar = $rand.'_'.$file_gambar;

// memindahkan file ke folder
			if (move_uploaded_file($tmp_name,$dirUpload)) {
	// memasukan file ke database
				$insert = mysqli_query($dbhost, "INSERT INTO tbl_berita VALUES('','$kategori','$judul','$penulis','$isi','$tanggal','$gambar')");
				if(!$insert){
					die ("Query gagal dijalankan: ".mysqli_errno($dbhost)." - ".mysqli_error($dbhost));
				} else {
              //tampil alert dan akan redirect ke halaman index.php
              //silahkan ganti index.php sesuai halaman yang akan dituju
					echo "<script>alert('Data berhasil ditambahkan.');window.location='../index.php?page=berita';</script>";
				}
			}

		}else{
			header("location:../index.php?page=berita");
		}
	}
}

?>
