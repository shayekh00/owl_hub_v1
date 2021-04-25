
@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/expertProfile.css') }}" rel="stylesheet">
    
@endsection




@section('content')

@extends('courseexperts.courseexpertnavbar')
<div class="center">
                 <h1 class=" owl_hub_green" >My Profile</h1>
</div>

@extends('courseexperts.courseexpertsidebar')



<div class="content">
<div class="row">

<div class="column">

    <div class="card">
    <!-- <h4>My Profile</h4> -->
        

    

        <br>
        <form action="profile-update"  method="POST">
                {{ csrf_field() }}
            <div class="container">
                        
                            <p > <b> Name: </b>  {{Auth::guard('courseexpert')->user()->name}} </p>

                            <p > <b> Phone: </b>  {{Auth::guard('courseexpert')->user()->phone}} </p>

                            <p > <b> Email: </b>  {{Auth::guard('courseexpert')->user()->email}} </p>

                            <p > <b> Skype Link: </b>  {{Auth::guard('courseexpert')->user()->teachers_skype_link}} </p>

                            <p > <b> Verification Drive Link: </b>  {{Auth::guard('courseexpert')->user()->varification_drive_link}} </p>

                            <p > <b> Appointment Drive Link: </b>  {{Auth::guard('courseexpert')->user()->appointment_drive_link}} </p>

<!-- 
            
                        <p>
                           <b> <label for="">Name</label> </b>
                            <a type="text" name="name" class= "form-control">{{Auth::guard('courseexpert')->user()->name}}</a>


                        </p> -->


                       
                
                        <!-- <p>                             
                                <button class="button">Update Profile</button>
                        </p> -->
                        <!-- <p></p> -->
            </div>
            @if (session('status'))
                <div class="alert alert-success" padding ="1">
                    {{ session('status') }}
                </div>
            @endif
        </form>
    </div>
</div>
</div>
<br>

</div>


@endsection
