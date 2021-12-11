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
    <h1 style="color: white;font-weight:Bold ; font-size:30px; text-align: center" >Delete Course</h1>

   

</div>




           

<!-- Page content -->

@foreach ($courses as  $keys => $item1 )
        
        <div class="row">

            <div class="column">

                <div class="card">
                


                    <br>
                    <div class="container">
                                <p > <b> Course: </b>  {{$item1->course_code1}} </p>
                                <p > <b> University: </b>  {{$item1->university_name1}} </p>

                                <div class="container">
                                    <div class="row">
                                        <div class="col text-center">
                                            <a class ="btn btn-danger" href={{"deletes/".$item1->course_id}}>Delete</a>                                                        
                                        </div>
                                    </div>
                                </div>
                                
                    </div>
                </div>
            </div>
        </div>
        
        <br>
       
    @endforeach

    
    
    @if (session('status'))
 
        <div class="alert alert-success" padding ="1" > 
            {{ session('status') }}
        </div>
    @endif
    



@endsection

