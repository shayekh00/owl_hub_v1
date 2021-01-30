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

        <form action="{{url('postregister')}}" method="POST" id="signup">
            {{ csrf_field() }}
                <div class="input-group">
                <i class="fa fa-user icon"></i>
                <input id="name" type="text" class="form-control" placeholder="Name" name="name">
                </div>
                @if ($errors->has('name'))
                <br><span class="error">{{ $errors->first('name') }}</span>
                @endif  

                <br>

                <div class="input-group">
                <i class="fa fa-envelope-open" aria-hidden="true"></i>
                <input id="email" type="text" class="form-control" placeholder="Email" name="email" >
                </div>
                @if ($errors->has('email'))
                <br><span class="error">{{ $errors->first('email') }}</span>
                @endif
                <br>

                
                <div class="input-group">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input id="phone" type="tel" class="form-control" placeholder="Phone" name="phone">
                </div>
                @if ($errors->has('phone'))
                   <br> <span class="error">{{ $errors->first('phone') }}</span>
                @endif

                <br>

                <div class="input-group">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input id="password" type="password" class="form-control" placeholder="Password" name="password">
                </div>
                @if ($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                @endif

                <br>


                <div id=SIGN_UP_ID ><p class="font-weight-bolder text-center" >SIGN UP AS</p></div>

                <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <button type="submit" name="action" value="student" class="btn btn-success">Student</button>
                        <button type="submit" name="action" value="courseexpert" class="btn btn-success">Course Expert</button>
                        <button type="submit" name="action" value="both" class="btn btn-success">Both</button>
                    </div>
                </div>
                
            </div>            
        </form>

    </div>
</div>


<!-- SIGN-IN FORM  -->
<div class="login-form-box">

<div id="login_div">
    <form action="{{url('post-login')}}" method="POST" id="login">
    {{ csrf_field() }}
        <div class="input-group">
        <i class="fa fa-envelope-open" aria-hidden="true"></i>
        <input id="email" type="text" class="form-control" name="email" placeholder="Email">
        </div>
        @if ($errors->has('email'))
            <br> <span class="error">{{ $errors->first('email') }}</span>
        @endif
        <br>

        <div class="input-group">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
        </div>
        @if ($errors->has('password'))
            <br> <span class="error">{{ $errors->first('password') }}</span>
        @endif
        <br>

        <div id=SIGN_UP_ID ><p class="font-weight-bolder text-center" >SIGN IN AS</p></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                <button type="submit" name="action" value="student" class="btn btn-success owl_hub_green">STUDENT</button>
                <button type="submit" name="action" value="courseexpert" class="btn btn-success owl_hub_green">COURSE EXPERT</button>
                <button type="submit" name="action" value="both" class="btn btn-success owl_hub_green">BOTH</button>
                
                <br>
                <a href="" style="color:#1A9957; font-weight:normal ; font-size:20px;">Forgot your password ?</a>
                </div>
            </div>
        </div>



    </form>
</div>
</div>



@endsection