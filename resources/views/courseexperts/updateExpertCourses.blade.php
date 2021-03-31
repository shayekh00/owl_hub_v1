@extends('html_skeleton')

@section('css_file')
        <link href="{{ asset('css/expertProfile.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection



@section('content')

@extends('students.studentsnavbar')
<div class="center">
    <h1 class=" owl_hub_green" >Update Courses</h1>
</div>
<div class="sidenav">
    <a href="/view_timing" style="color: white;font-weight:Bold ; font-size:20px;">View your Timing</a>
    <a href="/experttiming" style="color: white;font-weight:Bold ; font-size:20px;">Update your Timing</a>
    <a href="/view_courses" style="color: white;font-weight:Bold ; font-size:20px;">View your Courses</a>
    <a href="/expertcourses" style="color: white;font-weight:Bold ; font-size:20px;">Update your Courses</a>
</div>
<form action="profile-update"  method="POST">
                        {{ csrf_field() }}
<!-- Page content -->
@foreach ($courses as  $key => $data )
        
        <div class="row">

            <div class="column">

                <div class="card">


                    <br>
                   
                        <div class="container">
                        
                                    <p > <b> Course: </b>  <input type="text" name="name" class= "form-control" value ="{{$data->course_code1}}"> </p>
                                    <p > <b> University: </b>  <input type="text" name="name" class= "form-control" value ="{{$data->university_name1}}"> </p>

                                                    
                        </div>
                    
                </div>
                
            </div>
            
        </div>
        
        <br>
        
    @endforeach
    <p>                             
        <button class="button">Update Profile</button>
     </p>   

     </form>




@endsection

