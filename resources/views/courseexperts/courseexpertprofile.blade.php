@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/course_expert_timing.css') }}" rel="stylesheet">
@endsection



@section('content')
@extends('courseexperts.courseexpertnavbar')



<!-- The sidebar -->
<div class="sidebar">
  <!-- <a class="active" href="#home">Home</a> -->
  <a href="#profile">Profile</a>
  <a href="#course_list">Course List</a>
  <a href="#your_timing">Your Timing</a>
</div>

<!-- Page content -->
<div class="content">
  ..
</div>


@endsection