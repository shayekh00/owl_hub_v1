@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/course_expert_timing.css') }}" rel="stylesheet">
@endsection

<link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" sizes="16x16">


@section('content')

@extends('courseexperts.courseexpertnavbar')


<style>

a {
  text-align: left;
  padding: 8px;
}
/* select {
  align-self: right;
  padding: 8px;
} */
</style>

<div class="center">
    <h1 style="color: white;font-weight:Bold ; font-size:30px; text-align: center" >Your Student Requests</h1>
    
</div>




@if ($check_timing == 0)
    <div class="alert alert-danger" role="alert">
         Please 
         <!-- <a href="{{route('TeacherController.courseExpertTiming')}}"> click here </a> -->
         <a href="/expert_time"> click here </a>
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

@foreach ($skypelink as  $key => $data )
    @if ($data->teachers_skype_link == "" || $data->varification_drive_link == "" || $data->appointment_drive_link == "" )
        <div class="alert alert-danger" role="alert">
            Please 
            <a href="/skypeLink"> click here </a>
            to insert your necessary documents and meeting link.
        </div>
    @endif


@endforeach


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