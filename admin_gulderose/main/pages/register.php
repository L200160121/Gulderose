<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
    include '../.private/dbconn.php';
    $fname = $_POST['fname'];
    $username = $_POST['username'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $cb = $_POST['cb'];
    $submit = $_POST['submit'];
  ?>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Superieur Admin - Registration </title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

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

<body class="hold-transition bg-img" style="background-image: url(../../images/gallery/full/6.jpg)" data-overlay="4">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			<div class="col-12">
				<div class="row no-gutters justify-content-md-center">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="content-top-agile h-p100">
							<h2>Get started <br> with Us</h2>
							<p class="text-white">Register a new membership</p>

							<div class="text-center text-white">
							  <p class="mt-20">- Register With -</p>
							  <p class="gap-items-2 mb-20">
								  <a class="btn btn-social-icon btn-outline btn-white" href="#"><i class="fa fa-facebook"></i></a>
								  <a class="btn btn-social-icon btn-outline btn-white" href="#"><i class="fa fa-twitter"></i></a>
								  <a class="btn btn-social-icon btn-outline btn-white" href="#"><i class="fa fa-google-plus"></i></a>
								  <a class="btn btn-social-icon btn-outline btn-white" href="#"><i class="fa fa-instagram"></i></a>
								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-12">
						<div class="p-40 bg-white content-bottom">
							<form action="register.php" method="post" class="form-element">
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info border-info"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control pl-15" placeholder="Full Name" name='fname'>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info border-info"><i class="ti-email"></i></span>
										</div>
										<input type="text" class="form-control pl-15" placeholder="Username" name="username">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info border-info"><i class="ti-lock"></i></span>
										</div>
										<input type="password" class="form-control pl-15" placeholder="Password" name="pass1">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info border-info"><i class="ti-lock"></i></span>
										</div>
										<input type="password" class="form-control pl-15" placeholder="Retype Password" name="pass2">
									</div>
								</div>

                <?php
                if($submit){
                  if($username!=""){
                  if($fname!=""){
                  if($pass1!=""){
                  $data = mysqli_query($conn, "select username from user where username = '".$username."'");
                  $cek = mysqli_fetch_row($data);
                  $input = ("insert into user(username, password, nama, status) values ('".$username."','".$pass1."','".$fname."','Member');");
                  if($cek[0] == ""){
                    if($pass1 == $pass2){
                      mysqli_query($conn, $input);
                      ?>
                        <script type="text/javascript">
                          alert("Data berhasil ditambahkan");
                          document.location="login.php";
                        </script>
                      <?php
                    }else{
                      echo "password tidak sama";
                    }
                  }else{
                    echo "username sudah ada";
                  }
                  }else{
                    echo "password kosong";
                  }
                  }else{
                    echo "nama lengkap kosong";
                  }
                  }else{
                    echo "Username Kosong";
                  }
                }
                ?>

								  <div class="row">
									<div class="col-12">
									  <div class="checkbox">
										<input type="checkbox" id="basic_checkbox_1" name="cb">
										<label for="basic_checkbox_1">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
									  <input type="submit" class="btn btn-info btn-block margin-top-10" name="submit">SIGN IN</input>
									</div>
									<!-- /.col -->
								  </div>
							</form>

							<div class="text-center">
								<p class="mt-15 mb-0">Already have an account?<a href="login.php" class="text-danger ml-5"> Sign In</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- jQuery 3 -->
	<script src="../../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

	<!-- popper -->
	<script src="../../assets/vendor_components/popper/dist/popper.min.js"></script>

	<!-- Bootstrap 4.0-->
	<script src="../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>


</body>
</html>
