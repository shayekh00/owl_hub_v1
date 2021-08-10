<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Owl Hub</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>



@extends('html_skeleton')

@section('css_file')
        <link href="{{ asset('css/expertProfile.css') }}" rel="stylesheet">
        <link href="{{ asset('css/how_it_works.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          .img-fluid {
              width: 50%;
            }
        </style>
@endsection




@section('content')

@extends('commons.navbar')


@if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
@endif

<body>



<!-- partial:index.partial.html -->
<div class="logmod" style="padding-right:10% ;  padding-left:10%">
  <div class="logmod__wrapper">
    <span class="logmod__close">Close</span>
    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">Login</a></li>
        <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
      </ul>

      <div class="center">
          @if($errors->any())
          <span class="error"> {!! implode('', $errors->all('<div>:message</div>')) !!} </span>
          @endif
      </div>

      <div class="logmod__tab-wrapper" >
      <div class="logmod__tab lgm-1">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
        </div>
            <!-- SIGN UP FORM STARTS HERE -->
        <div class="logmod__form" >
          <form accept-charset="utf-8" action="{{url('postregister')}}" method="POST" id="signup" onkeydown="return event.key != 'Enter';" class="simform">
          {{ csrf_field() }}
          <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="Name">Name*</label>
                <input class="string optional" maxlength="255" id="user-email" placeholder="Name" type="text" size="100" name="name" required/>
              </div>
            </div>

      
            <div class="sminputs">
              <div class="input full">

                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" id="user-email" placeholder="example@email.com" type="email" size="50" name="email" required />
              </div>
            </div>

            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Phone*</label>
                <input class="string optional" maxlength="255" id="user-phone" placeholder="018XXXXXXXX" type="tel" size="10" pattern="[0-9]{11}" name="phone"  required />
              </div>
            </div>

            <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw" placeholder="Password" name="password" type="password" size="50" required/>
              </div>
              <!-- <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                <input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Repeat password" type="text" size="50" />
              </div> -->
            </div>
            <div class="simform__actions ">
              <div class="center">
                <button type="submit" name="action" value="student" class="btn btn-success">Student</button>
                <button type="submit" name="action" value="courseexpert" class="btn btn-success">Course Expert</button>
              </div>
              <!-- <input class="sumbit" name="commit" type="sumbit" value="Student" /> 
              <input class="sumbit" name="commit" type="sumbit" value="Course Expert"/> -->
            </div>
            <!-- <div class="simform__actions">
              <input class="sumbit" name="commit" type="sumbit" value="Create Account" />
              <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
            </div>  -->
          </form>


        </div> 
        <!-- <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Facebook</strong></span>
              </div>
            </a>
              
            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div> -->
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span>
        </div> 
        <div class="logmod__form" >
        <form action="{{url('post-login')}}" class="simform"  method="POST" id="login" onkeydown="return event.key != 'Enter';">
        {{ csrf_field() }}
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" name="email" id="email" placeholder="Email" type="email" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw" name="password" placeholder="Password" type="password" size="50" />
                						<span class="hide-password">Show</span>
              </div>
            </div>
            <div class="simform__actions ">
              <div class="center">
                <button type="submit" name="action" value="student" class="btn btn-success">Student</button>
                <button type="submit" name="action" value="courseexpert" class="btn btn-success">Course Expert</button>
              </div>
              <!-- <input class="sumbit" name="commit" type="sumbit" value="Student" /> 
              <input class="sumbit" name="commit" type="sumbit" value="Course Expert"/> -->
            </div>

            <div class="center">
                <a class="special" role="link" href="{{route('reset_student_password_request')}}" >Forgot your password for Student Account ? Click here</a> <br>
                <a class="special" role="link" href="{{route('reset_courseexpert_password_request')}}" >Forgot your password for Course Expert Account ? Click here</a> <br> <br>
                
            </div>
          
        </form>
        </div>

        <!-- <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Facebook</strong></span>
              </div>
            </a>
            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div> -->

          </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="{{ asset('js/login_page.js') }}"></script>


</body>
</html>
