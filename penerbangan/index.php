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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="bootstrap-4.6.1-dist/css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <title>Booking</title> 
</head>
<body> 
  <!--Navigasi Bar-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand"  href="index.html"><img src="planee.png" alt="Plane" width="40px"><b>Rika Travel</b></a>
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
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kontak.php">Contact</a>
              </li>
          </ul>
          <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>
        </div>
      </nav>
      <!--ISI-->
      <div class="jumbotron text-center" style="background-image: url(y.jpg); height:70vh; background-size: cover; border-radius: 0px; margin-top: 50px;">
        <img class="img-thumbnail" src="planee.png" alt="Rika" style="height:150px ; border-radius: 100px;">
          <h1 class="affani display-4" style="color: black;"><b>Rika Travel</b></h1>
          <p class="mahasiswa lead" style="color: black;">Terjangkau, Terbaik dan Terpercaya</p>
        </div>
      </div>
      <div class="container" style="font-family: arial;">
      <h1 style="text-align: center;">Pendaftaran Rute Penerbangan</h1>
      <div class="container">
        <form class="box" action="output.php" method="POST">
          <label><strong>Tanggal Keberangkatan</strong></label>
          <input type="date" name="tanggal_keberangkatan" value="<?=isset($_POST['tanggal_keberangkatan']) ? $_POST['tanggal_keberangkatan'] : ''?>" required>
          <label for="nana_maskapai"><strong>Nama Maskapai</strong></label>
          <input type="text" name="nama_maskapai" id="nama_maskapai" required>
          <label for="bandara_asal"><strong>Bandara Asal</strong></label>
          <select name="bandara_asal" id="bandara_asal" required>
            <?php
            foreach ($bandara_asal as $asal => $pajak_asal) {
              ?> 
              <option value="<?= $asal; ?>"><?= $asal; ?></option>
              <?php
            }
            ?>
          </select>
          <label for="bandara_tujuan"><strong>Bandara Tujuan</strong></label>
          <select name="bandara_tujuan" id="bandara_tujuan" required>
            <?php
            foreach ($bandara_tujuan as $tujuan => $pajak_tujuan) {
              ?>
              <option value="<?= $tujuan; ?>"><?= $tujuan; ?></option>
              <?php
            }
            array_multisort($bandara_tujuan, SORT_ASC, $tujuan);
          ?> 
        </select>
        <label for="harga_tiket"><strong>Harga Tiket</strong></label>
        <input type="number" name="harga_tiket" id="harga_tiket" required>
        <input type="submit" value="Daftar" name="daftar">
      </form>
    </div>
    <!--end-->
    <!--Footer-->
    <footer class="bg-dark text-white mt-3 text-center p-1">
        <p>Created By <a href="https://www.instagram.com/fanilixyz/" class="text-white font-italic">Affani Putri Riyandoro</a></p>
          <!--JS Bootstrap-->
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
      <!--GSAP-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script>
          gsap.from('.img-thumbnail',{duration: 1, y:-100, opacity:0});
          gsap.from('.affani', {duration: 1, y:-100, opacity:0})
          gsap.from('.mahasiswa', {duration: 1, y:-100, opacity:0})
        </script>
        <!--AOS-->
      <!--AOS-->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
      AOS.init();
      </script>
    </footer>
</body>
</html>