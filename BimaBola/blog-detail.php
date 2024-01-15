<?php 

$id = $_GET['id'];

$tbl_berita = "SELECT * FROM tbl_berita";
$data = mysqli_query($dbhost, $tbl_berita);

$sql = "SELECT * FROM tbl_berita WHERE id_berita = $id";
$query = mysqli_query($dbhost, $sql);
$berita = mysqli_fetch_array($query);
?>

<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 posts-list">
            <div class="single-post">
               <div class="feature-img">
                  <h1 class="btn btn-primary"><?php echo $berita['kategori'] ?></h1>
               </div>
               <div class="feature-img">
                  <img class="img-fluid" src="Admin/assets/img/<?php echo $berita['gambar'] ?>" alt="">
               </div>
               <div class="blog_details">
                  <h2><?php echo $berita['judul'] ?>
               </h2>
               <ul class="blog-info-link mt-3 mb-4">
                  <li><a href="#"><i class="fa fa-user"></i><?php echo $berita['penulis'].', '.$berita['tanggal'] ?></a></li>
                  <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
               </ul>
               <p class="excert">
                  <?php echo $berita['isi'] ?>
               </p>
            </div>
         </div>
         <div class="navigation-top">
            <div class="d-sm-flex justify-content-between text-center">
               <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
               people like this</p>
               <div class="col-sm-4 text-center my-2 my-sm-0">
                  <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
               </div>
               <ul class="social-icons">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fab fa-behance"></i></a></li>
               </ul>
            </div>
            <div class="navigation-area">
               <div class="row">
                  <div
                  class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                  <div class="thumb">
                     <a href="#">
                        <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                     </a>
                  </div>
                  <div class="arrow">
                     <a href="#">
                        <span class="lnr text-white ti-arrow-left"></span>
                     </a>
                  </div>
                  <div class="detials">
                     <p>Prev Post</p>
                     <a href="#">
                        <h4>Space The Final Frontier</h4>
                     </a>
                  </div>
               </div>
               <div
               class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
               <div class="detials">
                  <p>Next Post</p>
                  <a href="#">
                     <h4>Telescopes 101</h4>
                  </a>
               </div>
               <div class="arrow">
                  <a href="#">
                     <span class="lnr text-white ti-arrow-right"></span>
                  </a>
               </div>
               <div class="thumb">
                  <a href="#">
                     <img class="img-fluid" src="assets/img/post/next.png" alt="">
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="blog-author">
      <div class="media align-items-center">
         <img src="BimaBola/assets/img/blog/author.png" alt="">
         <div class="media-body">
            <a href="#">
               <h4><?php echo $berita['penulis'] ?></h4>
            </a>
            <p><?php echo $berita['kategori'] ?></p>
         </div>
      </div>
   </div>
   <div class="comment-form">
      <h4>Leave a Reply</h4>
      <form class="form-contact comment_form" action="#" id="commentForm">
         <div class="row">
            <div class="col-12">
               <div class="form-group">
                  <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                  placeholder="Write Comment"></textarea>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Name">
               </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Email">
               </div>
            </div>
            <div class="col-12">
               <div class="form-group">
                  <input class="form-control" name="website" id="website" type="text" placeholder="Website">
               </div>
            </div>
         </div>
         <div class="form-group">
            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
         </div>
      </form>
   </div>
</div>
<div class="col-lg-4">
   <div class="blog_right_sidebar">
      <aside class="single_sidebar_widget search_widget">
         <form action="#">
            <div class="form-group">
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder='Search Keyword'
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
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
                  <p>(37)</p>
               </a>
            </li>
            <li>
               <a href="#" class="d-flex">
                  <p>Tim Nasional</p>
                  <p>(10)</p>
               </a>
            </li>
         </ul>
      </aside>

      <!-- RECENT BERITA -->
      <aside class="single_sidebar_widget popular_post_widget">
         <h3 class="widget_title">Recent Post</h3>
         <?php while ($post = mysqli_fetch_array($data)) {?>
            <div class="media post_item">
               <img style="width: 50px" src="Admin/assets/img/<?php echo $post['gambar'] ?>" alt="post">
               <div class="media-body">
                  <a href="?page=blog">
                     <abbr><h3><?php echo $post['judul'] ?></h3></abbr>
                  </a>
                  <p><?php echo $post['tanggal'] ?></p>
               </div>
            </div>
         <?php } ?>
      </aside>

      <!-- TAG BERITA -->
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
   </div>
</div>
</div>
</div>
</section>
<!--================ Blog Area end =================-->
