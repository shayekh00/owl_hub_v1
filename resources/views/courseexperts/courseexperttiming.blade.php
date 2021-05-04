@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/course_expert_timing.css') }}" rel="stylesheet">
@endsection



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

<div class="container">
    <h1 class="white" >Course Expert Timing</h1>
</div>

<form action="experttiming" method="POST">
    @csrf
    <div class="course-expert-timing">

        <div id="Courses_div">
            {{ csrf_field() }}
                <div class="input-group">
                    <div class="container">
                        <div class="select-box">
                            <a style="color: white;font-weight:Bold ; font-size:25px;">Saturday</a>
                            <select class="select-boxx" name="course_timing_saturday">
                                <option disabled ="disabled" selected ="selected">--choose time</option>
                                <option> 8:00AM - 9:00AM</option>
                                <option> 8:30AM - 9:30AM</option>
                                <option> 9:00AM - 10:00AM</option>
                                <option> 9:30AM - 10:30AM</option>
                                <option> 10:00AM - 11:00AM</option>
                                <option> 10:30AM - 11:30AM</option>
                                <option> 11:00AM - 12:00PM</option>
                                <option> 11:30AM - 12:30PM</option>
                                <option> 12:00PM - 1:00PM</option>
                                <option> 12:30PM - 1:30PM</option>
                                <option> 1:00PM - 2:00PM</option>
                                <option> 1:30PM - 2:30PM</option>
                                <option> 2:00PM - 3:00PM</option>
                                <option> 2:30PM - 3:30PM</option>
                                <option> 3:00PM - 4:00PM</option>
                                <option> 3:30PM - 4:30PM</option>
                                <option> 4:00PM - 5:00PM</option>
                                <option> 4:30PM - 5:30PM</option>
                                <option> 5:00PM - 6:00PM</option>
                                <option> 5:30PM - 6:30PM</option>
                                <option> 6:00PM - 7:00PM</option>
                                <option> 6:30PM - 7:30PM</option>
                                <option> 7:00PM - 8:00PM</option>
                                <option> 7:30PM - 8:30PM</option>
                                <option> 8:00PM - 9:00PM</option>
                                <option> 8:30PM - 9:30PM</option>
                                <option> 9:00PM - 10:00PM</option>
                                <option> 10:30PM - 11:30PM</option>
                                <option> 11:00PM - 12:00AM</option>
                                
                            </select>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <div class="container">
                        <div class="select-box">
                        <a style="color: white;font-weight:Bold ; font-size:25px;">Sunday</a>
                            <select class="select-boxx" name="course_timing_sunday">
                                <option disabled ="disabled" selected ="selected">--choose time</option>
                                <option> 8:00AM - 9:00AM</option>
                                <option> 8:30AM - 9:30AM</option>
                                <option> 9:00AM - 10:00AM</option>
                                <option> 9:30AM - 10:30AM</option>
                                <option> 10:00AM - 11:00AM</option>
                                <option> 10:30AM - 11:30AM</option>
                                <option> 11:00AM - 12:00PM</option>
                                <option> 11:30AM - 12:30PM</option>
                                <option> 12:00PM - 1:00PM</option>
                                <option> 12:30PM - 1:30PM</option>
                                <option> 1:00PM - 2:00PM</option>
                                <option> 1:30PM - 2:30PM</option>
                                <option> 2:00PM - 3:00PM</option>
                                <option> 2:30PM - 3:30PM</option>
                                <option> 3:00PM - 4:00PM</option>
                                <option> 3:30PM - 4:30PM</option>
                                <option> 4:00PM - 5:00PM</option>
                                <option> 4:30PM - 5:30PM</option>
                                <option> 5:00PM - 6:00PM</option>
                                <option> 5:30PM - 6:30PM</option>
                                <option> 6:00PM - 7:00PM</option>
                                <option> 6:30PM - 7:30PM</option>
                                <option> 7:00PM - 8:00PM</option>
                                <option> 7:30PM - 8:30PM</option>
                                <option> 8:00PM - 9:00PM</option>
                                <option> 8:30PM - 9:30PM</option>
                                <option> 9:00PM - 10:00PM</option>
                                <option> 10:30PM - 11:30PM</option>
                                <option> 11:00PM - 12:00AM</option>
                                
                            </select>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <div class="container">
                        <div class="select-box">
                        <a style="color: white;font-weight:Bold ; font-size:25px;">Monday</a>
                            <select class="select-boxx" name="course_timing_monday">
                                <option disabled ="disabled" selected ="selected">--choose time</option>
                                <option> 8:00AM - 9:00AM</option>
                                <option> 8:30AM - 9:30AM</option>
                                <option> 9:00AM - 10:00AM</option>
                                <option> 9:30AM - 10:30AM</option>
                                <option> 10:00AM - 11:00AM</option>
                                <option> 10:30AM - 11:30AM</option>
                                <option> 11:00AM - 12:00PM</option>
                                <option> 11:30AM - 12:30PM</option>
                                <option> 12:00PM - 1:00PM</option>
                                <option> 12:30PM - 1:30PM</option>
                                <option> 1:00PM - 2:00PM</option>
                                <option> 1:30PM - 2:30PM</option>
                                <option> 2:00PM - 3:00PM</option>
                                <option> 2:30PM - 3:30PM</option>
                                <option> 3:00PM - 4:00PM</option>
                                <option> 3:30PM - 4:30PM</option>
                                <option> 4:00PM - 5:00PM</option>
                                <option> 4:30PM - 5:30PM</option>
                                <option> 5:00PM - 6:00PM</option>
                                <option> 5:30PM - 6:30PM</option>
                                <option> 6:00PM - 7:00PM</option>
                                <option> 6:30PM - 7:30PM</option>
                                <option> 7:00PM - 8:00PM</option>
                                <option> 7:30PM - 8:30PM</option>
                                <option> 8:00PM - 9:00PM</option>
                                <option> 8:30PM - 9:30PM</option>
                                <option> 9:00PM - 10:00PM</option>
                                <option> 10:30PM - 11:30PM</option>
                                <option> 11:00PM - 12:00AM</option>
                                
                            </select>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <div class="container">
                        <div class="select-box">
                        <a style="color: white;font-weight:Bold ; font-size:25px;">Tuesday</a>
                            <select class="select-boxx" name="course_timing_tuesday">
                                <option disabled ="disabled" selected ="selected">--choose time</option>
                                <option> 8:00AM - 9:00AM</option>
                                <option> 8:30AM - 9:30AM</option>
                                <option> 9:00AM - 10:00AM</option>
                                <option> 9:30AM - 10:30AM</option>
                                <option> 10:00AM - 11:00AM</option>
                                <option> 10:30AM - 11:30AM</option>
                                <option> 11:00AM - 12:00PM</option>
                                <option> 11:30AM - 12:30PM</option>
                                <option> 12:00PM - 1:00PM</option>
                                <option> 12:30PM - 1:30PM</option>
                                <option> 1:00PM - 2:00PM</option>
                                <option> 1:30PM - 2:30PM</option>
                                <option> 2:00PM - 3:00PM</option>
                                <option> 2:30PM - 3:30PM</option>
                                <option> 3:00PM - 4:00PM</option>
                                <option> 3:30PM - 4:30PM</option>
                                <option> 4:00PM - 5:00PM</option>
                                <option> 4:30PM - 5:30PM</option>
                                <option> 5:00PM - 6:00PM</option>
                                <option> 5:30PM - 6:30PM</option>
                                <option> 6:00PM - 7:00PM</option>
                                <option> 6:30PM - 7:30PM</option>
                                <option> 7:00PM - 8:00PM</option>
                                <option> 7:30PM - 8:30PM</option>
                                <option> 8:00PM - 9:00PM</option>
                                <option> 8:30PM - 9:30PM</option>
                                <option> 9:00PM - 10:00PM</option>
                                <option> 10:30PM - 11:30PM</option>
                                <option> 11:00PM - 12:00AM</option>
                                
                            </select>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <div class="container">
                        <div class="select-box">
                        <a style="color: white;font-weight:Bold ; font-size:25px;">Wednesday</a>
                            <select class="select-boxx" name="course_timing_wednesday">
                                <option disabled ="disabled" selected ="selected">--choose time</option>
                                <option> 8:00AM - 9:00AM</option>
                                <option> 8:30AM - 9:30AM</option>
                                <option> 9:00AM - 10:00AM</option>
                                <option> 9:30AM - 10:30AM</option>
                                <option> 10:00AM - 11:00AM</option>
                                <option> 10:30AM - 11:30AM</option>
                                <option> 11:00AM - 12:00PM</option>
                                <option> 11:30AM - 12:30PM</option>
                                <option> 12:00PM - 1:00PM</option>
                                <option> 12:30PM - 1:30PM</option>
                                <option> 1:00PM - 2:00PM</option>
                                <option> 1:30PM - 2:30PM</option>
                                <option> 2:00PM - 3:00PM</option>
                                <option> 2:30PM - 3:30PM</option>
                                <option> 3:00PM - 4:00PM</option>
                                <option> 3:30PM - 4:30PM</option>
                                <option> 4:00PM - 5:00PM</option>
                                <option> 4:30PM - 5:30PM</option>
                                <option> 5:00PM - 6:00PM</option>
                                <option> 5:30PM - 6:30PM</option>
                                <option> 6:00PM - 7:00PM</option>
                                <option> 6:30PM - 7:30PM</option>
                                <option> 7:00PM - 8:00PM</option>
                                <option> 7:30PM - 8:30PM</option>
                                <option> 8:00PM - 9:00PM</option>
                                <option> 8:30PM - 9:30PM</option>
                                <option> 9:00PM - 10:00PM</option>
                                <option> 10:30PM - 11:30PM</option>
                                <option> 11:00PM - 12:00AM</option>
                                
                            </select>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <div class="container">
                        <div class="select-box">
                        <a style="color: white;font-weight:Bold ; font-size:25px;">Thursday</a>
                            <select class="select-boxx" name="course_timing_thursday">
                                <option disabled ="disabled" selected ="selected">--choose time</option>
                                <option> 8:00AM - 9:00AM</option>
                                <option> 8:30AM - 9:30AM</option>
                                <option> 9:00AM - 10:00AM</option>
                                <option> 9:30AM - 10:30AM</option>
                                <option> 10:00AM - 11:00AM</option>
                                <option> 10:30AM - 11:30AM</option>
                                <option> 11:00AM - 12:00PM</option>
                                <option> 11:30AM - 12:30PM</option>
                                <option> 12:00PM - 1:00PM</option>
                                <option> 12:30PM - 1:30PM</option>
                                <option> 1:00PM - 2:00PM</option>
                                <option> 1:30PM - 2:30PM</option>
                                <option> 2:00PM - 3:00PM</option>
                                <option> 2:30PM - 3:30PM</option>
                                <option> 3:00PM - 4:00PM</option>
                                <option> 3:30PM - 4:30PM</option>
                                <option> 4:00PM - 5:00PM</option>
                                <option> 4:30PM - 5:30PM</option>
                                <option> 5:00PM - 6:00PM</option>
                                <option> 5:30PM - 6:30PM</option>
                                <option> 6:00PM - 7:00PM</option>
                                <option> 6:30PM - 7:30PM</option>
                                <option> 7:00PM - 8:00PM</option>
                                <option> 7:30PM - 8:30PM</option>
                                <option> 8:00PM - 9:00PM</option>
                                <option> 8:30PM - 9:30PM</option>
                                <option> 9:00PM - 10:00PM</option>
                                <option> 10:30PM - 11:30PM</option>
                                <option> 11:00PM - 12:00AM</option>
                                
                            </select>
                        </div>
                    </div>
                </div>

                <div class="input-group">
                    <div class="container">
                        <div class="select-box">
                        <a style="color: white;font-weight:Bold ; font-size:25px;">Friday</a>
                            <select class="select-boxx" name="course_timing_friday">
                                <option disabled ="disabled" selected ="selected">--choose time</option>
                                <option> 8:00AM - 9:00AM</option>
                                <option> 8:30AM - 9:30AM</option>
                                <option> 9:00AM - 10:00AM</option>
                                <option> 9:30AM - 10:30AM</option>
                                <option> 10:00AM - 11:00AM</option>
                                <option> 10:30AM - 11:30AM</option>
                                <option> 11:00AM - 12:00PM</option>
                                <option> 11:30AM - 12:30PM</option>
                                <option> 12:00PM - 1:00PM</option>
                                <option> 12:30PM - 1:30PM</option>
                                <option> 1:00PM - 2:00PM</option>
                                <option> 1:30PM - 2:30PM</option>
                                <option> 2:00PM - 3:00PM</option>
                                <option> 2:30PM - 3:30PM</option>
                                <option> 3:00PM - 4:00PM</option>
                                <option> 3:30PM - 4:30PM</option>
                                <option> 4:00PM - 5:00PM</option>
                                <option> 4:30PM - 5:30PM</option>
                                <option> 5:00PM - 6:00PM</option>
                                <option> 5:30PM - 6:30PM</option>
                                <option> 6:00PM - 7:00PM</option>
                                <option> 6:30PM - 7:30PM</option>
                                <option> 7:00PM - 8:00PM</option>
                                <option> 7:30PM - 8:30PM</option>
                                <option> 8:00PM - 9:00PM</option>
                                <option> 8:30PM - 9:30PM</option>
                                <option> 9:00PM - 10:00PM</option>
                                <option> 10:30PM - 11:30PM</option>
                                <option> 11:00PM - 12:00AM</option>
                                
                            </select>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <button type="submit"  class="btn btn-success">Next Page</button>
                        </div>
                    </div>
                </div>
                


            
        </div>
    </div>

</form>



@endsection