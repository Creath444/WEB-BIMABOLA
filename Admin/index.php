<?php include 'pages/header.php';

include 'config/koneksi.php';
session_start();

if($_SESSION['id'] == ''){
  header("Location:login.php");
}

$id = $_SESSION['id'];
$cek = mysqli_query($dbhost,"SELECT * FROM db_login WHERE id_login='$id'");
$row = mysqli_fetch_assoc($cek);
?>
<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="index.php?page=home" target="_blank">
        <button class="btn btn-primary ms-1 font-weight-bold text-white">Administrator <?php echo $row['nama'] ?></button>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="index.php?page=home">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="index.php?page=berita">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Berita</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="?page=profil">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky" id="navbarBlur" data-scroll="true" navbar-scroll="true">
     <!-- SEARCH -->
     <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <div class="input-group input-group-outline">
          <label class="form-label">Cari disini...</label>
          <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>
      </nav>
    </div>
    <div class="container-fluid py-1 px-3 justify-content-end">
      <ul class="navbar-nav  justify-content-end">
        <!-- SIGN IN -->
        <li class="nav-item d-flex align-items-center">
          <a href="proses/logout.php" class="nav-link text-body font-weight-bold px-0">
            <i class="btn btn-primary">Logout</i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <hr>
  <!-- End Navbar -->
  <!-- START CONTENT -->
  <?php 
  if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
      $page = 'Dashboard';
      include 'pages/home.php';
    }elseif($_GET['page'] == 'berita'){
      $page = 'Berita';
      include 'pages/berita.php';
    }elseif($_GET['page'] == 'tambah-berita'){
      $page = 'Tambah Berita';
      include 'pages/tambah-berita.php';
    }elseif($_GET['page'] == 'edit-berita'){
      $page = 'Edit Berita';
      include 'pages/edit-berita.php';
    }elseif($_GET['page'] == 'edit-data'){
      include 'detail-data.php';
    }elseif($_GET['page'] == 'profil'){
      include 'pages/profil.php';
    }else{
      $page = 'Dashboard';
      include 'pages/home.php';
    }
  }else{
    $page = 'Dashboard';
    include 'pages/home.php';
  } 
  ?>
  <!-- END CONTENT -->
</main>
<div class="fixed-plugin">
  <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
    <i class="material-icons py-2">settings</i>
  </a>
  <div class="card shadow-lg">
    <div class="card-header pb-0 pt-3">
      <div class="float-start">
        <h5 class="mt-3 mb-0">Configuration</h5>
        <p>See our dashboard options.</p>
      </div>
      <div class="float-end mt-4">
        <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <!-- End Toggle Button -->
    </div>
    <hr class="horizontal dark my-1">
    <div class="card-body pt-sm-3 pt-0">
      <!-- Sidebar Backgrounds -->
      <div>
        <h6 class="mb-0">Sidebar Colors</h6>
      </div>
      <a href="javascript:void(0)" class="switch-trigger background-color">
        <div class="badge-colors my-2 text-start">
          <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
        </div>
      </a>
      <!-- Sidenav Type -->
      <div class="mt-3">
        <h6 class="mb-0">Sidenav Type</h6>
        <p class="text-sm">Choose between 2 different sidenav types.</p>
      </div>
      <div class="d-flex">
        <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
        <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
        <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
      </div>
      <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
      <!-- Navbar Fixed -->
      <div class="mt-3 d-flex">
        <h6 class="mb-0">Navbar Fixed</h6>
        <div class="form-check form-switch ps-0 ms-auto my-auto">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
      </div>
      <hr class="horizontal dark my-3">
      <div class="mt-2 d-flex">
        <h6 class="mb-0">Light / Dark</h6>
        <div class="form-check form-switch ps-0 ms-auto my-auto">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
        </div>
      </div>
      <hr class="horizontal dark my-sm-4">
    </div>
  </div>
</div>
<?php include 'pages/footer.php'; ?>