<?php
include "../../../.private/koneksi.php";
$del = $_GET['del'];
$sql = "delete from pesan where id_pesan='$del' ";
$sql2 = "ALTER TABLE pesan AUTO_INCREMENT = 1";
$query = mysqli_query($conn, $sql);
$query2 = mysqli_query($conn, $sql2);
if ($query and $query2) {
    ?>
    <script language="JavaScript" type="text/javascript">
      alert('Data Pesan Telah Terhapus');
      document.location='pesan_kontak.php';
    </script>
    <?php
  }
