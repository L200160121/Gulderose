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

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/gallery/wallpaper/1.jpeg);">
            <h2>Catalog</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Catalog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Shop Area Start ##### -->
    <?php
      $getDetail = mysqli_query($conn, "SELECT COUNT(katalog.id_katalog) total FROM katalog;");
      $total = mysqli_fetch_assoc($getDetail);
      if (isset($_GET['show'])) {
        $count = $_GET['show'];
      } else {
        if ($total['total'] < 9) {
          $count = $total['total'];
        } else {
          $count = 9;
        }
      }
     ?>
    <section class="shop-page section-padding-0-100">
        <div class="container">
            <div class="row">
                <!-- Shop Sorting Data -->
                <div class="col-12">
                    <div class="shop-sorting-data d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Shop Page Count -->
                        <div class="shop-page-count">
                            <p>Showing 1–<?php echo $count." of ".$total['total']." results"; ?></p>
                        </div>
                        <!-- Search by Terms -->
                        <div class="search_by_terms">
                            <form action="" method="get" class="form-inline">
                                <?php
                                if (isset($_GET['categorie'])) {
                                  if (empty($_GET['categorie'])  or $_GET['categorie'] == 'all') {
                                    echo '<input type="hidden" name="categorie" value="" />';
                                  } else {
                                    if (is_numeric($_GET['categorie'])) {
                                      echo '<input type="hidden" name="categorie" value="'.$_GET["categorie"].'" />';
                                    } else {
                                      echo '<input type="hidden" name="categorie" value="" />';
                                    }
                                  }
                                } else {
                                  echo '<input type="hidden" name="categorie" value="" />';
                                }
                                ?>
                                <select class="custom-select widget-title" name="show" onchange="this.form.submit()">
                                  <option <?php if (empty($_GET['show']) or $_GET['show'] == 9) { echo 'selected value="9">Show: 9'; } else { echo 'value="9">9'; }?></option>
                                  <option <?php if ($_GET['show'] == 12) { echo 'selected value="12">Show: 12'; } else { echo 'value="12">12'; }?></option>
                                  <option <?php if ($_GET['show'] == 18) { echo 'selected value="18">Show: 18'; } else { echo 'value="18">18'; }?></option>
                                  <option <?php if ($_GET['show'] == 24) { echo 'selected value="24">Show: 24'; } else { echo 'value="24">24'; }?></option>
                                  <?php
                                  if ($total['total'] > 24) {
                                    $te = '<option ';
                                    if ($_GET['show'] == $total['total']) {
                                      $te .= 'selected value="'.$total["total"].'">Show: '.$total["total"].'';
                                    } else {
                                      $te .= 'value="'.$total["total"].'">'.$total["total"].'';
                                    }
                                    $te .= '</option>';
                                    echo $te;
                                  } ?>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Sidebar Area -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop-sidebar-area">

                        <!-- Shop Widget -->
                        <div class="shop-widget catagory mb-50">
                            <h4 class="widget-title">Categories</h4>
                            <div class="widget-desc">
                              <form action="" method="get" class="form-inline">
                                  <select class="custom-select widget-title d-flex align-items-center mb-2" name="categorie" onchange="this.form.submit()">
                                    <option value="all" selected>All</option>
                                    <?php
                                    $getCJenis = mysqli_query($conn, "SELECT * FROM kategorikatalog WHERE tipe_kategori = 'Jenis'");
                                    while($dataJenis = mysqli_fetch_array($getCJenis)) {
                                    ?>
                                    <option <?php if ($_GET['categorie'] == $dataJenis["id_kategorikatalog"]) { echo 'selected value="'.$dataJenis["id_kategorikatalog"].'">'.$dataJenis['nama_kategori']; } else { echo 'value="'.$dataJenis["id_kategorikatalog"].'">'.$dataJenis['nama_kategori']; }?></option>
                                    <?php } ?>
                                  </select>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- All Products Area -->
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop-products-area">
                        <div class="row">
                          <?php
                            if (isset($_GET['show'])) {
                              if (empty($_GET['show'])) {
                                $show = 9;
                              } else {
                                if (is_numeric($_GET['show'])) {
                                  $show = $_GET['show'];
                                } else {
                                  $show = 0;
                                }
                              }
                              if (isset($_GET['categorie'])) {
                                if (empty($_GET['categorie']) or $_GET['categorie'] == 'all') {
                                  $categories = '';
                                } else {
                                  if (is_numeric($_GET['categorie'])) {
                                    $categories = ' AND kategorikatalog.id_kategorikatalog = '.$_GET["categorie"];
                                  } else {
                                    $categories = '';
                                  }
                                }
                              } else {
                                $categories = '';
                              }
                            } else {
                              $show = 9;
                              if (isset($_GET['categorie'])) {
                                if (empty($_GET['categorie'])  or $_GET['categorie'] == 'all') {
                                  $categories = '';
                                } else {
                                  if (is_numeric($_GET['categorie'])) {
                                    $categories = ' AND kategorikatalog.id_kategorikatalog = '.$_GET["categorie"];
                                  } else {
                                    $categories = '';
                                  }
                                }
                              } else {
                                $categories = '';
                              }
                            }

                            $getProduk = mysqli_query($conn, "SELECT * FROM kategorikatalog_has_katalog, kategorikatalog, katalog WHERE kategorikatalog.id_kategorikatalog = kategorikatalog_has_katalog.id_kategorikatalog AND katalog.id_katalog = kategorikatalog_has_katalog.id_katalog$categories GROUP BY katalog.id_katalog ORDER BY katalog.waktu_post DESC LIMIT $show;");
                            while($Produk = mysqli_fetch_assoc($getProduk)){
                              ?>
                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="">
                                        <a href="#"><img src="admin_gulderose/images/katalog/<?php echo $Produk['foto']; ?>" alt=""></a>
                                    </div>
                                    <div class="product-info mt-15 text-center">
                                        <p><?php echo $Produk['nama']; ?></p>
                                        <h6>Rp. <?php echo $Produk['harga']; ?></h6>
                                    </div>
                                </div>
                            </div>
                          <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Area End ##### -->

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
