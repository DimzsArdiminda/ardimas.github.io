<?php
session_start();
if(isset($_SESSION["MASUK"])){
    unset($_SESSION);
    session_destroy();
    header("location: Teman Dimas.php");
}else{
    echo("eror");
}
?>