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



@section('content')


@extends('courseexperts.courseexpertnavbar')

<div class="center">
    <h1 style="color: white;font-weight:Bold ; font-size:30px; text-align: center" >My Appointments</h1>
</div>



@if( count($accepted_appointments)== 0 )
        <div class="alert alert-primary" role="alert">
            Currently you have no appointments.
        </div>

@else


@foreach ($accepted_appointments as  $key => $data )
        
        <div class="row">

            <div class="column">

                <div class="card">


                    <br>
                    <div class="container">

                                <p > <b> Course Name: </b>  {{ $data->course_code1 }} </p>
                                <p > <b> Appointment Timing: </b>  {{ $data->appointment_timing }} </p>
                                <p > <b> Problem Text: </b>  {{ $data->problem_text }} </p> 
                                <p > <b> Link of Resources: </b>  {{ $data->drive_link }} </p>
                                                      
                    </div>
                </div>
            </div>
        </div>
        <br>
@endforeach


@endif






@endsection