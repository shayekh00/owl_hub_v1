@extends('html_skeleton')

@section('css_file')
    
    <link href="{{ asset('css/new_landing.css') }}" rel="stylesheet">
@endsection

@section('content')

@extends('commons.navbar')


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OWLHUB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i"
    rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

</head>

<body>

  <div id="hero" class="home">

    <div class="container">
      <div class="hero-content">
        <h1>OWLHUB <span class="typed"
            data-typed-items="is country's first P2P teaching platform,helps you with your courses., Teaches you better., helps you to get good grades!, Makes your life easy., "></span>
        </h1>


        <ul class="list-unstyled list-social">
          <li><a href="#"><i class="bi bi-facebook"></i></a></li>
          <li><a href="#"><i class="bi bi-twitter"></i></a></li>
          <li><a href="#"><i class="bi bi-instagram"></i></a></li>
          <li><a href="#"><i class="bi bi-linkedin"></i></a></li>

        </ul>
        <meta name="viewport" content="width=device-width, initial-scale=1">
     
        <body>
          <div class="container"></div>
          <div class="center">
          <a href="{{route('landing')}}"><button class="button"><span>Get Started! </span></button></a>
        </div>
        </body>
      </div>
    </div>
  </div>

<body>

<div class="w3-content w3-section" style="max-width:1600px">
  

  <img class="mySlides w3-animate-fading" src="../images/c1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="../images/c2.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="../images/c3.jpg" style="width:100%">
 
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 1600);    
}
</script>

</body>

  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
          <li><a href="#"><i class="bi bi-facebook"></i></a></li>
          <li><a href="#"><i class="bi bi-twitter"></i></a></li>
          <li><a href="#"><i class="bi bi-instagram"></i></a></li>
          <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
        </ul>

      </div>

      <p>&copy; Copyrights OWLHUB. All rights reserved.</p>

      <div class="credits">

        Designed by <a href="https://www.facebook.com/theowlhubbd">OWLHUB TEAM</a>
      </div>

    </div>
  </div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/typed.js/typed.min.js"></script>


  <script src="assets/js/main.js"></script>

</body>

</html>

@endsection