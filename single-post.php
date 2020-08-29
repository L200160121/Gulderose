<!DOCTYPE html>
<html lang="en">

<head>
    <?php
      include ".private/koneksi.php";
    ?>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <?php
      $getInfo = mysqli_query($conn,"SELECT * FROM informasi");
      $b       = mysqli_fetch_assoc($getInfo);
    ?>
    <title><?php echo $b['judulweb']; ?></title>

    <!-- Favicon -->
    <link rel="icon" href="admin_gulderose/images/logo/<?php echo $b['favicon']; ?>">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/gulderose2.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

      <!-- ***** Top Header Area ***** -->
      <div class="top-header-area">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="top-header-content d-flex align-items-center justify-content-between">
                          <!-- Top Header Content -->
                          <div class="top-header-meta">
                              <a href="#" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email : <?php echo $b['email']; ?></span></a>
                              <a href="#" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-whatsapp" aria-hidden="true"></i> <span>Order : <?php echo $b['telepon']; ?></span></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- ***** Navbar Area ***** -->
      <div class="alazea-main-menu">
          <div class="classy-nav-container breakpoint-off">
              <div class="container">
                  <!-- Menu -->
                  <nav class="classy-navbar justify-content-between" id="alazeaNav">

                      <!-- Nav Brand -->
                      <a href="index.php" class="nav-brand"><img src="admin_gulderose/images/logo/<?php echo $b['logo']; ?>" width='150' alt=""></a>

                      <!-- Navbar Toggler -->
                      <div class="classy-navbar-toggler">
                          <span class="navbarToggler"><span></span><span></span><span></span></span>
                      </div>

                      <!-- Menu -->
                      <div class="classy-menu">

                          <!-- Close Button -->
                          <div class="classycloseIcon">
                              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                          </div>

                          <!-- Navbar Start -->
                          <div class="classynav">
                              <ul>
                                  <li><a href="index.php">Home</a></li>
                                  <li><a href="about.php">About</a></li>
                                  <li><a href="artikel.php">Article</a>
                                  </li>
                                  <li><a href="katalog.php">Catalog</a></li>
                                  <li><a href="portfolio.php">Gallery Portfolio</a></li>
                                  <li><a href="contact.php">Contact</a></li>
                              </ul>
                          </div>
                          <!-- Navbar End -->
                      </div>
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ##### Header Area End ##### -->


    <!-- ##### Breadcrumb Area Start ##### -->
    <?php
    // include ".private/koneksi.php";
    $id  = mysqli_real_escape_string($conn, $_GET['id']);
    $uri = explode('/', $_SERVER['REQUEST_URI'])[1];
    if (!is_numeric($id)) {
      $uri = explode('/', $_SERVER['REQUEST_URI'])[1];
      echo '<script type="text/javascript">window.location.href="/'.$uri.'";</script>';
      die();
    } else {
      $getArticel = mysqli_query($conn,"SELECT * FROM artikel WHERE id_artikel = '$id'");
      $a          = mysqli_fetch_assoc($getArticel);
      if ($a == []) {
        echo '<script type="text/javascript">window.location.href="/'.$uri.'";</script>';
        die();
      }
    }
    ?>
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/gallery/wallpaper/1.jpeg);">
            <h2><?php echo $a["judul"]; ?></h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Artikel</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $a["judul"]; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-md-8">
                    <div class="blog-posts-area">

                        <!-- Post Details Area -->
                        <div class="single-post-details-area">
                            <div class="post-content">
                                <h4 class="post-title"><?php echo $a["judul"]; ?></h4>
                                <div class="post-meta mb-30">
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $a["waktu_post"]; ?></a>
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i><?php echo $a["penulis"]; ?></a>
                                </div>
                                <div class="post-thumbnail mb-30">
                                    <img src="admin_gulderose/images/gallery/artikel/<?php echo $a["foto"]; ?>" alt="">
                                </div>
                                <p><?php echo $a["isi"]; ?></p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-4">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <form action="#" method="get" class="search-form">
                                <input type="search" name="search" id="widgetSearch" placeholder="Search...">
                                <button type="submit"><i class="icon_search"></i></button>
                            </form>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Author Widget -->
                            <div class="author-widget">
                                <div class="author-thumb-name d-flex align-items-center">
                                    <div class="author-thumb">
                                        <img src="img/core-img/gulderose.png" alt="">
                                    </div>
                                    <div class="author-name">
                                        <h5><?php echo $a["penulis"]; ?></h5>
                                        <p>Penulis</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h4>Recent Article</h4>
                            </div>
                            <?php
                            $getArticel = mysqli_query($conn,"SELECT * FROM artikel ORDER BY waktu_post DESC LIMIT 4");
                            while ($data=mysqli_fetch_assoc($getArticel)) {
                             ?>
                            <!-- Single Latest Posts -->
                            <div class="single-latest-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <img src="admin_gulderose/images/gallery/artikel/<?php echo $data["foto"]; ?>" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        <h6><?php echo $a["judul"]; ?></h6>
                                    </a>
                                    <a href="#" class="post-date"><?php echo $data["waktu_post"]; ?></a>
                                </div>
                            </div>
                          <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php
      $getInfo = mysqli_query($conn,"SELECT * FROM informasi");
      $b       = mysqli_fetch_assoc($getInfo);
    ?>
    <footer class="footer-area bg-img" style="background-image: url(img/gallery/wallpaper/1.jpeg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area" >
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="admin_gulderose/images/logo/<?php echo $b['logo']; ?>" height='100' width='170' alt=""></a>
                            </div>
                            <p><?php echo $b['namatoko']; ?> <?php echo $b['deskripsi']; ?></p>
                            <div class="social-info">
                                <a href="<?php echo $b['fb']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="<?php echo $b['wa']; ?>" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                <a href="<?php echo $b['ig']; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="<?php echo $b['shoope']; ?>" target="_blank"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                <!-- <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=gulderose@gmail.com" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>CONTACT</h5>
                            </div>

                            <div class="contact-information">
                              <p><span>Address : </span><?php echo $b['alamat']; ?></p>
                              <p><span>Phone : </span><?php echo $b['telepon']; ?></p>
                              <p><span>Email : </span><?php echo $b['email']; ?></p>
                              <p><span>Open hours : </span><?php echo $b['jam']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p><?php echo $b['footer']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->


    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
