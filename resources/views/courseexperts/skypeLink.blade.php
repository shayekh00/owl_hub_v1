
@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/course_expert_timing.css') }}" rel="stylesheet">
    
@endsection




@section('content')

@extends('courseexperts.courseexpertnavbar')





<div class="center">
    <h1 style="color: white;font-weight:Bold ; font-size:30px; text-align: center">Add Links</h1>
</div>



<div class="content">
<div class="row">

<div class="column">

    <div class="card">
    <!-- <h4>My Profile</h4> -->
        

    

        <br>
        <form action="skypeLink"  method="POST">
                {{ csrf_field() }}
            <div class="container">
                        <p>
                           <b> <label for="">Skype link</label> </b>
                            <input type="text" name="skype_link" class= "form-control" value ="">

                        </p>


                        <p>
                           <b> <label for="">Verification Drive link</label> </b>
                            <input type="text" name="varification_drive_link" class= "form-control" value ="">

                        </p>

                        <p>
                           <b> <label for="">Appointment Drive Link</label> </b>
                            <input type="text" name="appointment_drive_link" class= "form-control" value ="">

                        </p>


                       
                
                        <div class="col text-center">
                            <button type="submit" name="action" value="teacher" class="btn btn-success">Add</button>
                        </div>
                        <br>

                        <div class="col text-center">
                            <h1 class="skype_link" style="color: white;font-weight:Bold ; font-size:25px; " >How to add links</h1>
                        </div>

                    
                        <iframe width="410" height="350"
                            src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
            </div>
            
        </form>
        
    </div>
    
    <br>
    
    <!-- @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif -->
</div>

</div>
<br>

</div>




<!-- <form action="skypeLink" method="POST">
    @csrf
    <div class="course-expert-timing">

        <div id="Courses_div">
            {{ csrf_field() }}
                <div class="input-group">
                    <div class="container">
                    
                        <p>
                           <b> <label for="">Skype Link</label> </b>
                           <input type="text" class="text-field" name="skype_link"  placeholder="" >

                        </p>


                        <p>
                           <b> <label for="">Verification Drive link</label> </b>
                           <input type="text" class="text-field" name="varification_drive_link"  placeholder="" >

                        </p>

                        <p>
                           <b> <label for="">Appointment Drive Link</label> </b>
                           <input type="text" class="text-field" name="appointment_drive_link"  placeholder="" >

                        </p>


                       
                        
                        <div class="col text-center">
                            <button type="submit" name="action" value="teacher" class="btn btn-success">Add</button>
                        </div>
                        <br>

                        <div class="col text-center">
                            <h1 class="skype_link" style="color: white;font-weight:Bold ; font-size:25px; " >How to add links</h1>
                        </div>

                    
                            <iframe width="700" height="400"
                                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>


                    </div>
                </div>
            
        </div>
    </div>

</form> -->



@endsection