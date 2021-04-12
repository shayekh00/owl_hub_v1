@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/expertProfile.css') }}" rel="stylesheet">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection



@section('content')


@extends('courseexperts.courseexpertnavbar')
<div class="center">
    <h1 class=" owl_hub_green" >My Timing</h1>
</div>
<div class="sidenav">
    <a href="/update_expert_profile" style="color: white;font-weight:Bold ; font-size:20px;">Edit Profile</a>
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
            @if (session('status'))
                <div class="alert alert-success" padding ="1">
                    {{ session('status') }}
                </div>
            @endif
        </form>
    </div>
</div>
</div>
<br>

</div>




@endsection

