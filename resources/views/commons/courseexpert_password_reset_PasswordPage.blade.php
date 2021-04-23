@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
@endsection



@section('content')

@extends('commons.navbar')
<div class="container">
    <h1 class=" owl_hub_green" > Confirm Your Password Reset </h1>
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
                 <form method="POST" action="/courseexpert/reset-password/{{$token}}/">
                    {{ csrf_field() }}
                        <br>

                        <div class="input-group">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input id="password" type="password" class="form-control" placeholder="Password" name="password"
                            data-bv-identical="true"
                            data-bv-identical-field="confirmPassword"
                            data-bv-identical-message="The password and its confirm are not the same" 
                        />
                        </div>
                        <br>
                        <div class="input-group">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input id="password" type="password" class="form-control" placeholder="Confirm Password" name="password"
                            data-bv-identical="true"
                            data-bv-identical-field="confirmPassword"
                            data-bv-identical-message="The password and its confirm are not the same" 
                        />

                        </div>
                        @if ($errors->has('password'))
                            <span class="error">{{ $errors->first('password') }}</span>
                        @endif

                        <br>

                        <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" name="action" value="student" class="btn btn-success"> Reset Student Password </button>
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