
@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/course_expert_timing.css') }}" rel="stylesheet">
    
@endsection




@section('content')

@extends('courseexperts.courseexpertnavbar')
<div class="container">
    <h1 class="white" >Add Skype Link</h1>
</div>

<form action="skypeLink" method="POST">
    @csrf
    <div class="course-expert-timing">

        <div id="Courses_div">
            {{ csrf_field() }}
                <div class="input-group">
                    <div class="container">
                        <div class="col text-center">
                            <input type="text" class="text-field" name="skype_link"  placeholder="" >
                        </div>
                        <div class="col text-center">
                            <button type="submit" name="action" value="teacher" class="btn btn-success owl_hub_green">Add</button>
                        </div>

                        <div class="col text-center">
                            <h1 class="skype_link" style="color: white;font-weight:Bold ; font-size:25px; " >How to add skype link</h1>
                        </div>

                    
                            <iframe width="700" height="400"
                                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>


                    </div>
                </div>
            
        </div>
    </div>

</form>



@endsection