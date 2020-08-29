<?php
include "../../../.private/koneksi.php";
$del = $_GET['del'];
$sql = "delete from kategori where id_kategori='$del' ";
$sql2 = "ALTER TABLE kategori AUTO_INCREMENT = 1";
$query = mysqli_query($conn, $sql);
$query2 = mysqli_query($conn, $sql2);
if ($query and $query2) {
    ?>
    <script language="JavaScript" type="text/javascript">
      alert('Data Kategori Telah Terhapus');
      document.location='kategori.php';
    </script>
    <?php
  }
