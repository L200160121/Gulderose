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
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/gallery/wallpaper/1.jpeg);">
            <h2>ABOUT US</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>ABOUT US</h2> <br>
                        <!-- <p>Gulderose</p> -->
                        <p><?php echo $b['namatoko']; ?> <?php echo $b['deskripsi']; ?></p>
                    </div>

                    <div class="section-heading">
                        <div class="col-12 col-lg-12">
                            <div class="alazea-benefits-area">
                                <div class="row">
                                    <!-- Single Benefits Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-benefits-area">
                                            <img src="img/core-img/b1.png" alt="">
                                            <h5>Quality Product</h5>
                                            <p>Produk yang kami benar-benar sangat memperhatikan bahan-bahan dalam pembuatannya</p>
                                        </div>
                                    </div>

                                    <!-- Single Benefits Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-benefits-area">
                                            <img src="img/core-img/b2.png" alt="">
                                            <h5>Services</h5>
                                            <p>Kami melayani dengan sangat sabar dan sesuai dengan pesanan dari customer</p>
                                        </div>
                                    </div>

                                    <!-- Single Benefits Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-benefits-area">
                                            <img src="img/core-img/b3.png" alt="">
                                            <h5>creative</h5>
                                            <p>Produk yang kami buat kreatif dan unik</p>
                                        </div>
                                    </div>

                                    <!-- Single Benefits Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-benefits-area">
                                            <img src="img/core-img/b4.png" alt="">
                                            <h5>Environmentally friendly</h5>
                                            <p>Bahan produk yang dibuat yaitu ramah lingkungan sehingga lingkungan bisa tetap sehat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="alazea-benefits-area">
                      <h2>FIND US</h2> <br>
                        <div class="row">
                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                              <!-- <h2>FIND US</h2> <br> -->
                                <div class="single-benefits-area">
                                    <a href="<?php echo $b['fb']; ?>" target="_blank"><img src="img/core-img/fb2.png" width="85" alt=""></a>
                                    <a href="<?php echo $b['fb']; ?>" target="_blank"><h5>Facebook</h5></a>
                                    <p>Produk dan informasi kami bisa dilihat di Facebook</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <a href="<?php echo $b['ig']; ?>" target="_blank"><img src="img/core-img/ig.png" width="84" alt=""></a>
                                    <a href="<?php echo $b['ig']; ?>"target="_blank"><h5>Instagram</h5></a>
                                    <p>Produk dan informasi kami bisa dilihat di Intagram</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                  <a href="<?php echo $b['shoope']; ?>" target="_blank"><img src="img/core-img/shopee.png" width="180" alt=""></a>
                                    <a href="<?php echo $b['shoope']; ?>" target="_blank"><h5>Shopee</h5></a>
                                    <p>Produk dan informasi kami tersedia di Shopee</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-line"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### Service Area Start ##### -->
    <section class="our-services-area bg-gray section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR SERVICES</h2>
                        <p>We provide the perfect service for you.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <div class="alazea-service-area mb-100">

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="img/core-img/s1.png" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Cepat dalam pengerjaan</h5>
                                <p>Kami selalu mengerjakan produk secepat mungkin agar pembeli tidak merasa kecewa</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="img/core-img/s2.png" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Harga Lebih Murah</h5>
                                <p>Kami menyediakan harga yang lebih murah</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="img/core-img/s3.png" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Kreatif</h5>
                                <p>Kami mendesign berbagai produk buket dan lain-lain dengan sangat Kreatif atau sesuai dengan permintaan pembeli.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="alazea-video-area bg-overlay mb-100">
                        <img src="img/bg-img/23.jpg" alt="">
                        <a href="http://www.youtube.com/watch?v=7HKoqNJtMTQ" class="video-icon">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Service Area End ##### -->

    <!-- ##### Testimonial Area Start ##### -->
    <section class="testimonial-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel">

                      <?php
                        // error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);

                        $getTestimoni = mysqli_query($conn,"SELECT * FROM testimoni");
                        while ($a=mysqli_fetch_assoc($getTestimoni)) {
                      ?>
                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="testimonial-thumb">
                                        <img src="admin_gulderose/images/testimoni/<?php echo $a["foto"]; ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="testimonial-content">
                                        <!-- Section Heading -->
                                        <div class="section-heading">
                                            <h2>TESTIMONIAL</h2>
                                            <p>Some kind words from clients about Gulderose</p>
                                        </div>
                                        <p>“<?php echo $a["isi"]; ?>”</p>
                                        <div class="testimonial-author-info">
                                            <h6><?php echo $a["nama"]; ?></h6>
                                            <p><?php echo $a["posisi"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonial Area End ##### -->



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
