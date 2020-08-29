<?php
include "../../../.private/koneksi.php";
$del = $_GET['del'];
$sql = "delete from artikel where id_artikel='$del' ";
$sql2 = "ALTER TABLE artikel AUTO_INCREMENT = 1";
$query = mysqli_query($conn, $sql);
$query2 = mysqli_query($conn, $sql2);
if ($query and $query2) {
    ?>
    <script language="JavaScript" type="text/javascript">
      alert('Data Artikel Telah Terhapus');
      document.location='artikel.php';
    </script>
    <?php
  }
