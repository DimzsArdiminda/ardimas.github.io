<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initia+l-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Reset sandi</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap');

        label {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body>
    <div id="form">
        <form action="updatesandi.php" method="post">
            <div class="container" style="margin-top:13%;">
                <div class="shadow mt-8 " width="18rem">
                    <div class="card" width="100px">
                        <h6 class="text-center mt-3 mb-3" style="@import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300;500&display=swap');
                        font-family: 'Kanit', sans-serif;">
                            Reset sandi
                        </h6>
                        <div class="container card mt-3 mb-5" style="width: 50rem; justify-content: center;">
                            <div class="row">
                                <!-- alamat akun -->
                                <div class="mb-3">
                                    <label for="nama" class="form-label" style="font-family: 'Kanit', sans-serif;"> Alamat Akun
                                        </label>
                                    <input type="text" class="form-control" id="nama" name="akun"
                                        aria-describedby="nama">
                                    <!-- <div class="form-text"> nama</div> -->
                                </div>
                                <!-- password -->
                                <div class="mb-3">
                                    <label for="nama" class="form-label"> Sandi Baru</label>
                                    <input type="text" class="form-control" name="pass"
                                        aria-describedby="nama">
                                    <!-- <div class="form-text">Nama lengkap ya gyuss</div> -->
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
</body>

</html>