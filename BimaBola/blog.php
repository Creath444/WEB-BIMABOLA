<?php 

$sql = "SELECT * FROM tbl_berita";
$query = mysqli_query($dbhost, $sql);
?>
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php 
                    while ($berita= mysqli_fetch_array($query)):?>
                       <article class="blog_item">
                        <div class="blog_item_img">
                            <img style="width: 400px;" class="card-img rounded-0" src="Admin/assets/img/<?php echo $berita['gambar'] ?>" alt="">
                            <a href="?page=blog-detail&id=<?php echo $berita['id_berita'] ?>" class="blog_item_date">
                                <p><?php echo $berita['kategori'] ?></p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="?page=blog-detail&id=<?php echo $berita['id_berita'] ?>">
                                <h2><?php echo $berita['judul'] ?></h2>
                            </a>
                            <p class="teks-pendek"><?php echo $berita['isi'] ?></p>
                            <ul class="blog-info-link">
                                <li><i class="fa fa-user"></i><?php echo $berita['penulis'].', '.$berita['tanggal'] ?></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                <?php endwhile; ?>

                <nav class="blog-pagination justify-content-center d-flex">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Previous">
                                <i class="ti-angle-left"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item active">
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link" aria-label="Next">
                                <i class="ti-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="blog_right_sidebar">
                <aside class="single_sidebar_widget search_widget">
                    <form action="#">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder='Search Keyword'
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Search Keyword'">
                                <div class="input-group-append">
                                    <button class="btns" type="button"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                        type="submit">Search</button>
                    </form>
                </aside>

                <aside class="single_sidebar_widget post_category_widget">
                    <h4 class="widget_title">Category</h4>
                    <ul class="list cat-list">
                        <li>
                            <a href="#" class="d-flex">
                                <p>Liga Indonesia</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="d-flex">
                                <p>Tim Nasional</p>
                            </a>
                        </li>
                    </ul>
                </aside>

                <aside class="single_sidebar_widget tag_cloud_widget">
                    <h4 class="widget_title">Tag Clouds</h4>
                    <ul class="list">
                        <li>
                            <a href="#">Liga Indonesia</a>
                        </li>
                        <li>
                            <a href="#">Tim Nasional</a>
                        </li>
                    </ul>
                </aside>

                <aside class="single_sidebar_widget newsletter_widget">
                    <h4 class="widget_title">Newsletter</h4>

                    <form action="#">
                        <div class="form-group">
                            <input type="email" class="form-control" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                        type="submit">Subscribe</button>
                    </form>
                </aside>
            </div>
        </div>
    </div>
</div>
</section>
