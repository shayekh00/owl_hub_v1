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
    <form action="/student/decision/{{$data -> accepted_appointment_id}}"  method="post">
                {{ csrf_field() }}
            <div class="container">
                    <p > <b> Course Name: </b>  {{$course_name}} </p>
                    <p > <b> Problem: </b>  {{ $data -> problem_text }} </p>
                    <p > <b> Appointment Timing: </b>  {{ $data -> appointment_timing }} </p>
                    <p > <b> Link to Resources: </b>  <a href="{{url($data -> drive_link) }}" >  {{ $data -> drive_link }}  </a> </p>
                    <b> Insert Meeting Link : </b>
                      <input type="text" name="meeting_link" class= "form-control" placeholder="Insert Meeting Link" required >
                    
                      <br>
                    <div class="text-center">
                    <button type="submit" name="action"  class="btn btn-success" value="accept">Accept</button>
                    <button type="submit" name="action"  class="btn btn-danger" value="reject">Reject</button>
                    <!-- <a href="{{ url('/student/accepted/'. $data -> accepted_appointment_id.'/') }}"> <button type="button" class="btn btn-success">Accept</button> </a> 
                    <a href="{{ url('/student/rejected/'. $data -> accepted_appointment_id.'/') }}"> <button type="button" class="btn btn-danger" >Reject</button> </a> -->
                    </div>                                         
            </div>
            
        </form>



        <br>
        <!-- <div class="container">
                    <p > <b> Course Name: </b>  {{$course_name}} </p>
                    <p > <b> Problem: </b>  {{ $data -> problem_text }} </p>
                    <p > <b> Appointment Timing: </b>  {{ $data -> appointment_timing }} </p>
                    <p > <b> Link to Resources: </b>  <a href="{{url($data -> drive_link) }}" >  {{ $data -> drive_link }}  </a> </p>
                    <p>
                      <b> Insert Skype Meet Link for : </b>
                      <input type="text" name="skype_link" class= "form-control" value ="{{Auth::guard('courseexpert')->user()->teachers_skype_link}}">

                    </p>

                    <div class="text-center">
                    <a href="{{ url('/student/accepted/'. $data -> accepted_appointment_id.'/') }}"> <button type="button" class="btn btn-success">Accept</button> </a> 
                    <a href="{{ url('/student/rejected/'. $data -> accepted_appointment_id.'/') }}"> <button type="button" class="btn btn-danger" >Reject</button> </a>
                    </div>                                         
        </div>
    </div> -->

@endforeach
</div>
</div>
<br>


@endsection
