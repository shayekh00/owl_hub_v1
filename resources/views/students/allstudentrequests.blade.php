@extends('html_skeleton')

@section('css_file')
        <link href="{{ asset('css/search.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection



@section('content')

@extends('students.studentsnavbar')

<div class="center">
                 <h1 style="color: white;font-weight:Bold ; font-size:30px; text-align: center" > Requested Appointments </h1>
</div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @foreach ($accepted_appointments as  $key => $data )
        
        <div class="row">

            <div class="column">

                <div class="card " style="margin:10%">


                    <br>
                    <div class="container">
                                
                                <p > <b> Expert ID: </b>      {{ $data->courseexpert_id }} </p>
                                <p > <b> Course Name: </b>      {{ $data->course_code1 }} </p>
                                <p > <b> Problem Description: </b>    {{ $data->problem_text }} </p>
                                
                                <!-- check if the appointment is accepted by a course expert  -->
                                @if(  ($data->is_accepted) == 1   )

                                    <!-- if the bkash transaction id is not given and confirmed  -->
                                    @if ($data->appointment_transaction_id == '')
                                    <div class="alert alert-success" role="alert">
                                            Your appointment request has been <b>accepted</b> by the Course Expert.
                                            Please pay to 01622808768 to confirm your appointment.
                                    </div>

                                    <form action="/students/thankyou/{{$data->accepted_appointment_id}}" method="post">
                                        {{ csrf_field() }}
                                        <label for="exampleFormControlInput1"> Bkash Transaction ID :</label>
                                        <input name="transaction_id" class="form-control" type="text" placeholder="Bkash Transaction ID">
                                        <br>
                                        <button type="submit" class="button">Submit</button>
                                        <br>
                                        <br>
                                    </form>

                                    <!-- if the bkash transaction id is given and not confirmed -->
                                    @elseif( $data->appointment_transaction_id !== ''  && $data->is_confirmed !==1 )
                                    <div class="alert alert-primary" role="alert">
                                            Your appointment is being confirmed .
                                    </div>


                                    <!-- if the bkash transaction id is given and confirmed -->

                                    @endif

                                @elseif(  ($data->is_accepted) == 0   )
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