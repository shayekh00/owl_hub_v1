
@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/expertProfile.css') }}" rel="stylesheet">
    
@endsection




@section('content')

@extends('courseexperts.courseexpertnavbar')
<div class="center">
                 <h1 class=" owl_hub_green" >Edit My Profile</h1>
</div>
<div class="sidenav">
    <a href="/update_expert_profile" style="color: white;font-weight:Bold ; font-size:20px;">Edit Profile</a>
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
        <form action="update_expert_profile"  method="POST">
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
                                <button class="button">Update Profile</button>
                        </p>
            </div>
        </form>
    </div>
</div>
</div>
<br>

</div>


@endsection
