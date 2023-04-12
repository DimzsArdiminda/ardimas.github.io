<div id="hasil">
    <?php
// memulai sesion
ob_start();
session_start();
// koneksi 
include "konektor.php"; 

//pemeriksaan username dan password
//pembuatan cookie
if(isset($_POST["me"])){
    $akun = $_POST["akun"];
    $sandi = $_POST["sandi"];
    
    //cookie username
    $cookie_name = "user_login"; //nama cookie
    $cookie_value = $akun; // inputan pengguna
    $cookie_expire = time() + (86400 * 30); // waktu kadaluarsa 30 hari dari saat ini
    setcookie($cookie_name, $cookie_value, $cookie_expire, "/"); // "/"" menandakan cookie dapat diakses di seluruh situs
 
     //cookie pass
    $cookie_name = "user_pass"; // nama cookie
    $cookie_value = $sandi; // inputan pengguna
    $cookie_expire = time() + (86400 * 30); // waktu kadaluarsa 30 hari dari saat ini
    setcookie($cookie_name, $cookie_value, $cookie_expire, "/"); // "/"" menandakan cookie dapat diakses di seluruh situs
    
}
if (isset($_POST['login'])){
    $akun = $_POST["akun"];
    $sandi = $_POST["sandi"];
    

    // query dan koneksi
    $query = "SELECT * FROM data_pribadi WHERE alamat_akun = ? AND password_akun = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ss", $akun, $sandi);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        // jika username dan password cocok, ciptakan session
        $row = mysqli_fetch_assoc($result);
        $_SESSION['login'] = $row['alamat_akun']; // atau bisa juga menggunakan ID user
    
        //menuju ke halaman selanjutnya
        header('location: Tugas Portofolio.php');
    } else if ($akun == "admin@hey.admin.com" && $sandi == "makanyok"){
        $_SESSION['login'] = $akun;
        //menuju ke halaman pemeriksaan session
        header("location: lanjut.php");
    }else{
        $error = 'Username atau password salah <br>
        jika belum pernah ganti sandi, reset sandi terlebih dahulu di bawah';
        echo "<h6> $error </h6>";
    }
}
?>


</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- responsiv -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap.css">
    <!-- animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>.:: Jadi Teman Dimas Yuk ::.</title>
    <style>
        .mt-10 {
            margin-top: 20%;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            color: blue;
        }

        a:active {
            color: brown;
        }

        .text-aligin {
            text-align: left;
            list-style-type: none;
        }

        .mt-6 {
            margin-top: 6rem !important;
        }

        img:hover {
            animation: pulse;
            animation-duration: 5s;

        }

        #hasil {
            text-align: center;
        }

        /*Hp*/
        @media (max-width: 576px) {
            .mobile {
                margin-left: 0rem;
                width: 20rem;
            }

            .container-xs {
                justify-content: left;
                width: 100%;
                size: 50px;
            }

        }

        /*Tablet*/
        @media (max-width: 834px) {
            .col-12 {
                flex: 0 0 auto;
                width: 100%;
            }

            .container-xs {
                justify-content: left;
                width: 100%;
                size: 50px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="foto/Tambahkan subjudul (2).png" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                <a class="navbar-brand" href="#">Dimas Ardiminda</a>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Halman_awal.php">Branda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/penggalan.reformasi_/?hl=id">Instagram</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=false&heroEntityKey=urn%3Ali%3Afsd_profile%3AACoAAD69D3EBUAoztj6MO3G4CwJFTiioSbT-M6k&keywords=dimas%20ardiminda%20edia%20putra&origin=RICH_QUERY_SUGGESTION&position=0&searchId=6f1f4be3-88c5-4200-9eec-0b22ae8bf7dd&sid=sjC">Linkdlen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Halaman Login -->
    <form action="" method="post" id="p">
        <div class="container text-center container-md ">
            <div class="row">
                <!-- kolom gambar -->
                <div class="col col-sm-12 mt-3 col-xl-6 tablet animate__animated animate__zoomInLeft">
                    <img src="foto/Tambahkan subjudul (1).png" alt="..." width="400px" class="mobile tablet">
                </div>
                <div class="col col-xl col-sm col mt-10">
                    <!-- kolom isian -->
                    <!-- nama -->
                    <div class="input-group mb-3 me-5 container-sm container-xs" class="kolomisian">
                        <!-- alamat email -->
                        <div class="input-group mb-3 mt-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Alamat akun Heydim_</span>
                            <input type="email" class="form-control" aria-label="Sizing example input"
                                placeholder="example@hey.dim" aria-describedby="inputGroup-sizing-default" id="Email"
                                name="akun" aria-describedby="emailHelp">
                        </div>
                        <span class="input-group-text" id="inputGroup-sizing-default">Kata &nbsp<s>hati</s>&nbsp
                            Sandi</span>
                        <input type="password" class="form-control" aria-label="Sizing example input" id="pass" name="sandi"
                            placeholder="Insyallah akun kamu aman aku jagain kok, percaya deh. janji ga bohong"
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                    <!-- Layout -->
                    <div class="row ms-lg-1 container-xs">
                        <div class="col">
                            <ul class="text-aligin ms-5">
                                <li>
                                    <button class="btn btn-primary" type="submite" name="login">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8Zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5Z" />
                                            <i class="bi bi-arrow-bar-right">Login Gas</i></button>
                                </li>
                                <!-- batas -->
                                <li>
                                    <input class="form-check-input " type="checkbox" name="me">
                                    <label class="form-check-label" for="\invalidCheck">
                                        Ingat saya
                                    </label>
                                </li>
                                <li>
                                    <p style="font-size: small;">Tidak Punya Akun? <a href="pendaftaran.php"> Buat
                                            Kuy</a><br>
                                        Lupa Sandi? <a href="reset_sandi.php"> Reset sandi di sini yakk</a></p>
                                </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

<script>
$(document).ready(function() {
  // Mengatur aksi ketika form di-submit
  $('#p').submit(function(event) {
    // Mendapatkan nilai dari input
    var email = $('#Email').val();
    var password = $('#pass').val();
    var error = '';

    // Validasi input email
    if (!email) {
      error += 'Alamat email wajib diisi.\n';
    } else if (!isValidEmail(email)) {
      error += 'Alamat email tidak valid.\n';
    }

    // Validasi input password
    if (!password) {
      error += 'Kata sandi wajib diisi.\n';
    } else if (password.length < 6) {
      error += 'Kata sandi harus minimal 6 karakter.\n';
    }

    // Jika ada error, tampilkan alert dan stop form submission
    if (error) {
      alert(error);
      event.preventDefault();
    }
  });
});

function isValidEmail(email) {
  var emailRegex = /\S+@\S+\.\S+/;
  return emailRegex.test(email);
}

</script>
</body>

</html>