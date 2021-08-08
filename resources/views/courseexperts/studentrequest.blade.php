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
    <h1 class=" owl_hub_green" >All of Your Student Requests</h1>
</div>


@if ($check_timing == 0)
    <div class="alert alert-danger" role="alert">
         Please 
         <a href="{{route('TeacherController.courseExpertTiming')}}"> click here </a>
         to insert your available time for taking appointments
    </div>
@endif

@if ($check_courses == 0 )
    <div class="alert alert-danger" role="alert">
         Please 
         <a href="{{route('TeacherController.courseExpertCourses')}}"> click here </a>
         to insert your the courses you wish to teach.
    </div>
@endif

@if( count($appointment_images_data)== 0 )
            <div class="alert alert-primary" role="alert">
                You still didn't receive any request from a student.
            </div>

    @else
    
    @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
    @endif



    @foreach ($appointment_images_data as  $key => $data )

        <div class="row">

            <div class="column">

                <div class="card">


                    <br>
                    <div class="container">
                                <p > <b> Course Name: </b>  {{ $data->course_code1 }} </p>
                                <p > <b> Problem: </b>  {{ $data->problem_text }} </p>

                                <div style="text-align:center;">
                    <a  href="{{ url('/courseexperts/eachrequest/'.$data->course_code1.'/'.$data->accepted_appointment_id.'/') }}" >
                        <button type="button" class="btn btn-success">View more</button>
                    </a>
                </div> 
                                
                                                      
                    </div>
                </div>
            </div>
        </div>
        <br>
    @endforeach
    


@endif



@endsection
