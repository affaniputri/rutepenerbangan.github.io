<?php 
require 'pesawat.php';


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Rute Penerbangan Terdaftar</title>
</head>
<body style="background-image: url(jjj.jpeg);"> 
    <!--Navigasi Bar-->
    <nav class="navbar  fixed-top  navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand"  href="home.php"><img src="planee.png" alt="Plane" width="40px"><b>Rika Travel</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kontak.php">Contact</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
  <div class="container1">
    <h1 style="text-align: center; margin-top: 90px">Rute Penerbangan Terdaftar</h1>
    <table height="363px">
      <?php
      if (isset($_POST['daftar'])) {
        $tanggal_keberangkatan   = $_POST['tanggal_keberangkatan'];
        $maskapai                = $_POST['nama_maskapai'];
        $asal                    = $_POST['bandara_asal'];
        $tujuan                  = $_POST['bandara_tujuan'];
        $harga_tiket             = $_POST['harga_tiket'];
        $pajak                   = hitung_total_pajak($bandara_asal, $asal, $bandara_tujuan, $tujuan); 
        $total_harga_tiket       = hitung_total_harga_tiket($_POST['harga_tiket'], $pajak);
      }
      ?>
      <tr>
        <td><strong><?php echo "Tanggal Keberangkatan"?></strong></td>
        <td>:</td>
        <td><?php echo "$tanggal_keberangkatan"?></td>
      </tr>

      <tr>
        <td><strong><?php echo "Nama maskapai"?></strong></td>
        <td>:</td>
        <td><?php echo "$maskapai"?></td>
      </tr>

      <tr>
        <td><strong><?php echo "Asal Penerbangan"?></strong></td> 
        <td>:</td> 
        <td><?php echo "$asal"?></td>
      </tr>

      <tr>
        <td><strong><?php echo "Tujuan Penerbangan"?></strong></td>
        <td>:</td>
        <td><?php echo "$tujuan"?></td>
      </tr>

      <tr>
        <td><strong><?php echo "Harga Tiket"?></strong></td> 
        <td>:</td>
        <td><?php echo "".rupiah($harga_tiket)?></td>
      </tr>

      <tr>
        <td><strong><?php echo "Pajak"?></strong></td> 
        <td>:</td> 
        <td><?php echo "".rupiah($pajak) ?></td>
      </tr>

      <tr>
        <td><strong><?php echo "Total Harga Tiket"?></strong></td> 
        <td>:</td>
        <td><?php echo "".rupiah($total_harga_tiket) ?></td>
      </tr>
      </table>
      </div>
      <div align="center" class="container2">
    <form class="btn" action="index.php" method="POST">
      <input type="submit" value="Kembali" name="Kembali">
    </form>
    <a href="logout.php">
      <input type="submit" value="Logout" name="Logout"></a>
  </div>
</body>
</html>