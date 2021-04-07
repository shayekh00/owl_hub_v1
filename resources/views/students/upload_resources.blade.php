@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/fileupload.css') }}" rel="stylesheet">

@endsection


@section('content')

@extends('students.studentsnavbar')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-2"> <img src="/32114.svg" width="80" /></div> -->
                <div class="container">
                    <h1 class=" owl_hub_green" >Write information about your problem</h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                   
                    <form action="/multiuploads/{{$courseexpert_id}}/{{$course_id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label style="color:white;" for="Product Name">
                                Please describe your problem elaborately.
                            </label>

                            <!-- <input type="text" name="name" id="problem_description_box" placeholder="Problem Description" > -->

                            <div class="input-group">
                                <!-- <div class="input-group-prepend">
                                    <span class="input-group-text">With textarea</span>
                                </div> -->
                                <textarea class="form-control" name="problem_text" placeholder="Problem Description" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                        <label style="color:white;" for="Product Name">Attach Google Drive Link To any Resource(s) :</label>
                        <label style="color:white;" for="Product Name"> (Please make sure its publicly accessible )</label>
                        <br />
                        <input type="text" class="form-control" placeholder="Drive Link" name="drive_link">
                        <br />
                        <label for="example-date-input" class="col-2 col-form-label" style="color:white;">Deadline</label>
                        <input class="form-control" type="date" value="2021-06-25" id="example-date-input" name="deadline_date">
                        <br /><br />
                        <button type="submit" class="btn btn-success" value="Upload" > Request Course Expert </button>
                    </form>
                </div>
            </div>
        </div>

@endsection
