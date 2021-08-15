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
<br>
<br>
<br>
<div class="row">

<div class="column">
@foreach ($accepted_appointment as  $key => $data )
    <div class="card">
        <br>
        <div class="container">
                    <p > <b> Course Name: </b>  {{$course_name}} </p>
                    <p > <b> Problem: </b>  {{ $data -> problem_text }} </p>
                    <p > <b> Appointment Timing: </b>  {{ $data -> appointment_timing }} </p>
                    <p > <b> Link to Resources: </b>  <a href="{{url($data -> drive_link) }}" >  {{ $data -> drive_link }}   </p>

                    <div class="text-center">
                    <a href="{{ url('/student/accepted/'. $data -> accepted_appointment_id.'/') }}"> <button type="button" class="btn btn-success">Accept</button> </a> 
                    <a href="{{ url('/student/rejected/'. $data -> accepted_appointment_id.'/') }}"> <button type="button" class="btn btn-danger" >Reject</button> </a>
                    </div>                                         
        </div>
    </div>
@endforeach
</div>
</div>
<br>


@endsection
