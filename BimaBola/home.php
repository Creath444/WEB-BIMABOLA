<?php 

$sql = "SELECT * FROM tbl_berita ORDER BY tbl_berita.tanggal DESC";
$query = mysqli_query($dbhost,$sql);
?>

<!-- Trending Area Start -->
<div class="trending-area fix pt-25 gray-bg">
    <div class="container">
        <div class="trending-main">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    <div class="slider-active">
                        <!-- Single -->
                        <!-- CAROUSEL -->
                        <?php while ($berita = mysqli_fetch_array($query)): ?>
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="Admin/assets/img/<?php echo $berita['gambar'] ?>" alt="">
                                        <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms"><?php echo $berita['kategori'] ?></span>
                                            <h2><a href="?page=blog-detail&id=<?php echo $berita['id_berita'] ?>" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">
                                                <?php echo $berita['judul'] ?>
                                            </a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by <?php echo $berita['penulis'].' - '.$berita['tanggal'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <!-- end single -->
                    </div>
                </div>
                <!-- Right content -->
                <div class="col-lg-4">
                    <!-- Trending Top -->
                    <!-- KATEGORI -->
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="trending-top mb-30">
                                <?php 
                                $kategori = 'Liga Indonesia';
                                $sql = "SELECT * FROM tbl_berita ORDER BY tbl_berita.kategori='$kategori' DESC";
                                $query = mysqli_query($dbhost,$sql);
                                $kategori_liga = mysqli_fetch_array($query);
                                ?>
                                <div class="trend-top-img">
                                    <img src="Admin/assets/img/<?php echo $kategori_liga['gambar'] ?>" alt="">
                                    <div class="trend-top-cap trend-top-cap2">
                                        <span class="bgb"><?php echo $kategori_liga['kategori'] ?></span>
                                        <h2><a href="?page=blog-detail&id=<?php echo $kategori_liga['id_berita'] ?>"><?php echo $kategori_liga['judul']   ?></a></h2>
                                        <p>by <?php echo $kategori_liga['penulis'].' - '.$kategori_liga['tanggal']  ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="trending-top mb-30">
                                <?php 
                                $kategori = 'Tim Nasional';
                                $sql = "SELECT * FROM tbl_berita ORDER BY tbl_berita.kategori='$kategori' DESC";
                                $query = mysqli_query($dbhost,$sql);
                                $kategori_tim = mysqli_fetch_array($query);
                                ?>
                                <div class="trend-top-img">
                                    <img src="Admin/assets/img/<?php echo $kategori_tim['gambar'] ?>" alt="">
                                    <div class="trend-top-cap trend-top-cap2">
                                        <span class="bgg"><?php echo $kategori_tim['kategori'] ?></span>
                                        <h2><a href="?page=blog-detail&id=<?php echo $kategori_liga['id_berita'] ?>"><?php echo $kategori_tim['judul']   ?></a></h2>
                                        <p>by <?php echo $kategori_tim['penulis'].' - '.$kategori_tim['tanggal']  ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trending Area End -->
<!-- Whats New Start -->
<section class="whats-news-area pt-50 pb-20 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="whats-news-wrapper">
                    <!-- Heading & Nav Button -->
                    <div class="row justify-content-between align-items-end mb-15">
                        <div class="col-xl-4">
                            <div class="section-tittle mb-30">
                                <h3>Whats New</h3>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-9">
                            <div class="properties__button">
                                <!--Nav Button  -->                                            
                                <nav>                                                 
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Liga Indonesia</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tim Nasional</a>
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
                    <!-- Tab content -->
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <?php 
                                $kategori = 'Liga Indonesia';
                                $sql = "SELECT * FROM tbl_berita WHERE kategori='$kategori'";
                                $query = mysqli_query($dbhost,$sql);
                                ?>
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">       
                                    <div class="row">
                                        <!-- Left Details Caption -->
                                        <?php $berita = mysqli_fetch_array($query); ?>
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="whats-news-single mb-40 mb-40">
                                                <div class="whates-img">
                                                    <img src="Admin/assets/img/<?php echo $berita['gambar'] ?>" alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <h4><a href="?page=blog-detail&id=<?php echo $berita['id_berita'] ?>"><?php echo $berita['judul'] ?></a></h4>
                                                    <span>by <?php echo $berita['penulis'].' - '.$berita['tanggal'] ?></span>
                                                    <p class="teks-pendek"><?php echo $berita['isi'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <!-- single -->
                                                <?php 
                                                while ($berita = mysqli_fetch_array($query)):
                                                   ?>
                                                   <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img style="width: 100px" src="Admin/assets/img/<?php echo $berita['gambar'] ?>" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb"><?php echo $berita['kategori'] ?></span>
                                                            <h4><a href="?page=blog-detail&id=<?php echo $berita['id_berita'] ?>"><?php echo $berita['judul'] ?></a></h4>
                                                            <p><?php echo $berita['tanggal'] ?></p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card two -->
                            <?php 
                            $kategori = 'Tim Nasional';
                            $sql = "SELECT * FROM tbl_berita WHERE kategori='$kategori'";
                            $query = mysqli_query($dbhost,$sql);
                            ?>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <!-- Left Details Caption -->
                                    <?php $berita = mysqli_fetch_array($query); ?>
                                    <div class="col-xl-6 col-lg-12">
                                        <div class="whats-news-single mb-40 mb-40">
                                            <div class="whates-img">
                                                <img src="Admin/assets/img/<?php echo $berita['gambar'] ?>" alt="">
                                            </div>
                                            <div class="whates-caption">
                                                <h4><a href="?page=blog-detail&id=<?php echo $berita['id_berita'] ?>"><?php echo $berita['judul'] ?></a></h4>
                                                <span>by <?php echo $berita['penulis'].' - '.$berita['tanggal'] ?></span>
                                                <p class="teks-pendek"><?php echo $berita['isi'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Right single caption -->
                                    <div class="col-xl-6 col-lg-12">
                                        <div class="row">
                                            <!-- single -->
                                            <?php 
                                            while ($berita = mysqli_fetch_array($query)):
                                               ?>
                                               <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                <div class="whats-right-single mb-20">
                                                    <div class="whats-right-img">
                                                        <img style="width: 100px" src="Admin/assets/img/<?php echo $berita['gambar'] ?>" alt="">
                                                    </div>
                                                    <div class="whats-right-cap">
                                                        <span class="colorb"><?php echo $berita['kategori'] ?></span>
                                                        <h4><a href="?page=blog-detail&id=<?php echo $berita['id_berita'] ?>"><?php echo $berita['judul'] ?></a></h4>
                                                        <p><?php echo $berita['tanggal'] ?></p> 
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Nav Card -->
                </div>
            </div>
        </div>
        <!-- Banner -->
        <div class="banner-one mt-20 mb-30">
            <img src="BimaBola/assets/img/gallery/body_card1.png" alt="">
        </div>
    </div>
    <div class="col-lg-4">
        <!-- Flow Socail -->
        <div class="single-follow mb-45">
            <div class="single-box">
                <div class="follow-us d-flex align-items-center">
                    <div class="follow-social">
                        <a href="#"><img src="BimaBola/assets/img/news/icon-fb.png" alt=""></a>
                    </div>
                    <div class="follow-count">  
                        <span>8,045</span>
                        <p>Fans</p>
                    </div>
                </div> 
                <div class="follow-us d-flex align-items-center">
                    <div class="follow-social">
                        <a href="#"><img src="BimaBola/assets/img/news/icon-tw.png" alt=""></a>
                    </div>
                    <div class="follow-count">
                        <span>8,045</span>
                        <p>Fans</p>
                    </div>
                </div>
                <div class="follow-us d-flex align-items-center">
                    <div class="follow-social">
                        <a href="#"><img src="BimaBola/assets/img/news/icon-ins.png" alt=""></a>
                    </div>
                    <div class="follow-count">
                        <span>8,045</span>
                        <p>Fans</p>
                    </div>
                </div>
                <div class="follow-us d-flex align-items-center">
                    <div class="follow-social">
                        <a href="#"><img src="BimaBola/assets/img/news/icon-yo.png" alt=""></a>
                    </div>
                    <div class="follow-count">
                        <span>8,045</span>
                        <p>Fans</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Most Recent Area -->
        <div class="most-recent-area">
            <div class="col-lg-12">
                <div class="home-banner2 d-none d-lg-block">
                    <img src="BimaBola/assets/img/gallery/body_card2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!--   Weekly3-News start -->
<div class="weekly3-news-area pt-80 pb-130">
    <div class="container">
        <div class="weekly3-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-wrapper">
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="weekly3-news-active dot-style d-flex">
                                    <!-- berita ALL -->
                                    <?php 
                                    $sql = "SELECT * FROM tbl_berita";
                                    $query = mysqli_query($dbhost,$sql);
                                    while ($berita = mysqli_fetch_array($query)):?>
                                        <div class="weekly3-single">
                                            <div class="weekly3-img">
                                                <img src="Admin/assets/img/<?php echo $berita['gambar'] ?>" alt="">
                                            </div>
                                            <div class="weekly3-caption">
                                                <h4><a href="latest_news.html"><?php echo $berita['judul'] ?></a></h4>
                                                <p><?php echo $berita['tanggal'] ?></p>
                                            </div>
                                        </div> 
                                        <!-- end berita -->
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>           
<!-- End Weekly-News -->
<!-- banner-last Start -->
<div class="banner-area gray-bg pt-90 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10">
                <div class="banner-one">
                    <img src="BimaBola/assets/img/gallery/body_card3.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-last End -->
