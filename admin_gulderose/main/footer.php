﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Gulderose.co Admin - Dashboard</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../assets/vendor_components/bootstrap/dist/css/bootstrap.css">

	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="css/bootstrap-extend.css">

	<!-- theme style -->
	<link rel="stylesheet" href="css/master_style.css">

	<!-- Superieur Admin skins -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">

	<!-- daterange picker -->
	<link rel="stylesheet" href="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">

	<!-- Morris charts -->
	<link rel="stylesheet" href="../assets/vendor_components/morris.js/morris.css">

	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor_components/datatable/datatables.min.css"/>


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


  </head>

<body class="hold-transition skin-blue fixed sidebar-mini">

  <!-- /.content-wrapper -->
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
	  &copy; 2018 Gulderose.co | All Rights Reserved.
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
	<script src="../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

	<!-- jQuery UI 1.11.4 -->
	<script src="../assets/vendor_components/jquery-ui/jquery-ui.js"></script>

	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>

  <!-- jQuery 3 -->
	<script src="../../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

	<!-- popper -->
	<script src="../assets/vendor_components/popper/dist/popper.min.js"></script>

	<!-- date-range-picker -->
	<script src="../assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>

	<!-- Bootstrap 4.0-->
	<script src="../assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>

	<!-- Slimscroll -->
	<script src="../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- echarts -->
	<script src="../assets/vendor_components/echarts/dist/echarts-en.min.js"></script>
	<script src="../assets/vendor_components/echarts/echarts-liquidfill.min.js"></script>

	<!-- FastClick -->
	<script src="../assets/vendor_components/fastclick/lib/fastclick.js"></script>

	<!-- Morris.js charts -->
	<script src="../assets/vendor_components/raphael/raphael.min.js"></script>
	<script src="../assets/vendor_components/morris.js/morris.min.js"></script>

	<!-- This is data table -->
    <script src="../assets/vendor_components/datatable/datatables.min.js"></script>

	<!-- Superieur Admin App -->
	<script src="js/template.js"></script>

	<!-- Superieur Admin dashboard demo (This is only for demo purposes) -->
	<script src="js/pages/dashboard2.js"></script>

	<!-- Superieur Admin for demo purposes -->
	<script src="js/demo.js"></script>

  <!-- Form validator JavaScript -->
    <script src="../js/pages/validation.js"></script>
    <script src="../js/pages/form-validation.js"></script>


</body>
</html>
