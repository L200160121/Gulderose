<?php
include "../../../.private/koneksi.php";
$del = $_GET['del'];
$sql = "delete from slider where id_slider ='$del' ";
$sql2 = "ALTER TABLE slider AUTO_INCREMENT = 1";
$query = mysqli_query($conn, $sql);
$query2 = mysqli_query($conn, $sql2);
if ($query and $query2) {
    ?>
    <script language="JavaScript" type="text/javascript">
      alert('Data Foto Slider Telah Terhapus');
      document.location='slider.php';
    </script>
    <?php
  }
