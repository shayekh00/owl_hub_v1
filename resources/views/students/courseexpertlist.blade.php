@extends('html_skeleton')

@section('css_file')
        <link href="{{ asset('css/search.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

<link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" sizes="16x16">


@section('content')

@extends('students.studentsnavbar')

<div class="center">
                 <h1 style="color: white;font-weight:Bold ; font-size:30px; text-align: center" >Course Expert List</h1>
</div>

    @foreach ($courseexperts_table_data as  $key => $data )
        
        <div class="row">

            <div class="column">

                <div class="card">
                    <br>
                    <div class="container">
                                <form action="/multiuploads/{{$data->courseexpert_id}}/{{$course_id}}/"  method="get" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                    <p > <b> Expert ID: </b>  {{ $data->courseexpert_id }} </p>
                                    <p> <b> Course: </b> {{ $course_code }}    </p>
                                    <p> <b> University: </b> {{ $university_name1}}  </p>
                                   

                                    <p> <b> Select Appointment Timing: </b> 
                                        <select id="timing_selection" class="form-select" name="appointment_timing" aria-label="Default select example">
                                            <option disabled ="disabled" selected ="selected">  </option>
                                            @foreach ($courseexperts_table_data as  $key => $appointment_data )
                                            <option value="{!! $appointment_data->time_id !!}" > <b> {{ $appointment_data->day }} : {{$appointment_data->time}} </b> </option>
                                            @endforeach
                                        </select>
                                    </p>

                                    </div>

                                    <br /><br />
                                    <!-- <button class="button">Continue</button> -->
                                    <input class="button" type="submit" value="Continue" onclick="return Validate()" />

                                     <!-- <a href="{{ url('multiuploads/'.$data->courseexpert_id.'/'.$course_id.'/') }}">
                            
                                        <button class="button">Continue</button>
                                    </a> -->
                                </form>


                                <p>

                                    

                                </p>
                                <!-- <p></p> -->
                    </div>
                </div>
            </div>
        </div>
        <br>
    @break
    @endforeach

<script type="text/javascript">
    function Validate() {
        var timing_selection = document.getElementById("timing_selection");
        if (timing_selection.value == "") {
            //If the "Please Select" option is selected display error.
            alert("Please select a timing for the appointment!");
            return false;
        }
        return true;
    }
</script>

@endsection