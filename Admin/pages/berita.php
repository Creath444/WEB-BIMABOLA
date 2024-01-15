<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Data Berita</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="text-end">
            <a class="btn bg-gradient-dark mb-0" href="index.php?page=tambah-berita"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Berita</a>
          </div>
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include 'config/koneksi.php';
                $query = "SELECT * FROM tbl_berita";
                $result = mysqli_query($dbhost, $query);
                while($row = mysqli_fetch_array($result)){
                  ?>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <a href="assets/img/<?php echo $row['gambar'] ?>" target="blink"><img src="assets/img/<?php echo $row['gambar'] ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="<?php echo $row['gambar'] ?>"></a>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <a class="text-dark text-gradient mb-0 cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat" href="../?page=blog-detail&id=<?php echo $row['id_berita'] ?>" target="blink">
                            <h6 class="mb-0 text-sm"><?php echo $row['judul'] ?></h6>
                          </a>
                          <p class="text-xs text-secondary mb-0"><?php echo $row['penulis']; ?></p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0"><?php echo $row['kategori'] ?></p>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?php echo $row['tanggal'] ?></span>
                    </td>
                    <td class="align-middle">
                      <div class="ms-auto text-end">
                        <a class="btn btn-link text-dark px-3 mb-0" href="?page=edit-berita&id=<?php echo $row['id_berita']?>"><i class="material-icons text-sm me-2 cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">edit</i></a>
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="proses/hapus.php?id=<?php echo $row['id_berita']?>"><i class="material-icons text-sm me-2 cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">delete</i></a>
                      </div>
                    </td>
                  </tr>
                <?php }; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>