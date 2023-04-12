<?php
include "konektor.php";

$nama = $_POST["akun"];
$pass = $_POST["pass"];

$query = "UPDATE data_pribadi SET password_akun = '$pass' WHERE alamat_akun='$nama'";
$data = mysqli_query($con,$query);
if($data){
    echo "data berhasil dirubah";
    header("location: Teman Dimas.php");
}else{
    die("perubahan eror <a href='reset_sandi.php'>kembali</a>");
}
?>
