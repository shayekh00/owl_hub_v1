@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
@endsection



@section('content')

@extends('commons.navbar')
<div class="container">
    <h1 class=" owl_hub_green" > Course Expert Password Reset </h1>
</div>
<div class="container">
  <!--  <h1 class=" owl_hub_green" >Welcome To Owl Hub</h1>---->
</div>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-4">  
          <div class="card"> 
                 <div class="card-body">
                 <form method="POST" action="{{ url('/courseexpert/password-reset/') }}">
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

                        <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" name="action" value="student" class="btn btn-success"> Send Password Reset Email </button>
                            </div>
                        </div>
                        
                    </div>            
                </form>

                </div>
            </div>
        </div>
    </div>
</div>





@endsection