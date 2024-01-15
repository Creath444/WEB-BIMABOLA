<?php 
include 'BimaBola/header.php'; //Page Header
?>

<main>

    <?php 
    include 'Admin/config/koneksi.php'; //Database

    if (isset($_GET['page'])) {
        if ($_GET['page']=='home') {
            include 'BimaBola/home.php';
        }elseif ($_GET['page']=='berita-terbaru') {
            include 'BimaBola/berita-terbaru.php';
        }elseif ($_GET['page']=='kategori') {
            include 'BimaBola/kategori.php';
        }elseif ($_GET['page']=='blog') {
            include 'BimaBola/blog.php';
        }elseif ($_GET['page']=='blog-detail') {
            include 'BimaBola/blog-detail.php';
        }elseif ($_GET['page']=='tentang') {
            include 'BimaBola/tentang.php';
        }else{
            include 'BimaBola/home.php';
        }
    }else{
        include 'BimaBola/home.php';
    }

    ?>
</main>

<?php 
include 'BimaBola/footer.php'; //page Footer
?>