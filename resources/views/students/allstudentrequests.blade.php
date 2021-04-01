@extends('html_skeleton')

@section('css_file')
        <link href="{{ asset('css/search.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection



@section('content')

@extends('students.studentsnavbar')

<div class="center">
                 <h1 class=" owl_hub_green" > Requested Appointments </h1>
</div>


    @foreach ($accepted_appointments as  $key => $data )
        
        <div class="row">

            <div class="column">

                <div class="card">


                    <br>
                    <div class="container">
                                <p > <b> Expert ID: </b>      {{ $data->courseexpert_id }} </p>
                                <p > <b> Course Name: </b>      {{ $data->course_code1 }} </p>
                                <p > <b> Problem Description: </b>    {{ $data->problem_text }} </p>
                                
                                @if(  ($data->is_accepted) == 1   )
                                    <div class="alert alert-success" role="alert">
                                            Your appointment request has been <b>accepted</b> by the Course Expert.
                                            Please pay to 01622808768 to confirm your appointment.
                                    </div>

                                    <form action="/students/thankyou" method="post">
                                        {{ csrf_field() }}
                                        <label for="exampleFormControlInput1"> Bkash Transaction ID :</label>
                                        <input class="form-control" type="text" placeholder="Bkash Transaction ID">
                                        <br>
                                        <button type="submit" class="button">Submit</button>
                                        <br>
                                        <br>
                                    </form>

                                @elseif(  ($data->is_accepted) == -1   )
                                    <div class="alert alert-primary" role="alert">
                                        Your appointment request is <b>pending</b> to be accepted by the Course Expert.
                                    </div>
                                @else
                                    <div class="alert alert-danger" role="alert">
                                        Your appointment request has <b>been rejected</b> by the Course Expert.
                                    </div>
                                @endif 
                                
                                                      
                    </div>
                </div>
            </div>
        </div>
        <br>
    @endforeach

@endsection