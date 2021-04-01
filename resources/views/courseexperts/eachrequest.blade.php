@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/course_expert_courses.css') }}" rel="stylesheet">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection



@section('content')


@extends('courseexperts.courseexpertnavbar')


<div class="container">
  <!--  <h1 class=" owl_hub_green" >Welcome To Owl Hub</h1>---->
</div>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-4">  
          <div class="card"> 
          @foreach ($accepted_appointment_timing as  $key => $data )
                 <div class="card-body">
                    <div class="text-success">
                    <h4>Course ID : {{$course_name}} </h4>
                    <h4>Appointment Timing : {{ $data -> appointment_timing }} </h4>
                    <h4>Problem Text : {{$problem_text}} </h4>
                    <h4>Resources :                                    
                            <a href="#">
                            <span class="glyphicon glyphicon-picture" style="color:green;"></span>
                            </a> 
                            <a href="#">
                            <span class="glyphicon glyphicon-picture" style="color:green;"></span>
                            </a>
                            <a href="#">
                            <span class="glyphicon glyphicon-picture" style="color:green;"></span>
                            </a>
                            </p>
                            @if ( ($data->is_accepted) == 0 )
                            <div class="text-center">
                            <a href="{{ url('/student/accepted/'.$accepted_appointment_id.'/') }}"> <button type="button" class="btn btn-success">Accept</button> </a> 
                            <a href="{{ url('/student/rejected/'.$accepted_appointment_id.'/') }}"> <button type="button" class="btn btn-danger" >Reject</button> </a>
                            </div>

                            @else
                            <div class="alert alert-primary" role="alert">
                               You have already responded to this appointment request.
                            </div>
                            @endif
                 </div>
            @endforeach
                   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
    