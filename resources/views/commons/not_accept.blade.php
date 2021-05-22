@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/course_expert_timing.css') }}" rel="stylesheet">
@endsection



@section('content')

@extends('commons.navbar')
<div class="container">
    <h1 class="white" ></h1>
</div>

<div class="msg1">
    <h1 class="white" style="color:white; font-weight:normal ; font-size:25px;">Sorry, Currently we are not accepting any course expert. Please come back after 1st January.</h1>
</div>

<div class="msg">
    <a href="{{route('landing')}}" style="color:white; font-weight:normal ; font-size:20px;">Please click the link to go back.</a>
</div>

@endsection