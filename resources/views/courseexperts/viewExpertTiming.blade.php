@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/expertProfile.css') }}" rel="stylesheet">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
@endsection

<link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" sizes="16x16">


@section('content')


@extends('courseexperts.courseexpertnavbar')
<div class="center">
    <h1 style="color: white;font-weight:Bold ; font-size:30px; text-align: center" >My Timing</h1>
</div>



<!-- Page content -->
<div class="content">
<div class="row">

<div class="column">

    <div class="card">
    <!-- <h4>My Profile</h4> -->
        


        <br>
        <form action="profile-update"  method="POST">
                {{ csrf_field() }}
                

            <div class="container">

            <p > <b> Saturday: </b>  {{Auth::guard('courseexpert')->user()->course_timing_saturday}} </p>
            <p > <b> Sunday: </b>  {{Auth::guard('courseexpert')->user()->course_timing_sunday}} </p>
            <p > <b> Monday: </b>  {{Auth::guard('courseexpert')->user()->course_timing_monday}} </p>
            <p > <b> Tuesday: </b>  {{Auth::guard('courseexpert')->user()->course_timing_tuesday}} </p>
            <p > <b> Wednesday: </b>  {{Auth::guard('courseexpert')->user()->course_timing_wednesday}} </p>
            <p > <b> Thursday: </b>  {{Auth::guard('courseexpert')->user()->course_timing_thursday}} </p>
            <p > <b> Friday: </b>  {{Auth::guard('courseexpert')->user()->course_timing_friday}} </p>


            <!-- <div>
                <p>
                    <b> <label for="">Saturday</label> </b>
                    <a  type="text" name="course_timing_saturday" class= "form-control">{{Auth::guard('courseexpert')->user()->course_timing_saturday}}</a>
                </p>
            </div> -->

             
                        <!-- <p>                             
                                <button class="button">Update Profile</button>
                        </p> -->
                        <!-- <p></p> -->
            </div>
            @if (session('status'))
                <div class="alert alert-success" padding ="1">
                    {{ session('status') }}
                </div>
            @endif
        </form>
    </div>
</div>
</div>
<br>

</div>





@endsection

