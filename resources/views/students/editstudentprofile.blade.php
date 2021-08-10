@extends('html_skeleton')

@section('css_file')
        <link href="{{ asset('css/expertProfile.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection



@section('content')

@extends('students.studentsnavbar')
<div class="center">
                 <h1 style="color: white;font-weight:Bold ; font-size:30px; text-align: center" >Edit My Profile</h1>
</div>

<!-- <div class="sidenav">
    <a href="/student_profile_update" style="color: white;font-weight:Bold ; font-size:20px;">Edit Profile</a>
    <a href="/Appointments" style="color: white;font-weight:Bold ; font-size:20px;">Appointments</a>
</div> -->


<div class="content">
<div class="row">

<div class="column">

    <div class="card">
    <!-- <h4>My Profile</h4> -->



        <br>

        <form action="student_profile_update"  method="POST">
                {{ csrf_field() }}

            <div class="container">
                        <p>
                           <b> <label for="">Name</label> </b>
                            <input type="text" name="name" class= "form-control" value ="{{Auth::guard('student')->user()->name}}">

                        </p>


                        <p>
                           <b> <label for="">Phone</label> </b>
                            <input type="text" name="phone" class= "form-control" value ="{{Auth::guard('student')->user()->phone}}">

                        </p>



                        <p>                             
                                <button class="button">Update Profile</button>
                        </p>
                        <!-- <p></p> -->
            </div>
        </form>
    </div>
    <br>
</div>
</div>
<br>

</div>
@endsection