@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/expertsidebar.css') }}" rel="stylesheet">
@endsection

<div class="sidenav">
    <a href="/appointments" style="color: white;font-weight:Bold ; font-size:20px;">My Appointments</a>
    <a href="/update_expert_profile" style="color: white;font-weight:Bold ; font-size:20px;">Edit Profile</a>
    <a href="/skypeLink" style="color: white;font-weight:Bold ; font-size:20px;">Add links</a>
    <a href="/view_timing" style="color: white;font-weight:Bold ; font-size:20px;">View Timing</a>
    <a href="/view_courses" style="color: white;font-weight:Bold ; font-size:20px;">View Courses</a>
    <a href="/update_expert_course" style="color: white;font-weight:Bold ; font-size:20px;">Delete Courses</a>
</div>