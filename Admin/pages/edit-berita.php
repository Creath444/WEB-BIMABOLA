<?php 
include 'config/koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM tbl_berita WHERE id_berita='$id'";
$result = mysqli_query($dbhost, $query);

while ($data = mysqli_fetch_array($result)) {
  
?>
<div class="container-fluid py-1 px-3">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-body px-0 pb-2">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Edit Berita</h6>
          </div>
        </div>
        <div class="p-4">
          <form method="POST" action="proses/edit.php" enctype="multipart/form-data">
            <div class="container">
              <div class="row">
                <div class="col-5">
                  <div class="input-group input-group-static mb-4">
                    <label class="form-label">Judul</label>
                    <input type="hidden" name="id_berita" class="form-control" value="<?php echo $data['id_berita'] ?>">
                    <input type="text" name="judul" class="form-control" value="<?php echo $data['judul'] ?>">
                  </div>
                </div>
                <div class="col-3">
                  <div class="input-group input-group-static mb-4">
                    <label class="form-label">Penulis</label>
                    <input type="text" name="penulis" class="form-control" value="<?php echo $data['penulis'] ?>">
                  </div>
                </div>
                <div class="col-2">
                  <div class="input-group input-group-static mb-4">
                   <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                    <option value="<?php echo $data['kategori']?>"hidden ><?php echo $data['kategori'] ?></option>
                    <option value="<?php echo $data['kategori']?>">Liga Indonesia</option>
                    <option value="<?php echo $data['kategori']?>">Tim Nasional</option>
                  </select>
                </div>
              </div>
              <div class="col-2">
                <input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal'] ?>">
              </div>
            </div>
            <div class="input-group input-group-dynamic">
              <textarea name="isi" class="form-control" rows="5" placeholder="Ketik disini..." spellcheck="false"><?php echo $data['isi']; ?></textarea>
            </div>
            <br>
            <div class="container">
              <div class="row">
                <div class="col-sm-9">
                  <button type="button" class="btn btn-primary btn-sm w-100"><input type="file" name="gambar" value="<?php echo $data['gambar'] ?>" class="form-control text-light"></button>
                </div>
                <div class="col-sm-3">
                  <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                  <a href="?page=berita"><button type="button" class="btn btn-light btn-lg">X</button></a>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<?php } ?>