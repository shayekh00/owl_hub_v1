    @extends('html_skeleton')

    @section('css_file')
    <link href="{{ asset('css/studentrequest.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @endsection



    @section('content')

    @extends('students.studentsnavbar')

    <div class="center" style="width:30rem; height:auto; width: 100%;">
        <h1 class=" owl_hub_green" >Student Request</h1>

        @foreach ($appointment_images_data as  $key => $data )
        @if( count($appointment_images_data) > 3)
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
                    <p> Problem </p>
                    <p> {{ $data->problem_text  }} </p>
                </div>
                <!-- <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm"> Course Name </span>
                        
                    </div>
                    <input type="text" class="form-control" aria-label="" aria-describedby="inputGroup-sizing-sm">
                    <p> Course Name </p>
                </div> -->
                <div style="text-align:center;">
                    <button type="button" class="btn btn-success">View more</button>
                </div>
            </div>
        </div>
        <br>
        @endif
        @endforeach




        @endsection