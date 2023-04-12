<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <title>Latihan 5</title>
    <style>
        .mt-8 {
            margin-top: 15%;
        }

        p{
            font-family: 'Kanit', sans-serif;
        }

        .mb-costum {
            margin-bottom: 8rem;
        }
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap');
    </style>
</head>

<body bg-primary>
    <!-- inputan -->
        <form action="proses_update.php" method="post">
            <div class="container top-50">
                <div class="shadow mt-4 " width="18rem">
                    <div class="card" width="100px">
                        <h6 class="text-center mt-3">
                            Halaman Login
                        </h6>
                        <div class="container card mt-3 mb-5" style="width: 50rem; justify-content: center;">
                            <div class="row">
                                <!-- Alamat Akun -->
                                <div class="input-group mb-3 mt-4">
                                    <span class="input-group-text" >Alamat Akun &nbsp &nbsp</span>
                                    <input type="text" class="form-control" name="akunhey">
                                </div>
                                <!-- passwoard akun -->
                                <div class="input-group mb-3">
                                    <span class="input-group-text" >Password Akun &nbsp &nbsp</span>
                                    <input type="text" class="form-control" name="katasandi">
                                </div>
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
</body>

</html>