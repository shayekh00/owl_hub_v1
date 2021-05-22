@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/course_expert_timing.css') }}" rel="stylesheet">
@endsection



@section('content')

@extends('commons.navbar')
<div class="container">
    <h1 class="white" ></h1>
</div>

<div class="msg">
    <h1 class="white" >Thank you for signing up with Owl hub</h1>
</div>

<div class="msg">
    <a href="{{route('landing')}}" style="color:white; font-weight:normal ; font-size:20px;">Please click the link to go back and sign in to your account.</a>
</div>

@endsection