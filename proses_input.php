<?php 
include "konektor.php";
//admin

// nama
$nama = $_POST["Nama"];
// asal kota
$asal = $_POST["asal"];
// tanggal lahir 
$tanggal = $_POST["tgl"];
//jenis kelamin
$jk = $_POST["jk"];
// alamat login
$akun = $_POST["login"];
// sandi
$sandi = $_POST["sandi"];
$password_hash = password_hash($sandi,PASSWORD_DEFAULT);

$query = "INSERT INTO data_pribadi VALUES('$nama','$tanggal','$jk','$akun','$password_hash','$asal')";
$db = mysqli_query($con, $query);

if($db){
  header("location: Latihan_1.php?page=tampil");
}else{
  die("akun sudah digunakan");
}
?>
