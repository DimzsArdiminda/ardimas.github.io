<?php
include "konektor.php";

//latihan
if (isset($_GET["alamat_akun"])) {
  $akun = $_GET["alamat_akun"];
  mysqli_query($con, "DELETE FROM data_pribadi where alamat_akun='$akun'")
  or die(mysqli_error($con));

  header("location: Latihan_1.php?page=tampil");
} else {
  die("Penghapusan eror");
}
?>
