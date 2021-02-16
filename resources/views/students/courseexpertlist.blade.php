@extends('html_skeleton')

@section('css_file')
        <link href="{{ asset('css/search.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection



@section('content')

@extends('commons.navbar')
<div class="center">
                 <h1 class=" owl_hub_green" >Course Expert List</h1>
</div>
    
    <div class="row">

        <div class="column">

            <div class="card">

                <div class="container">

                        <h2><img src="Annonymus.jpg"  style="width:100%"></h2>
                            <p >Expert Id:</p>
                            <p>Course:</p>
                            <p>University:</p>
                            <p><button class="button">Continue</button></p>
                </div>
            </div>
         </div>
    </div>
@endsection