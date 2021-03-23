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
<div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-4">  
          <div class="card"> 
             
                 <div class="card-body">
                    <div class="text-success">
                    <h4>Course ID</h4>
                    <h4>Course Timing</h4>
                    <h4>Problem Text</h4>
                    <h4>Resources                                     
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
                            <div class="text-center">
                            <button type="button" class="btn btn-success">Accept</button> 
                            <button type="button" class="btn btn-danger" >Reject</button> 
                            </div>     
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
    