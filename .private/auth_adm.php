<?php
if ($_SESSION['status']!="Admin")
{session_destroy();
    ?>
	<script language script="JavaScript">alert('Anda Tidak Berhak Mengakses Halaman Ini');</script>
	<script language script="JavaScript">document.location='pages/login.php';</script>
	<?php
}
?>
