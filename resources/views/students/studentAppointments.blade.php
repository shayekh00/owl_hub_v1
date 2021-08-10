@extends('html_skeleton')

@section('css_file')
        <link href="{{ asset('css/expertProfile.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection



@section('content')

@extends('students.studentsnavbar')
<div class="center">
                 <h1 class="owl_hub_green display-4 font-weight-bold" >My Appointments</h1>
</div>


@foreach ($accepted_appointments as  $key => $data )

        <div class="row">

            <div class="column">

                <div class="card">

                    <br>
                    <div class="container">
                                <p > <b> Appointment ID: </b>  {{ $data->accepted_appointment_id }} </p>
                                <p > <b> Course Name: </b>  {{ $data->course_code1 }} </p>
                                <p > <b> Appointment Timing: </b>  {{ $data->appointment_timing }} </p>

                    </div>
                </div>
            </div>
        </div>
        <br>
@endforeach
@endsection