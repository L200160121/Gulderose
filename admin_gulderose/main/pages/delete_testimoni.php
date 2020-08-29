<?php
include "../../../.private/koneksi.php";
$del = $_GET['del'];
$sql = "delete from testimoni where id_testimoni='$del' ";
$sql2 = "ALTER TABLE testimoni AUTO_INCREMENT = 1";
$query = mysqli_query($conn, $sql);
$query2 = mysqli_query($conn, $sql2);
if ($query and $query2) {
    ?>
    <script language="JavaScript" type="text/javascript">
      alert('Data Testimoni Telah Terhapus');
      document.location='testimoni.php';
    </script>
    <?php
  }
