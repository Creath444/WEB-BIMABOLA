<?php 

include '../config/koneksi.php';

if (isset($_POST['submit'])) {

 $id           = $_POST['id_berita'];
 $kategori     = $_POST['kategori'];
 $judul        = $_POST['judul'];
 $penulis      = $_POST['penulis'];
 $isi          = $_POST['isi'];
 $tanggal      = $_POST['tanggal'];

// ambil data file
 $rand = rand(1,999);
 $file_gambar  = $_FILES['gambar']['name'];
 $tmp_name     = $_FILES['gambar']['tmp_name'];
 $ukuran     = $_FILES['gambar']['size'];
 $ext      = pathinfo($file_gambar, PATHINFO_EXTENSION);

// folder gambar   
 $dirUpload = '../assets/img/'.$rand.'_'.$file_gambar;


 if($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
  }else{
    if($ukuran < 1044070){    
    // membuat format nama random file
      $gambar = $rand.'_'.$file_gambar;

    // memindahkan file ke folder
      if (move_uploaded_file($tmp_name,$dirUpload)) {
      // memasukan file ke database
        $query  = "UPDATE tbl_berita SET kategori = '$kategori', judul = '$judul', penulis = '$penulis', isi = '$isi', tanggal = '$tanggal', gambar = '$gambar'";
        $query .= "WHERE id_berita = '$id'";
        $result = mysqli_query($dbhost, $query);

        if(!$result){
          die ("Query gagal dijalankan: ".mysqli_errno($dbhost)." - ".mysqli_error($dbhost));
        } else {
          //hapus gambar di folder
          $query = "SELECT * FROM tbl_berita WHERE id_berita = '$id'";
          $hasil_query = mysqli_query($dbhost, $query);
          $data = mysqli_fetch_array($hasil_query);
          $gambar = $data['gambar'];
          $path = '../assets/img/'.$gambar;
          if(file_exists($path)){
            unlink($path);
          }
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
