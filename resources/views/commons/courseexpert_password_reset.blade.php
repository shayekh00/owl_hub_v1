@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
@endsection



@section('content')

@extends('commons.navbar')
<div class="container">
    <h1 class=" owl_hub_green" >Reset Student Password</h1>
</div>

<!-- SIGN-UP FORM -->
<div class="signup-form-box">
    <div id="signup_div">

        <form action="{{url('postregister')}}" method="POST" id="signup">
            {{ csrf_field() }}

                <br>
                @if ($errors->has('email'))
                <span class="error">{{ $errors->first('email') }}</span>
                @endif
                <div class="input-group">
                <i class="fa fa-envelope-open" aria-hidden="true"></i>
                <input id="email" type="text" class="form-control" placeholder="Email" name="email" >
                </div>

                <br>

                <div class="input-group">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input id="password" type="password" class="form-control" placeholder="Password" name="password">
                </div>
                @if ($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                @endif

                <br>


                <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <button type="submit" name="action" value="student" class="btn btn-success">Reset</button>
                    </div>
                </div>
                
            </div>            
        </form>

    </div>
</div>