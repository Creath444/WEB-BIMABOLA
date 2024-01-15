<div class="container-fluid py-4">
  <div class="row mb-4">
    <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
      <div class="card">
        <div class="card-header pb-0">
          <div class="row">
            <div class="col-lg-6 col-7">
              <h6>Berita Terupdate</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-check text-info" aria-hidden="true"></i>
                <span class="font-weight-bold ms-1">30 done</span> this month
              </p>
            </div>
            <div class="col-lg-6 col-5 my-auto text-end">
              <div class="dropdown float-lg-end pe-4">
                <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-ellipsis-v text-secondary"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Berita</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include 'config/koneksi.php';
                $query = "SELECT * FROM tbl_berita ORDER BY tbl_berita.tanggal DESC";
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