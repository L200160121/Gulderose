<?php
include "../../../.private/koneksi.php";
$del = $_GET['del'];
$sql = "delete from galeri where id_galeri='$del' ";
$sql2 = "ALTER TABLE galeri AUTO_INCREMENT = 1";
$query = mysqli_query($conn, $sql);
$query2 = mysqli_query($conn, $sql2);
if ($query and $query2) {
    ?>
    <script language="JavaScript" type="text/javascript">
      alert('Data Galeri Portofolio Telah Terhapus');
      document.location='galeri_portofolio.php';
    </script>
    <?php
  }
