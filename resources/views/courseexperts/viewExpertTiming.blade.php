@extends('html_skeleton')

@section('css_file')
        <link href="{{ asset('css/expertProfile.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection



@section('content')

@extends('students.studentsnavbar')
<div class="center">
    <h1 class=" owl_hub_green" >My Timing</h1>
</div>
<div class="sidenav">
    <a href="/view_timing" style="color: white;font-weight:Bold ; font-size:20px;">View your Timing</a>
    <a href="/experttiming" style="color: white;font-weight:Bold ; font-size:20px;">Update your Timing</a>
    <a href="/view_courses" style="color: white;font-weight:Bold ; font-size:20px;">View your Courses</a>
    <a href="/expertcourses" style="color: white;font-weight:Bold ; font-size:20px;">Update your Courses</a>
</div>

<!-- Page content -->
<div class="content">
<div class="row">

<div class="column">

    <div class="card">
    <!-- <h4>My Profile</h4> -->
        


        <br>
        <form action="profile-update"  method="POST">
                {{ csrf_field() }}

            <div class="container">
            <div>
                <p>
                    <b> <label for="">Saturday</label> </b>
                    <a  type="text" name="course_timing_saturday" class= "form-control">{{Auth::guard('courseexpert')->user()->course_timing_saturday}}</a>
                </p>
            </div>

                <p>
                    <b> <label for="">Sunday</label> </b>
                    <a type="text" name="course_timing_sunday" class= "form-control">{{Auth::guard('courseexpert')->user()->course_timing_sunday}}</a>
                </p>

                
                      
                <p>
                    <b> <label for="">Monday</label> </b>
                    <a type="text" name="course_timing_monday" class= "form-control">{{Auth::guard('courseexpert')->user()->course_timing_monday}}</a>
                </p>

                <p>
                    <b> <label for="">Tuesday</label> </b>
                    <a type="text" name="course_timing_tuesday" class= "form-control">{{Auth::guard('courseexpert')->user()->course_timing_tuesday}}</a>
                </p>

                <p>
                    <b> <label for="">Wednesday</label> </b>
                    <a type="text" name="course_timing_wednesday" class= "form-control">{{Auth::guard('courseexpert')->user()->course_timing_wednesday}}</a>
                </p>

                <p>
                    <b> <label for="">Thursday</label> </b>
                    <a type="text" name="course_timing_thursday" class= "form-control">{{Auth::guard('courseexpert')->user()->course_timing_thursday}}</a>
                </p>

                <p>
                    <b> <label for="">Friday</label> </b>
                    <a type="text" name="course_timing_friday" class= "form-control">{{Auth::guard('courseexpert')->user()->course_timing_friday}}</a>
                </p>
                        

                        


                        <!-- <p>                             
                                <button class="button">Update Profile</button>
                        </p> -->
                        <!-- <p></p> -->
            </div>
        </form>
    </div>
</div>
</div>
<br>

</div>




@endsection

