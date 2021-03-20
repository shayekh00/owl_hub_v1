@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
@endsection



@section('content')

@extends('commons.navbar')

<div class="center">
<div class="container">
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdVocVGRHvKL6-tBlQIYhpNj-WCpF76sLeuovrnu4F23Gmmgg/viewform?embedded=true" width="640" height="900" frameborder="0" marginheight="0" marginwidth="0"
    >Loading…</iframe>
</div>
</div>

@endsection