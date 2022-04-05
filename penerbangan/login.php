<?php
  if (isset($_POST["submit"])){
    if ($_POST["Username"] == "admin" && $_POST["Password"] == "1234"){
      header("Location: home.php");
      exit;
    } else{
      $error = true;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Login</title> 
</head>
<body style="background-image: url(y.jpg);">
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
      <!--Login-->
 <div class="container5">
   <h1 style="color: white;">Login User</h1>
    <form action="" method="post" class="login-user">
      <label style="color: white;" for="Username">Username</label>
      <input type="text" name="Username" id="Username">
      <label style="color: white;" for="Password">Password</label>
      <input type="Password" name="Password" id="Password">
      <button class="btn" name="submit">Login</button>
      <?php if (isset ($error)) :?>
      <p style="color: navy; font-style: italic;">Username / Password Salah! Silahkan coba lagi.</p>
      <?php endif; ?>
    </form>
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