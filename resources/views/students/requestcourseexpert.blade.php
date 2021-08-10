@extends('html_skeleton')

@section('css_file')
<link href="{{ asset('css/requestcourseexpert.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection



@section('content')

@extends('students.studentsnavbar')
<div class="center">
    <h1 style="color: white;font-weight:Bold ; font-size:30px; text-align: center">Request Course Expert</h1>
    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Write information</span>
                </div>
                <input type="text" class="form-control" aria-label="" aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Course Name</span>
                </div>
                <input type="text" class="form-control" aria-label="" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Problem</span>
                </div>
                <input type="text" class="form-control" aria-label="" aria-describedby="inputGroup-sizing-sm">
            </div>


            <h1>Resources</h1>
            <from action="" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file"> <br> <br>
                <button type="button" class="btn btn-success">Upload</button>
                </form>
        </div>

        <button type="button" class="btn btn-success">Request Expert</button>
    </div>





    @endsection