@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
@endsection



@section('content')

@extends('commons.navbar')
<div class="container">
    <h1 class=" owl_hub_green" >Welcome To Owl Hub</h1>
</div>

<!-- SIGN-UP FORM -->
<div class="signup-form-box">
    <div id="signup_div">
        <form id="signup">

        <div class="input-group">
            <i class="fa fa-user icon"></i>
            <input id="name" type="text" class="form-control" name="signp_name" placeholder="Name">
            </div>
            <br>

            <div class="input-group">
            <i class="fa fa-envelope-open" aria-hidden="true"></i>
            <input id="email" type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <br>

            
            <div class="input-group">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <input id="phone" type="tel" class="form-control" name="signp_phone" placeholder="Phone">
            </div>
            <br>

            <div class="input-group">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <br>


            <div id=SIGN_UP_ID ><p class="font-weight-bolder text-center" >SIGN UP AS</p></div>

            <div class="container">
            <div class="row">
                <div class="col text-center">
                    <button type="button" class="btn btn-success">Course Expert</button>
                    <button type="button" class="btn btn-success">Both</button>
                    <button type="button" class="btn btn-success">Student</button>
                </div>
            </div>
            
        </div>            
        </form>
    </div>
</div>


<!-- SIGN-IN FORM  -->
<div class="login-form-box">
<div id="login_div">
    <form id="login">

        <div class="input-group">
        <i class="fa fa-envelope-open" aria-hidden="true"></i>
        <input id="email" type="text" class="form-control" name="email" placeholder="Email">
        </div>
        <br>

        <div class="input-group">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col text-center">
                <button type="button" class="btn btn-success owl_hub_green">SIGN IN</button>
                <br>
                <a href="" style="color:#1A9957; font-weight:normal ; font-size:20px;">Forgot your password ?</a>
                </div>
            </div>
        </div>



    </form>
</div>
</div>



@endsection