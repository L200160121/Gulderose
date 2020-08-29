<!DOCTYPE html>
<html lang="id">

<head>
    <?php
      include ".private/koneksi.php";
    ?>
    <meta charset="UTF-8">
    <meta name="Gulderose" content="">
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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">
          <?php

            $getSlider = mysqli_query($conn,"SELECT * FROM slider");
            while ($a=mysqli_fetch_assoc($getSlider)) {
          ?>
            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(admin_gulderose/images/slider/<?php echo $a['foto_slider']; ?>);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2><?php echo $a['judul_slider']; ?></h2>
                                <p><?php echo $a['keterangan_slider']; ?></p>
                                <div class="welcome-btn-group">
                                    <a href="contact.php" class="btn alazea-btn active">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Portfolio Area Start ##### -->
    <section class="alazea-portfolio-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR PORTFOLIO</h2>
                        <p>We devote all of our experience and efforts for creation</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

          <div class="row">
              <div class="col-12">
                  <div class="alazea-portfolio-filter">
                      <div class="portfolio-filter">
                          <button class="btn" data-filter="*">ALL</button>
                          <?php
                            $sql = mysqli_query($conn,"SELECT nama_kategori from kategori");
                            while ($kategori=mysqli_fetch_assoc($sql)) {
                            $nama_kategori = preg_replace('/\s+/', '_', strtolower($kategori['nama_kategori']));
                           ?>
                          <button class="btn" data-filter=".<?php echo $nama_kategori; ?>"><?php echo $kategori['nama_kategori']; ?></button>
                        <?php } ?>
                      </div>
                  </div>
              </div>
          </div>

            <div class="row alazea-portfolio">

              <!-- Single Portfolio Area -->
              <?php
                $getPortofolio = mysqli_query($conn,"SELECT galeri.*, kategori.* FROM galeri, kategori WHERE galeri.id_kategori = kategori.id_kategori LIMIT 8");
                while ($c=mysqli_fetch_assoc($getPortofolio)) {
                  $nama_kategori = preg_replace('/\s+/', '_', strtolower($c['nama_kategori']));
               ?>

              <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item <?php echo $nama_kategori; ?>">
                  <!-- Portfolio Thumbnail -->
                  <div class="portfolio-thumbnail bg-img" style="background-image: url(admin_gulderose/images/gallery/portofolio/<?php echo $c['foto']; ?>);"></div>
                  <!-- Portfolio Hover Text -->
                  <div class="portfolio-hover-overlay">
                      <a href="admin_gulderose/images/gallery/portofolio/<?php echo $c['foto']; ?>" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 1">
                          <div class="port-hover-text">
                              <h3><?php echo $c['nama_kategori']; ?></h3>
                              <h5><?php echo $c['judul']; ?></h5>
                          </div>
                      </a>
                  </div>
              </div>
            <?php } ?>
            </div>
            <br/>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="alazea-portfolio-filter">
                            <div class="portfolio-filter">
                                <a href="portfolio.php"><button class="btn active">More...</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Portfolio Area End ##### -->
    <br/>
    <!-- ##### Blog Area Start ##### -->
    <section class="alazea-blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>ARTICLE</h2>
                        <p>Artikel Gulderose</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
              <?php
                $getArticel = mysqli_query($conn,"SELECT * FROM artikel ORDER BY waktu_post DESC LIMIT 3");
                while ($a=mysqli_fetch_assoc($getArticel)) {
              ?>
                <!-- Single Blog Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post mb-100">
                        <div class="post-thumbnail mb-30">
                            <a href="single-post.php?id=<?php echo $a["id_artikel"]; ?>"><img src="admin_gulderose/images/gallery/artikel/<?php echo $a["foto"]; ?>" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="single-post.php?id=<?php echo $a["id_artikel"]; ?>" class="post-title">
                                <h5><?php echo $a["judul"]; ?></h5>
                            </a>
                            <div class="post-meta">
                                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $a["waktu_post"]; ?></a>
                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $a["penulis"]; ?></a>
                            </div>
                            <p class="post-excerpt"><?php echo $a["ringkasan"]; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="alazea-portfolio-filter">
                                <div class="portfolio-filter">
                                    <a href="artikel.php"><button class="btn active">More...</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
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
