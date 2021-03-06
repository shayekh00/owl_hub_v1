@extends('html_skeleton')

@section('css_file')
        <link href="{{ asset('css/search.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection



@section('content')

@extends('students.studentsnavbar')

<div class="center">
                 <h1 class=" owl_hub_green" >Course Expert List</h1>
</div>

    @foreach ($courseexperts_table_data as  $key => $data )
        
        <div class="row">

            <div class="column">

                <div class="card">


                    <br>
                    <div class="container">
                                <p > <b> Expert ID: </b>  {{ $data->courseexpert_id }} </p>
                                <p> <b> Course: </b> {{ $course_code }}   </p>
                                <p> <b> University: </b> {{ $university_name1 }}  </p>

                                <p>
                                    <a href="{{ route('multiuploads.uploadForm',  $data->courseexpert_id  ) }}">
                                        <button class="button">Continue</button>
                                    </a>
                                </p>
                                <!-- <p></p> -->
                    </div>
                </div>
            </div>
        </div>
        <br>
    @endforeach

@endsection