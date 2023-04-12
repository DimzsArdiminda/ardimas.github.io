<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Pendaftaran</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap');

        label {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body>
    <div id="form">
        <form action="proses.php" method="post" id="isi">
            <div class="container mt-3">
                <div class="shadow mt-8 " width="18rem">
                    <div class="card" width="100px">
                        <h6 class="text-center mt-3 mb-3" style="@import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300;500&display=swap');
                        font-family: 'Kanit', sans-serif;">
                            Informasi Pribadi
                        </h6>
                        <div class="container card mt-3 mb-5" style="width: 50rem; justify-content: center;">
                            <div class="row">
                                <!-- nama -->
                                <div class="mb-3">
                                    <label for="nama" class="form-label" style="font-family: 'Kanit', sans-serif;"> Nama
                                        Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="Nama"
                                        aria-describedby="nama">
                                    <!-- <div class="form-text"> nama</div> -->
                                </div>
                                <!-- Asal Kota -->
                                <div class="mb-3">
                                    <label for="nama" class="form-label"> Asal Kota/Kab</label>
                                    <input type="text" class="form-control" name="asal"
                                        aria-describedby="nama">
                                    <!-- <div class="form-text">Nama lengkap ya gyuss</div> -->
                                </div>
                                <!-- Tahun Lahir -->
                                <div class="mb-3">
                                    <label for="nama" class="form-label"> Tanggal Bulan Tahun Kelahiran</label>
                                    <input type="text" class="form-control" name="tgl"
                                        aria-describedby="nama">
                                    <div class="form-text">DD/MM/YYYY</div>
                                </div>
                                <!-- Jenis Kelamin -->
                                <div class="mb-3">
                                    <label for="nama" class="form-label"> Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="jk" name="jk" >
                                </div>
                                <!-- Alamat login-->
                                <div class="mb-3">
                                    <label for="nama" class="form-label"> Alamat akun</label>
                                    <input type="text" class="form-control" id="Email" name="login"
                                        aria-describedby="nama">
                                    <div class="form-text">example@hey.dim</div>
                                </div>
                                <!-- sandi -->
                                <div class="mb-3">
                                    <label for="sandi" class="form-label sandi">Password</label>
                                    <input type="password" class="form-control result" id="sandi" name="sandi">
                                    <div class="form-text">Ketentuan password:
                                        <li>password minimal 9 karakter dan tidak lebih dari 50</li>
                                        <li>setidaknya mengandung 1 angka</li>
                                        <li>setidaknya mengandung 1 huruf besar dan kecil</li>
                                        </div>
                                    </div>
                                    <span id="result">
                                </div>
                                <!-- tampilkan -->
                                <div class="col mb-3">
                                    <button type="submit" class="btn btn-outline-dark" name="masuk">Submit</button>
                                    <button type="reset" class="btn btn-outline-dark" name="hapus">hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
$(document).ready(function() {
  // Mengatur aksi ketika form di-submit
  $('#isi').submit(function(event) {
    // Mendapatkan nilai dari input
    var email = $('#Email').val();
    var password = $('#sandi').val();
    var error = '';

    // Validasi input email
    if (!email) {
      error += 'Alamat email wajib diisi.\n';
    } else if (!isValidEmail(email)) {
      error += 'Alamat email tidak valid.wajib menggunakan @hey.dim \n ';
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

</body>

</html>