@extends('html_skeleton')

@section('css_file')
<link href="{{ asset('css/search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fileupload.css') }}" rel="stylesheet">

@endsection

<link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" sizes="16x16">

@section('content')
<script>

document.getElementById('example-date-input').valueAsDate = new Date();

function validateForm() {
  let x = document.forms["request_form"]["problem_text"].value;

  
  if (x == "") {
    alert("Description about the problem must be filled out");
    return false;
  }
}

</script>

@extends('students.studentsnavbar')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-2"> <img src="/32114.svg" width="80" /></div> -->
                <!-- <div class="container">
                    <h1 class=" owl_hub_green" >Write information about your problem</h1>
                </div> -->
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                <h1 style="color: white;font-weight:Bold ; font-size:30px; text-align: center" >Write information about your problem</h1> <br><br>
                    <form name="request_form" action="/multiuploads/{{$courseexpert_id}}/{{$course_id}}/{{$seletion}}" 
                           method="post" enctype="multipart/form-data" onsubmit="return validateForm()" >
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label style="color:white;" for="Product Name">
                                Please describe your problem elaborately.
                            </label>

                            <!-- <input type="text" name="name" id="problem_description_box" placeholder="Problem Description" > -->

                            <div class="input-group">
                                <!-- <div class="input-group-prepend">
                                    <span class="input-group-text">With textarea</span>
                                </div> -->
                                <textarea class="form-control" name="problem_text" placeholder="Problem Description" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                        <label style="color:white;" for="Product Name">Attach Google Drive Link To any Resources (PPT / Slides / Book PDF) :</label>
                        <label style="color:white;" for="Product Name"> (Please make sure its publicly accessible )</label>
                        <br />
                        <input type="text" class="form-control" placeholder="Drive Link" name="drive_link">
                        <br />
                        <label for="example-date-input" class="col-2 col-form-label" style="color:white;">Deadline</label>

                        <input class="form-control" type="date" value="<?php date_default_timezone_set("Asia/Dhaka");
                                                                            $date = new DateTime();
                                                                            $interval = new DateInterval('P1D');
                                                                            $date->add($interval);
                                                                            echo $date->format("Y-m-d"); 
                                                                        ?>"
                                                                id="example-date-input" 
                                                                name="deadline_date"
                        >



                        <br /><br />

                        <div class="alert alert-secondary" role="alert">
                            <b> <label style="color:black;" for="Product Name"> Appointment Timing Selected:  </label> </b>
                            
                            <label style="color:black;"> {{$appointment_timing}}    </label>
                        
                        </div>

                        <br /><br />
                        <button type="submit" class="button" value="Upload" > Request Course Expert </button>
                    </form>
                </div>
            </div>
        </div>

@endsection
