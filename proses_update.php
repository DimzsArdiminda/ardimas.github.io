<?php
include "konektor.php";
//admin

$nama = $_POST["akunhey"];
$pass = $_POST["katasandi"];

$query = "UPDATE data_pribadi SET password_akun = '$pass' WHERE alamat_akun='$nama'";
$data = mysqli_query($con,$query);
if($data){
    echo "data berhasil dirubah";
    header("location: Latihan_1.php?page=tampil");
}else{
    die("perubahan eror <a href='reset_sandi.php'>kembali</a>");
}
?>
