<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampilan</title>
  <link rel="stylesheet" href="../bootsrtap/css/bootsrtap.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
  <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" defer></script>
</head>

<body>
  <div class="container mt-5 text-center">
    <table id="myTable" class="table">
      <thead>
        <tr>
          <th>Nama Lengkap</th>
          <th>Tanggal Bulan Tahun</th>
          <th>Jenis Kelamin</th>
          <th>Alamat Akun</th>
          <th>Password Akun</th>
          <th>Asal Kota/Kabupaten</th>
          <th>Hapus</th>
        </tr>
      </thead>
      <tbody>
        <?php
          include "konektor.php";
          $data = mysqli_query($con, "SELECT * FROM data_pribadi ORDER by nama_lengkap DESC");
          while($data2 = mysqli_fetch_array($data)){
            echo "<tr>
            <td>$data2[nama_lengkap]</td>
            <td>$data2[tanggal_bln_thn]</td>
    <td>$data2[jenis_kelamin]</td>
    <td>$data2[alamat_akun]</td>
    <td>$data2[password_akun]</td>
    <td>$data2[asal_kota_kab]</td>
    <td><a href='proses_hapusadmin.php?alamat_akun=$data2[alamat_akun]'>hapus</a></td>
    </tr>";
  }
  ?>
      <tbody>
      </tbody>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();
    });
  </script>
</body>

</html>