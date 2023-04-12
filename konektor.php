<?php
$con = mysqli_connect("localhost","root","","tugas_5(php)");
//cek koneksi
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : ". mysqli_connect_errno();
}
?>