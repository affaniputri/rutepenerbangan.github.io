<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/css/bootstrap.css">
   <title>Contact Me</title>
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
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Booking</a>
            </li>
            <li class="nav-item active">
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
          <p class="mahasiswa lead" style="color: black;">Hubungi kami^^</p>
        </div>
      </div>
      <!--Contact Me-->
      <h1 class="text-dark px-md-3" style="margin-top : 20px; text-align: center; font-style: arial"><b>Contact Us</b></h1>
      <p class="px-md-3">If you have a question, please contact us via the form below</p>
      <!--Notification-->
      <div class="alert alert-secondary alert-dismissible fade show d-none" role="alert">
        <strong>Thank You <i class="bi bi-heart-fill text-danger"></i></strong> for sending your feedback
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Content-->
      <form name="contact-me">
        <div class="form-group px-md-3 mt-3">
            <label for="formGroupExampleInput">Email</label>
            <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email">
          </div>
          <br>
        <div class="row px-md-3">
          <div class="col">
            <label for="fn">First Name</label>
            <input type="text" class="form-control" placeholder="First Name" name="nama_depan">
          </div>
          <div class="col">
            <label for="ln">Last Name</label>
            <input type="text" class="form-control" placeholder="Last Name" name="nama_belakang">
          </div>
        </div>
        <br>
        <div class="form-group px-md-3">
            <label for="exampleFormControlTextarea1">Messages</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pesan" placeholder="Form ini bisa menerima pesan kamu, jika ada pertanyaan bisa tulis disini ya^^"></textarea>
          </div>
        <button type="submit" class="btn btn-dark btn-submit" style="margin-left: 15px;">Submit</button>
        <button class="btn btn-dark btn-loading d-none ml-3" type="button" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Loading...
          </button>
      </form>
      <!--end-->
      <!--Footer-->
<footer class="bg-dark text-white mt-3 text-center p-1">
    <p>Created By <a href="https://www.instagram.com/fanilixyz/" class="text-white font-italic">Affani Putri Riyandoro</a></p>
</footer>
<!--Script to google sheet-->
<script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbyMnd9L91eN-Ip-CBotFAk4efTFtBrWEnqnsFeTPt_hueEaYYau03dWop6gy8ncXZaw/exec'
    const form = document.forms['contact-me']
    const btnSubmit = document.querySelector('.btn-submit')
    const btnLoading = document.querySelector('.btn-loading')
    const alert = document.querySelector('.alert')
  
    form.addEventListener('submit', e => {
      e.preventDefault()
      btnLoading.classList.toggle('d-none')
      btnSubmit.classList.toggle('d-none')
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
            btnLoading.classList.toggle('d-none')
            btnSubmit.classList.toggle('d-none')
            alert.classList.toggle('d-none')
            form.reset()
            console.log('Success!', response)
        })
        .catch(error => console.error('Error!', error.message))
    })
  </script>
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
</body>
</html>