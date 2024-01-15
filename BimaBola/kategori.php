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
                                        <!-- Right single caption -->
                                        <div class="col-xl-12 col-lg-12">
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
                                    <!-- Right single caption -->
                                    <div class="col-xl-12 col-lg-12">
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