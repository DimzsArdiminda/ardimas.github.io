
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel="stylesheet" href="bootstrap.css">
  <!-- animasi css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <!-- toogle -->
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
  <!-- js boostrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
  </script>
  <!-- link css -->
  <link rel="stylesheet" href="style.css">
  <style>
    @media (max-width: 428px) {
      .foto-1{
        width: 5rem;
    }
    }
    .mt-jarak {
      margin-top: 25px;
    }

    .navbar {
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      background-color: #738a94;
    }

    a {
      text-decoration: none;
      color: #e1e1e1;
    }

    a:hover {
      color: #151719;
    }

    a:active {
      color: #272c31;
    }

    .bg-costum1 {
      background-color: #272c31;
    }

    h1 {
      color: #e1e1e1;
      font-family: initial;
    }

    h5 {
      color: beige;
    }

    .bg-footer {
      background-color: #738a94;
    }

    .mt-costum {
      margin-top: 10px;
    }

    .mt-costum1 {
      margin-top: 6rem !important
    }

    p {
      color: #e1e1e1;
    }

    #clock {
      color: #e1e1e1;
    }
    .mx-costum{
      margin-left: 4rem;
    }
    #date {
      color: #e1e1e1;
    }
    .mr-costum{
      margin-right: 10rem;
    }

    h4 {
      color: #e1e1e1;
      font-family: Arial, Helvetica, sans-serif;
    }

    h1 {
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    h6 {
      font-family: monospace;
      font-size: small;
      color: #e1e1e1;
    }

    .footer {
      font-size: 10px;
    }
    .ms-6{
      margin-left: 6rem;
    }
    .ms-7{
      margin-left: 6.5rem;
    }
  </style>
  <title>My Portfolio</title>
</head>

<body style="background-color: #151719;">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="foto/Tambahkan subjudul (2).png" alt="Logo" width="30" height="24"
          class="d-inline-block align-text-top">
        <a class="navbar-brand" href="#">Dimas Ardiminda</a>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <img src="foto/Tambahkan subjudul (1).png" class="navbar-toggler-icon" alt="">
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Tugas Portofolio.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.instagram.com/penggalan.reformasi_/?hl=id">Instagram</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"
            href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=false&heroEntityKey=urn%3Ali%3Afsd_profile%3AACoAAD69D3EBUAoztj6MO3G4CwJFTiioSbT-M6k&keywords=dimas%20ardiminda%20edia%20putra&origin=RICH_QUERY_SUGGESTION&position=0&searchId=6f1f4be3-88c5-4200-9eec-0b22ae8bf7dd&sid=sjC">Linkdlen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Teman Dimas.php">Teman Dimas</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End oif navbar -->
  <!-- jam -->
  <div id="clock" class="ms-4 mt-costum1 animate__animated animate__backInLeft animate__slow"></div>
  <div id="date" class="ms-4 animate__animated animate__backInLeft animate__slow"></div>
  <script>
    function updateClock() {
      var currentTime = new Date();
      var currentHours = currentTime.getHours();
      var currentMinutes = currentTime.getMinutes();
      var currentSeconds = currentTime.getSeconds();
      currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
      currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;
      var timeOfDay = (currentHours < 12) ? "AM" : "PM";
      currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
      currentHours = (currentHours == 0) ? 12 : currentHours;
      var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
      document.getElementById("clock").innerHTML = currentTimeString;

      var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
      var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
        'November', 'Desember'
      ];
      var day = days[currentTime.getUTCDay()];
      var date = currentTime.getUTCDate();
      var month = months[currentTime.getUTCMonth()];
      var year = currentTime.getUTCFullYear();
      var dateString = day + ', ' + date + ' ' + month + ' ' + year;
      document.getElementById("date").innerHTML = dateString;
    }
    setInterval(updateClock, 1000);
  </script>

  <!-- Layout -->
  <div class="container text-center mt-3 container-sm container-md ">
    <div class="row text-center">
      <h1 class="animate__animated animate__backInLeft animate__slow">Hallo User's!!!</h1>
    </div>
    <div class="row ">
      <div class=" col-xl-8 col-sm-6 col-12">
        <h4 class="text-start mt-mobile-4 animate__animated animate__backInRight">Dimas Ardiminda Edia Putra</h4>
        <h6 class="text-start animate__animated animate__backInDown animate__slow">lagi setelan sok sibuk aja sih</h6>
        <br><br><br>
        <p></p>
      </div>
      <div class="col-xl-4 col-12 col-sm-6 mb-mobile-3 animate__animated animate__backInDown">
        <img src="foto/IMG20211002175609-removebg-preview1.png" alt=".." width="250">
        <h5 class=" me-2 mt-costum">Fullstack developer :v</h5>
        <p class="mb-0">aamiin</p>
      </div>
    </div>
    <!-- layout foto -->
    <div class="row row-cols-1 row-cols-md-2 g-4 ms-5 animate__animated animate__bounceInUp">
      <div class="col-xl-4 col-4 animate__animated animate__bounceInUp animate__slow">
        <div class="card foto-1 me-5" style="width: 15rem;">
          <img src="foto/IMG20200521052120.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-costum1">
            <h5 class="card-title">lamp</h5>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-12 mt-mobile-2 animate__animated animate__bounceInUp">
        <div class="card foto-1" style="width: 15rem;">
          <img src="foto/IMG20200602143721.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-costum1">
            <h5 class="card-title">Kartini's day</h5>
          </div>
        </div>
      </div>
      <div class="col-xl col-12 mt-mobile-2 mt-tablet-2 animate__animated animate__bounceInUp animate__fast">
        <div class="card " style="width: 15rem;">
          <img src="foto/IMG20200521051309.jpg" class="card-img-top" alt="...">
          <div class="card-body bg-costum1">
            <h5 class="card-title">Tree in frame</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- layout ke vidio -->
    <div class="row mt-4 me-3 mb-3 animate__animated animate__bounceInUp animate__slower">
      <center><div class="card kanan-c" style="width: 15rem;">
        <video controls>
          <!-- <source src="foto/1080_30_17.48_Aug062019.mp4"> -->
        </video>
        <div class="card-body bg-costum1 .kanan">
          <h5 class="card-title">vidio gabut</h5>
        </div>
      </div></center>
      <div class="mt-5">
        <h4>Login for more content</h4>
      </div>
    </div>
    </div>
    <!-- layout footer  -->
    <div class="row text-center">
      <div class="col bg-yellow"> </div>
      <div class="col"></div>
    </div>
    <center><footer>
      <p class="text-center footer">copyright © 2023 all rights reserved</p>
    </footer></center>
  </div>
</body>

</html>