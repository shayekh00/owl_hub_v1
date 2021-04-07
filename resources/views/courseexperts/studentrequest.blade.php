    @extends('html_skeleton')

    @section('css_file')
    <link href="{{ asset('css/studentrequest.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @endsection



    @section('content')

    @extends('courseexperts.courseexpertnavbar')

    <div class="center" style="width:30rem; height:auto; width: 100%;">
        <br />
        <h3 align="center" class="owl_hub_green">All of Your Student Request</h3><br />
        @if( count($appointment_images_data)== 0 )
        <div class="alert alert-primary" role="alert">
            You still didn't receive any request from a student.
        </div>
        
        @else

            @foreach ($appointment_images_data as  $key => $data )

            <div class="card" style="width: 30rem;">
            

                <div class="card-body">

                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm"> Course Name </span>
                        </div>
                        <!-- <input type="text" class="form-control" aria-label="" aria-describedby="inputGroup-sizing-sm"> -->
                        <p> {{ $data->course_code1  }} </p>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Problem</span>
                        </div>
                        <p> {{ $data->problem_text  }} </p>
                    </div>
                    <div style="text-align:center;">
                        <a  href="{{ url('/courseexperts/eachrequest/'.$data->course_code1.'/'.$data->accepted_appointment_id.'/') }}" >
                            <button type="button" class="btn btn-success">View more</button>
                        </a>
                    </div>

                </div>
            </div>
            <br>

            @endforeach


        @endif



        @endsection