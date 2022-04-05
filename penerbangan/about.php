<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/css/bootstrap.css">
    <title>About</title>
</head>
<body>
    <!--Navigasi Bar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand"  href="home.php"><img src="planee.png" alt="Plane" width="40px"><b>Rika Travel</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
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
      <!--Jumbotron-->
      <div class="jumbotron text-center" style="background-image: url(y.jpg); height:70vh; background-size: cover; border-radius: 0px; margin-top: 50px;">
        <img class="img-thumbnail" src="planee.png" alt="Rika" style="height:150px ; border-radius: 100px;">
        <div class="container">
          <h1 class="affani display-4" style="color: black;"><b>Rika Travel</b></h1>
          <p class="mahasiswa lead" style="color: black;">Rute Penerbangan Terlengkap</p>
        </div>
      </div>
      <!--About Me-->
      <div class="container">
          <div class="row text-center">
              <div class="col">
                  <h2 class="display-4 mt-2">About Rika Travel</h2>
              </div>
          </div>
          <div class="row justify-content-center mt-2">
              <div data-aos="fade-down" class="col-md-4 mb-3">
                  <p style="text-align: center">Rika Travel adalah perusahaan teknologi yang menyediakan akses bagi masyarakat untuk menemukan dan memesan 
                    layanan transportasi, akomodasi, aktivitas dan gaya hidup. Rika Travel memiliki portofolio produk meliputi 
                    layanan transportasi seperti tiket pesawat, sewa mobil, antar-jemput bandara, serta berbagai pilihan akomodasi, 
                    termasuk hotel, homestay, resort, dan villa. </p>
              </div>
          </div>
      </div>
      <hr>
      <h2>Thankyou^^</h2>
      <!--end-->
      <div align="center" class="container2">
    <a href="logout.php">
      <input type="submit" value="Logout" name="Logout"></a>
  </div>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</footer>
</body>
</html>