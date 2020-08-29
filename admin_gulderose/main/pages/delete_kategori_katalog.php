<?php
include "../../../.private/koneksi.php";
$del = $_GET['del'];
$sql = "delete from kategoriKatalog where id_kategoriKatalog='$del' ";
$sql2 = "ALTER TABLE kategoriKatalog AUTO_INCREMENT = 1";
$query = mysqli_query($conn, $sql);
$query2 = mysqli_query($conn, $sql2);
if ($query and $query2) {
    ?>
    <script language="JavaScript" type="text/javascript">
      alert('Data Kategori Katalog Telah Terhapus');
      document.location='kategori_katalog.php';
    </script>
    <?php
  }
