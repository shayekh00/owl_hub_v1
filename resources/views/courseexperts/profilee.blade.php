<!-- 
<div class="sidebar">
  <a href="/view_timing">View your Timing</a>
  <a href="/experttiming">Update your Timing</a>
  <a href="/view_courses">View your Courses</a>
  <a href="/update_courses">Update your Courses</a>
</div> -->
@extends('html_skeleton')

@section('css_file')
        <link href="{{ asset('css/expertProfile.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection



@section('content')

@extends('students.studentsnavbar')
<div class="center">
                 <h1 class=" owl_hub_green" >My Profile</h1>
</div>
<div class="sidenav">
    <a href="/view_timing" style="color: white;font-weight:Bold ; font-size:20px;">View your Timing</a>
    <a href="/experttiming" style="color: white;font-weight:Bold ; font-size:20px;">Update your Timing</a>
    <a href="/view_courses" style="color: white;font-weight:Bold ; font-size:20px;">View your Courses</a>
    <a href="/expertcourses" style="color: white;font-weight:Bold ; font-size:20px;">Update your Courses</a>
</div>


<div class="content">
<div class="row">

<div class="column">

    <div class="card">
    <!-- <h4>My Profile</h4> -->
        

    

        <br>
        <form action="profile-update"  method="POST">
                {{ csrf_field() }}
            <div class="container">
                        <p>
                           <b> <label for="">Name</label> </b>
                            <input type="text" name="name" class= "form-control" value ="{{Auth::guard('courseexpert')->user()->name}}">

                        </p>


                        <p>
                           <b> <label for="">Phone</label> </b>
                            <input type="text" name="phone" class= "form-control" value ="{{Auth::guard('courseexpert')->user()->phone}}">

                        </p>

                        <p>
                           <b> <label for="">Email</label> </b>
                           <a type="text" name="email" class= "form-control">{{Auth::guard('courseexpert')->user()->email}}</a>

                        </p>

                       
                
                        <p>                             
                                <button class="button">Update Profile</button>
                        </p>
                        <!-- <p></p> -->
            </div>
        </form>
    </div>
</div>
</div>
<br>

</div>


@endsection
