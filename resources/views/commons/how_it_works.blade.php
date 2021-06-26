
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
            <button class="tablinks" onclick="openCity(event, 'Student')"> Click Here for Student Account  </button>
            <button class="tablinks" onclick="openCity(event, 'Teacher')"> Click Here for Teacher Account   </button>
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

               <img src="{{ asset('images/how_it_works/students/student tut-01-min.jpg') }}" alt="img" class="img-fluid">
                <img src="{{ asset('images/how_it_works/students/student tut-02-min.jpg') }}" alt="img" class="img-fluid">
                <img src="{{ asset('images/how_it_works/students/student tut-03-min.jpg') }}" alt="img" class="img-fluid">
                <img src="{{ asset('images/how_it_works/students/student tut-04-min.jpg') }}" alt="img" class="img-fluid">
                <img src="{{ asset('images/how_it_works/students/student tut-05-min.jpg') }}" alt="img" class="img-fluid">
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

            <img src="{{ asset('images/how_it_works/teachers/expert tut-01-min.jpg') }}" alt="img" class="img-fluid">
              <img src="{{ asset('images/how_it_works/teachers/expert tut-02-min.jpg') }}" alt="img" class="img-fluid">
              <img src="{{ asset('images/how_it_works/teachers/expert tut-03-min.jpg') }}" alt="img" class="img-fluid">
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
