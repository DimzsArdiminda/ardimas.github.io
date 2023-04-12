<?php
session_start();

if(isset($_SESSION["MASUK"])){
}else{
  die("anda belum login, silahkan login kembali pada halaman<a href='loginadmin.php'> login</a>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <title>Admin Only</title>
    <style>
        a:hover{
            color:red;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-success">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="lanjut.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=input">Input data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=update">Update data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=tampil">Tampilan Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout-admin.php">Keluar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
        <h1 class="text-center">HI MasBro</h1>
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <div id="clock"></div>
            </div>
        </div>
    </div>

    <!-- Load Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <script>
        // Update clock every second
        setInterval(updateClock, 1000);

        // Update clock function
        function updateClock() {
            var now = new Date();
            var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

            var day = days[now.getDay()];
            var date = now.getDate();
            var month = months[now.getMonth()];
            var year = now.getFullYear();
            var hour = now.getHours();
            var minute = now.getMinutes();
            var second = now.getSeconds();

            // Add leading zeros to single digit numbers
            if (hour < 10) {
                hour = "0" + hour;
            }
            if (minute < 10) {
                minute = "0" + minute;
            }
            if (second < 10) {
                second = "0" + second;
            }

            // Build clock string
            var clockStr = day + ', ' + date + ' ' + month + ' ' + year + ' ' + hour + ':' + minute + ':' + second;

            // Update clock element
            $('#clock').html(clockStr);
        }

function isValidEmail(email) {
  var emailRegex = /\S+@\S+\.\S+/;
  return emailRegex.test(email);
}

    </script>
<?php
include ("konektor.php");
isset($_GET["page"]) ?$page=$_GET["page"]:$page="";
//prety url
if($page==""){
    include "beranda.php";
}elseif($page == "input"){
    include "input.php";
}elseif($page == "tampil"){
    include "tampil.php";
}else if ($page == "update"){
  include "update.php";
}elseif($page==""){
  include "logout-admin.php";
}else{
  echo "Halaman tidak ditemukan";
}
?>
</body>
</html>