@extends('html_skeleton')

@section('css_file')
        <link href="{{ asset('css/expertProfile.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

<link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" sizes="16x16">


@section('content')

@extends('students.studentsnavbar')
<div class="center">
                 <h1 style="color: white;font-weight:Bold ; font-size:30px; text-align: center" >My Profile</h1>
</div>



<div class="content">
<div class="row">

<div class="column">

    <div class="card">
    <!-- <h4>My Profile</h4> -->




        <br>
        <form action="profile-update"  method="POST">
                {{ csrf_field() }}
            <div class="container">

                            <p > <b> Name: </b>  {{Auth::guard('student')->user()->name}} </p>

                            <p > <b> Phone: </b>  {{Auth::guard('student')->user()->phone}} </p>

                            <p > <b> Email: </b>  {{Auth::guard('student')->user()->email}} </p>


                       


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