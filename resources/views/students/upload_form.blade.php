@extends('html_skeleton')

@section('css_file')
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  Upload Files </title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->
    <!-- Styles -->
    <!-- <style>
        .container {
            margin-top: 2%;
        }
    </style> -->
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
                    <form action="/multiuploads" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label style="color:white;" for="Product Name">Problem Description</label>
                            <input type="text" name="name" class="form-control" placeholder="Problem Description">
                        </div>
                        <label style="color:white;" for="Product Name">Attach Resources (can attach more than one):</label>
                        <br />
                        <input type="file" class="form-control" name="photos[]" multiple />
                        <br /><br />
                        <input type="submit" class="btn btn-primary" value="Upload" />
                    </form>
                </div>
            </div>
        </div>

@endsection
