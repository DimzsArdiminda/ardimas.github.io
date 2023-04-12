<?php
session_start();

//pemeriksaan username dan password
if (isset($_POST['MASUK'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    //periksa login
    if($user == "admin@admin.com" && $pass == "udahtobat?"){
        //menciptakan session
        $_SESSION['MASUK'] = $user;
        //menuju ke halaman pemeriksaan session
        header('location: latihan_1.php');
    } else {
        $error = 'Username atau password salah';
        echo "<h6> $error </h6>";
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Form Login Bootstrap</title>
    <!-- Panggil library Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <form action="" method="post">
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Form Login</h5>
              <form>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="MASUK">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
    <!-- Panggil library Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
