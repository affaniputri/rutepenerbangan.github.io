<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/css/bootstrap.css">
    <title>Home</title>
</head>
<body>
    <!--Navigasi Bar-->
    <nav class="navbar  fixed-top  navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand"  href="home.php"><img src="planee.png" alt="Plane" width="40px"><b>Rika Travel</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
      <!--Carousel-->
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>   
  <div class="carousel-inner" style="height:70vh; background-size: cover; border-radius: 0px; margin-top: 50px;">
    <div class="carousel-item active">
      <img src="y.jpg" class="d-block w-100" alt="pesawat">
    </div>
    <div class="carousel-item">
      <img src="pesawaaaat.jpeg" class="d-block w-100" alt="pesawat">
    </div>
    <div class="carousel-item">
      <img src="jjj.jpeg" class="d-block w-100" alt="pesawat">
    </div>
  </div>
 <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
      <!--Galeri-->
     <div class="container">
         <div class="row text-center">
             <div class="col">
                 <h1 class="display-4" style="margin-top: 50px">Wisata List</h1>
             </div>
         </div>
         <div data-aos="fade-up" data-aos-duration="" class="row ml-5 mt-4">
             <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem; margin-right: 30px;">
                    <img src="pantait.jpg" class="card-img-top" alt="...">
                    <div  class="card-body">
                      <h5 class="card-title">Pantai Tambakrejo - Blitar</h5>
                      <p class="card-text">Pantai Tambakrejo ini adalah salah satu dari deratan pantai indah di Jawa Timur yang sayang sekali jika kamu lewatkan.</p>
                      <a href="#" class="btn btn-dark">Baca Selengkapnya</a>
                    </div>
                  </div>
             </div>
             <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem; margin-right: 30px;">
                    <img src="Purau.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pura Uluwatu - Bali</h5>
                      <p class="card-text">Uluwatu temple atau Pura Luhur Uluwatu menjadi tempat wisata populer untuk wisatawan yang pertama kali liburan ke pulau Bali.</p>
                      <a href="#" class="btn btn-dark">Baca Selengkapnya</a>
                    </div>
                  </div>
             </div>
             <div class="col-md-4 mb-3">
                <div class="card" style="width: 18rem; margin-right: 30px;">
                    <img src="Pantaig.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pantai Galesong - Takalar</h5>
                      <p class="card-text">Kawasan Pantai Galesong merupakan objek wisata yang sangat cocok untuk Anda penikmat wisata air. </p>
                      <a href="#" class="btn btn-dark">Baca Selengkapnya</a>
                    </div>
                  </div>
             </div>
         </div>
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
  <!--AOS-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
  </script>
</footer>
</body>
</html>