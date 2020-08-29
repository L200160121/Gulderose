<?php
include "../../../.private/koneksi.php";
$del = $_GET['del'];
$sql1 = "delete from katalog where id_katalog='$del' ";
$sql2 = "delete from kategorikatalog_has_katalog where id_katalog='$del' ";
$sql3 = "ALTER TABLE katalog AUTO_INCREMENT = 1";
$sql4 = "ALTER TABLE kategorikatalog_has_katalog AUTO_INCREMENT = 1";
$query = mysqli_query($conn, $sql1);
$query2 = mysqli_query($conn, $sql2);
$query3 = mysqli_query($conn, $sql3);
$query4 = mysqli_query($conn, $sql4);
if ($query and $query2 and $query3 and $query4) {
    ?>
    <script language="JavaScript" type="text/javascript">
      alert('Data Katalog Telah Terhapus');
      document.location='katalog.php';
    </script>
    <?php
  }
