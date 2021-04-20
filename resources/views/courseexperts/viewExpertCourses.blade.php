@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/expertProfile.css') }}" rel="stylesheet">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection



@section('content')


@extends('courseexperts.courseexpertnavbar')
<div class="center">
    <h1 class=" owl_hub_green" >My Courses</h1>

   

</div>

<div class="sidenav">
    <a href="/appointments" style="color: white;font-weight:Bold ; font-size:20px;">My Appointments</a>
    <a href="/update_expert_profile" style="color: white;font-weight:Bold ; font-size:20px;">Edit Profile</a>
    <a href="/skypeLink" style="color: white;font-weight:Bold ; font-size:20px;">Add links</a>
    <a href="/view_timing" style="color: white;font-weight:Bold ; font-size:20px;">View Timing</a>
    <!-- <a href="/experttiming" style="color: white;font-weight:Bold ; font-size:20px;">Update your Timing</a> -->
    <a href="/view_courses" style="color: white;font-weight:Bold ; font-size:20px;">View Courses</a>
    <!-- <a href="/expertcourses" style="color: white;font-weight:Bold ; font-size:20px;">Update your Courses</a> -->
    <a href="/update_expert_course" style="color: white;font-weight:Bold ; font-size:20px;">Delete Courses</a>
</div>




           

<!-- Page content -->

@foreach ($courses as  $key => $data )
        
        <div class="row">

            <div class="column">

                <div class="card">


                    <br>
                    <div class="container">
                                <p > <b> Course: </b>  {{ $data->course_code1 }} </p>
                                <p > <b> University: </b>  {{ $data->university_name1 }} </p>                                                        
                    </div>
                </div>
            </div>
        </div>
        
        <br>
       
    @endforeach

    
    @if (session('status'))
 
        <div class="alert alert-success" padding ="1"> 
            {{ session('status') }}
        </div>
    @endif
    



@endsection

