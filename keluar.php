<?php
session_start();
if(isset($_SESSION['login'])){
    unset($_SESSION);
    session_destroy();
    echo "Berhasil Logout";
    echo "<a href='Teman Dimas.php'> Kembali ke login</a>";
}
?>