
@extends('html_skeleton')

@section('css_file')
        <link href="{{ asset('css/expertProfile.css') }}" rel="stylesheet">
        <link href="{{ asset('css/how_it_works.css') }}" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection



@section('content')

@extends('commons.navbar')
<div class="center">
        <h1 class=" owl_hub_green" >How it Works</h1>
</div>


<!--          ------------------------------STARTS -->
<!-- Tab links -->

<div class="center">
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Student')"> How Student Account Works </button>
            <button class="tablinks" onclick="openCity(event, 'Teacher')"> How Teacher Account Works  </button>
        </div>
</div>


<!-- Tab content -->
<div id="Student" class="tabcontent">
            <div class="container my-4">

            <!--Grid row-->
            <div class="row">

            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-4">
                <!-- NOTHING SHOULD GO HERE. THIS SHOULD REMAIN EMPTY -->
            </div>
            <!--Grid column-->

            <!--Grid column-->

            <div class="col-lg-4 col-md-6 mb-4">
                <img src="{{ asset('images/step-01.png') }}" alt="img" class="img-fluid">
                
                <img src="http://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(74).jpg" class="img-fluid mb-4" alt=""
                data-wow-delay="0.1s">

                <img src="http://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(64).jpg" class="img-fluid mb-4" alt=""
                data-wow-delay="0.4s">

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">
                <!-- NOTHING SHOULD GO HERE. THIS SHOULD REMAIN EMPTY -->
            </div>
            <!--Grid column-->

            </div>
            <!--Grid row-->

            </div>
 <!-- STUDENT PICTURE DIV ENDS -->
</div>

<div id="Teacher" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p>
</div>


<script>

function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

</script>
 <!-- TABS endsss -->





@endsection
