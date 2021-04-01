@extends('html_skeleton')

@section('css_file')
        <link href="{{ asset('css/search.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection



@section('content')

@extends('students.studentsnavbar')

<div class="container">
    <h1 class="white" ></h1>
</div>

<div class="msg">
    <h1 class="owl_hub_green" >Thank you for taking an appointment with Owl hub</h1>
</div>

<div class="msg">
    <a href="/" style="color:white; font-weight:normal ; font-size:20px;">
    Please wait for your appointment to be crossed checked by our admin and confirm your transaction id.
    </a>
</div>

@endsection