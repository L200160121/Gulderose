<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include "../../../.private/koneksi.php";
  include "../../../.private/auth_adm.php";
   ?>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Gulderose.co Admin - Dashboard</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="../../assets/vendor_components/datatable/datatables.min.css"/>

	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="../css/bootstrap-extend.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="../css/master_style.css">

	<!-- Superieur Admin skins -->
	<link rel="stylesheet" href="../css/skins/_all-skins.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo -->
	  <div class="logo-mini">
		  <span class="light-logo"><img src="../../images/logo.png" height='40' width='130' alt="logo"></span>
		  <span class="dark-logo"><img src="../../images/logo-dark.png" alt="logo"></span>
	  </div>
      <!-- logo-->
      <div class="logo-lg">
		  <span class="light-logo"><img src="../../images/logo.png" alt="logo"></span>
	  	  <span class="dark-logo"><img src="../../images/logo-dark-text.png" alt="logo"></span>
	  </div>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div>
		  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		  </a>
	  </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

		  <li class="search-box">
            <a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>
            <form class="app-search" style="display: none;">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
			</form>
          </li>
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../images/avatar/gulderose.png" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu animated flipInY">
              <!-- User image -->
              <li class="user-header bg-img" style="background-image: url(../../images/user-info.jpg)" data-overlay="3">
				  <div class="flexbox align-self-center">
				  	<img src="../../images/avatar/gulderose.png" class="float-left rounded-circle" alt="User Image">
					<h4 class="user-name align-self-center">
					  <span>Admin Gulderose</span>
					  <small>gulderose@gmail.com</small>
					</h4>
				  </div>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
				    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="logout.php)"><i class="ion-log-out"></i> Logout</a>
					<div class="dropdown-divider"></div>
					<div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a></div>
              </li>
            </ul>
          </li>

          <!-- Messages -->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-email"></i>
            </a>
            <ul class="dropdown-menu animated fadeInDown">

              <li class="header">
				<div class="bg-img text-white p-20" style="background-image: url(../../images/user-info.jpg)" data-overlay="5">
					<div class="flexbox">
						<div>
							<h3 class="mb-0 mt-0">5 New</h3>
							<span class="font-light">Messages</span>
						</div>
						<div class="font-size-40">
							<i class="mdi mdi-email-alert"></i>
						</div>
					</div>
				</div>
			  </li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu sm-scrol">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Lorem Ipsum
                          <small><i class="fa fa-clock-o"></i> 15 mins</small>
                         </h4>
                         <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                      </div>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Nullam tempor
                          <small><i class="fa fa-clock-o"></i> 4 hours</small>
                         </h4>
                         <span>Curabitur facilisis erat quis metus congue viverra.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Proin venenatis
                          <small><i class="fa fa-clock-o"></i> Today</small>
                         </h4>
                         <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Praesent suscipit
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                         </h4>
                         <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                      </div>
                      <div class="mail-contnet">
                         <h4>
                          Donec tempor
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                         </h4>
                         <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
				  <a href="#" class="text-white bg-info">See all e-Mails</a></li>
            </ul>
          </li>
          <!-- Notifications -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
            </a>
            <ul class="dropdown-menu animated fadeInDown">

			  <li class="header">
				<div class="bg-img text-white p-20" style="background-image: url(../../images/user-info.jpg)" data-overlay="5">
					<div class="flexbox">
						<div>
							<h3 class="mb-0 mt-0">7 New</h3>
							<span class="font-light">Notifications</span>
						</div>
						<div class="font-size-40">
							<i class="mdi mdi-message-alert"></i>
						</div>
					</div>
				</div>
			  </li>

              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu sm-scrol">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#" class="text-white bg-danger">View all</a></li>
            </ul>
          </li>
          <!-- Tasks-->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="mdi mdi-bulletin-board"></i>
            </a>
            <ul class="dropdown-menu animated fadeInDown">

			  <li class="header">
				<div class="bg-img text-white p-20" style="background-image: url(../../images/user-info.jpg)" data-overlay="5">
					<div class="flexbox">
						<div>
							<h3 class="mb-0 mt-0">6 New</h3>
							<span class="font-light">Tasks</span>
						</div>
						<div class="font-size-40">
							<i class="mdi mdi-bulletin-board"></i>
						</div>
					</div>
				</div>
			  </li>

              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu sm-scrol">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Lorem ipsum dolor sit amet
                        <small class="pull-right">30%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-danger" style="width: 30%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">30% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Vestibulum nec ligula
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-info" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Donec id leo ut ipsum
                        <small class="pull-right">70%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-success" style="width: 70%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">70% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Praesent vitae tellus
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-warning" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nam varius sapien
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-primary" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Nunc fringilla
                        <small class="pull-right">90%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-info" style="width: 90%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">90% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer"><a href="#" class="text-white bg-warning">View all tasks</a></li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="user-profile treeview">
          <a href="index.html">
			<img src="../../images/avatar/gulderose2.png" alt="user">
              <span>
				<span class="d-block font-weight-600 font-size-16">Admin Gulderose</span>
				<span class="email-id">gulderose@gmail.com</span>
			  </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
		     <ul class="treeview-menu">
            <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>My Profile </a></li>
      			<li><a href="javascript:void()"><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
      			<li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
      			<li><a href="logout.php"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
        </ul>
        </li>

        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>MAIN MENU</li>


		<li class="treeview">
          <a href="#">
            <i class="mdi mdi-settings"></i>
            <span>Info</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="../admin.php"><i class="mdi mdi-toggle-switch-off"></i>Pengaturan Data</a></li>
          </ul>
        </li>

        <li>
            <a href="pesan_kontak.php">
            <i class="mdi mdi-message-bulleted"></i>
    			    <span>Pesan Kontak</span>
            </a>
        </li>

        <li>
            <a href="pengguna.php">
            <i class="mdi mdi-account"></i>
              <span>Pengguna</span>
            </a>
        </li>

        <li>
            <a href="slider.php">
            <i class="mdi mdi-image-album"></i>
              <span>Slider Home</span>
            </a>
        </li>
        <li>
            <a href="kategori.php">
            <i class="mdi mdi-hexagon-multiple"></i>
              <span>Kategori</span>
            </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-image-filter"></i>
			        <span>Galeri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="galeri_portofolio.php"><i class="mdi mdi-toggle-switch-off"></i>Galeri Portofolio</a></li>
          </ul>
        </li>
		    <li>

        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-clipboard"></i>
  		        <span>Katalog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="kategori_katalog.php"><i class="mdi mdi-toggle-switch-off"></i>Kategori Katalog</a></li>
            <li><a href="katalog.php"><i class="mdi mdi-toggle-switch-off"></i>Data Katalog</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-file-document"></i>
  		        <span>Artikel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="artikel.php"><i class="mdi mdi-toggle-switch-off"></i>Data Artikel</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap"><i class="mdi mdi-drag-horizontal mr-5"></i>KELUAR</li>
		    <li>
          <a href="logout.php">
            <i class="mdi mdi-directions"></i>
			      <span>Log Out</span>
          </a>
        </li>

      </ul>
    </section>
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="page-title">Dashboard</h3>
				<div class="d-inline-block align-items-center">
					<nav>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item" aria-current="page">Kategori Katalog</li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Kategori Katalog</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="right-title">
				<div class="dropdown">
					<button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i class="mdi mdi-dots-horizontal"></i></button>
					<div class="dropdown-menu dropdown-menu-right">
					  <a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>
					  <a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>
					  <a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>
					  <a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>
					  <div class="dropdown-divider"></div>
					  <button type="button" class="btn btn-succes">Submit</button>
					</div>
				  </div>

			</div>
		</div>
	</div>

    <!-- Main content -->
    <section class="content">

      <!-- Basic Forms -->
       <div class="box">
         <div class="box-header with-border" align='center'>
           <h4 class="box-title">TAMBAH KATEGORI KATALOG</h4>
           <h6 class="box-subtitle">Informasi mengenai data kategori katalog website Gulderose.co</h6>
         </div>
             <!-- /.box-header -->
             <div class="box-body">
               <div class="row">
                 <div class="col">
                   <!-- <form novalidate> -->
                      <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" name="form" enctype="multipart/form-data">
                       <div class="row">
                         <div class="col-12">
                           <div class="form-group">
                             <h5>Nama Kategori<span class="text-danger">*</span></h5>
                             <div class="controls">
                               <input type="text" name="nama_kategori" class="form-control" required data-validation-required-message="This field is required"> </div>
                           </div>
                           <div class="form-group">
                             <h5>Tipe Kategori<span class="text-danger">*</span></h5>
                             <select class="form-control p-0" id="input6" required name='tipe_kategori'>
                               <option value="Jenis">Jenis</option>
                               <option value="Warna">Warna</option>
                               <option value="Acara">Acara</option>
                             </select><span class="highlight"></span> <span class="bar"></span> <br>
                           </div>
                           <div class="text-xs-right">
                              <input type="submit" name="tambah_kategori_katalog" class="btn btn-info btn-outline btn-1e" value="Tambah Kategori Katalog">
                           </div>
                         </div>
                       </div>
                       </form>
                       <!-- /.content-wrapper -->

                       <!-- PHP TAMBAH KATEGORI -->
                       <?php
                          $nama_kategori = $_POST['nama_kategori'];
                          $tipe_kategori = $_POST['tipe_kategori'];
                          $submit = $_POST['tambah_kategori_katalog'];
                          $sql = "INSERT INTO kategoriKatalog (nama_kategori, tipe_kategori) VALUES ('$nama_kategori','$tipe_kategori')";
                          if ($submit) {
                             mysqli_query($conn,$sql);//$conn->query($sql);
                             ?>
                             <!-- <script type="text/javascript">
                               alert('Data Kategori Berhasil Ditambahkan');
                               document.location = 'kategori_katalog.php';
                             </script> -->
                             <?php
                          }
                      ?>

                     </div>
                   </div>
                 </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>

   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<!-- <a class="nav-link" href="javascript:void(0)">FAQ</a> -->
		  </li>
		  <li class="nav-item">
			<!-- <a class="nav-link" href="#">Purchase Now</a> -->
		  </li>
		</ul>
    </div>
    <div align='center'>
      &copy; 2018 Gulderose.co | All Rights Reserved.
    </div>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">

	<div class="rpanel-title"><span class="btn pull-right"><i class="ion ion-close" data-toggle="control-sidebar"></i></span> </div>
    <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab">Tasks</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-danger"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-warning"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-info"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-success"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->

    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="../../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

	<!-- popper -->
	<script src="../../assets/vendor_components/popper/dist/popper.min.js"></script>

	<!-- Bootstrap 4.0-->
	<script src="../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- This is data table -->
    <script src="../../assets/vendor_components/datatable/datatables.min.js"></script>

	<!-- SlimScroll -->
	<script src="../../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

	<!-- FastClick -->
	<script src="../../assets/vendor_components/fastclick/lib/fastclick.js"></script>

	<!-- Superieur Admin App -->
	<script src="../js/template.js"></script>

	<!-- Superieur Admin for demo purposes -->
	<script src="../js/demo.js"></script>

	<!-- Superieur Admin for Data Table -->
	<script src="../js/pages/data-table.js"></script>


</body>
</html>
