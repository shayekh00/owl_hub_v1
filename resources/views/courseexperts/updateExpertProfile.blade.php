
@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/expertProfile.css') }}" rel="stylesheet">
    
@endsection


<link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" sizes="16x16">


@section('content')

@extends('courseexperts.courseexpertnavbar')
<div class="center">
                 <h1 style="color: white;font-weight:Bold ; font-size:30px; text-align: center" >Edit Profile</h1>
</div>


<div class="content">
<div class="row">

<div class="column">

    <div class="card">
    <!-- <h4>My Profile</h4> -->
        

    

        <br>
        <form action="update_expert_profile"  method="POST">
                {{ csrf_field() }}
            <div class="container">
                        <p>
                           <b> <label for="">Name</label> </b>
                            <input type="text" name="name" class= "form-control" value ="{{Auth::guard('courseexpert')->user()->name}}">

                        </p>


                        <p>
                           <b> <label for="">Phone</label> </b>
                            <input type="text" name="phone" class= "form-control" value ="{{Auth::guard('courseexpert')->user()->phone}}">

                        </p>

                        <p>
                           <b> <label for="">Skype Link</label> </b>
                            <input type="text" name="teachers_skype_link" class= "form-control" value ="{{Auth::guard('courseexpert')->user()->teachers_skype_link}}">

                        </p>

                        <p>
                           <b> <label for="">Verification Drive link</label> </b>
                            <input type="text" name="varification_drive_link" class= "form-control" value ="{{Auth::guard('courseexpert')->user()->varification_drive_link}}">

                        </p>

                        <p>
                           <b> <label for="">Appointment Drive Link</label> </b>
                            <input type="text" name="appointment_drive_link" class= "form-control" value ="{{Auth::guard('courseexpert')->user()->appointment_drive_link}}">

                        </p>


                       
                
                        <p>                             
                                <button class="button">Update Profile</button>
                        </p>
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


@endsection
