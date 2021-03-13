@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
@endsection
@section('content')

@extends('courseexperts.courseexpertnavbar')

<!-- <div class="container">
    <h1 class=" owl_hub_green" >Welcome To Owl Hub</h1>
</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
<div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-4">  
          <div class="card"> 
             @foreach($accepted_appointments as $key => $data)
                 <div class="card-body">
                    <div class="text-success">
                    <h2 class="text-center">{{$data->course_id}}</h2>
                    <h2 class="text-center">{{$data->appointment_timing}}</h2>
                @endforeach
                    @foreach($appointment_images as $key => $variable)
                    <h2 class="text-center">{{$variable->problem_text}}</h2>
                    <h2 class="text-center">Resources                                     
                            <a href="#">
                            <span class="text-success">{{$variable->filename}}</span>
                            </a> 
                            </p>
                            <button type="button" class="btn btn-success">Accept</button> 
                    @endforeach
                  </div>
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
    