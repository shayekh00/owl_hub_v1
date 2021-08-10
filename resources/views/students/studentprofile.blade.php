
@extends('html_skeleton')

@section('css_file')
        <!-- <link href="{{ asset('css/expertProfile.css') }}" rel="stylesheet"> -->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/sidebar_new.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


@endsection


@section('content')

@extends('students.studentsnavbar')


<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <!-- <div class="sidebar-header">
                <h3>Bootstrap Sidebar</h3>
            </div> -->

            <ul class="list-unstyled components">
                
                <li>
                    <a href="/student_profile_update" style="color: white;font-weight:Bold ; font-size:20px;">Edit Profile</a>
                </li>
                <li>
                    <a href="/Appointments" style="color: white;font-weight:Bold ; font-size:20px;">Appointments</a>
                </li>

                <!-- <li>
                    <a href="#">About</a>
                </li>
                <li>

                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu"> -->

                    </ul>
                </li>
            </ul>
        </nav>

    <div  id="content" class="center">
        <div class="center">
                    <h1 class="owl_hub_green display-4 font-weight-bold" >My Profile</h1>
        </div>

        <div class="content center">
            <div class="row">

                <div class="column">
                    <div class="card">
                        <br>
                        <form action="profile-update"  method="POST">
                                {{ csrf_field() }}
                            <div class="container">
                                        
                                            <p > <b> Name: </b>  {{Auth::guard('student')->user()->name}} </p>

                                            <p > <b> Phone: </b>  {{Auth::guard('student')->user()->phone}} </p>

                                            <p > <b> Email: </b>  {{Auth::guard('student')->user()->email}} </p>
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success" padding ="1">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
            <br>
        </div>
        
    </div>
</div>



<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});


@endsection
