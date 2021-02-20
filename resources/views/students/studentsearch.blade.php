@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/search.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection



@section('content')

@extends('students.studentsnavbar')

<div class="container">
    
    <form class="search" action="/action_page.php" style="margin:auto;max-width:400px">
        <div class="input-group">
            <input id="searchBox" type="text" placeholder="Search Your Course here" onkeyup="usersearchTxt(document.getElementById('searchBox').value);">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
            
                <div id="searchTxt">
                </div>
    </form>
</div>
@endsection