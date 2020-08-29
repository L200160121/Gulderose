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
            <h2>Contact US</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Info Start ##### -->
    <div class="contact-area-info section-padding-0-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Contact Thumbnail -->
                <div class="col-12 col-md-5">
                    <div class="contact--thumbnail">
                        <img src="img/gallery/produk/8.jpg" width="450" height="100" alt="">
                    </div>

                </div>
                <div class="col-12 col-md-5">
                    <!-- Section Heading -->
                    <?php
                      $getInfo = mysqli_query($conn,"SELECT * FROM informasi");
                      $b       = mysqli_fetch_assoc($getInfo);
                    ?>
                    <div class="section-heading">
                        <h2>CONTACT US</h2>
                        <p>We are improving our services to serve you better.</p>
                    </div>
                    <!-- Contact Information -->
                    <div class="contact-information">
                        <p><span>Address : </span><?php echo $b['alamat']; ?>
                        <p><span>Phone : </span><?php echo $b['telepon']; ?></p>
                        <p><span>Email : </span><?php echo $b['email']; ?></p>
                        <p><span>Open hours : </span><?php echo $b['jam']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Area Info End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>MESSAGE</h2>
                        <p>Send us a message, we will call back later</p>
                    </div>
                    <!-- Contact Form Area -->
                    <div class="contact-form-area mb-100">
                        <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" name="form">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name='nama' class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name='email' class="form-control"  placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name='no_hp' class="form-control"  placeholder="Your Telephone">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name='subjek' class="form-control"  placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="pesan"  cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" name='submit' class="btn alazea-btn mt-15" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                  // include ".private/koneksi.php";
                  // error_reporting(E_ALL^E_DEPRECATED^E_NOTICE);



                  $nama = $_POST['nama'];
                  $email = $_POST['email'];
                  $no_hp = $_POST['no_hp'];
                  $subjek = $_POST['subjek'];
                  $pesan = $_POST['pesan'];
                  // $id_pesan= $_POST['id'];
                  $submit = $_POST['submit'];


                  if ($submit) {
                    $sql = "INSERT INTO pesan (nama, email, no_hp, subjek, pesan) VALUES ('$nama', '$email', '$no_hp', '$subjek', '$pesan')";
                    // $sql = "insert into pesan (id_pesan,nama,email,no_hp,subjek,pesan) values ('$id_pesan','$nama','$email','$no_hp','$subjek','$pesan')";
                      $run = mysqli_query($conn,$sql);//$conn->query($sql);
                      if ($run){
                        ?>
                          <script type="text/javascript">
                            alert('Pesan Berhasil Dikirim');
                            document.location = 'contact.php';
                          </script>
                        <?php
                        }
                    }
                  ?>


                <div class="col-12 col-lg-6">
                    <!-- Google Maps -->
                    <div class="map-area mb-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.404511304232!2d110.04706515035016!3d-6.961516794945972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70422620608117%3A0xf6dd621bcddaa9c6!2sGulderose+Bunga+Flanel!5e0!3m2!1sid!2sid!4v1541834646338" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
