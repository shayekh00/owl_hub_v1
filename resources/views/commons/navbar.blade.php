<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end">

    <a class="navbar-brand" href="{{route('new_landing')}}">
        <img src="{{ asset('images/logo.png') }}"  width="60" height="60" alt="">
    </a>

    <a class="navbar-brand ml-auto mr-1" href="{{route('landing')}}"><i class="fa fa-home"></i>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link " href="{{route('faq')}}">FAQ</a>
      <a class="nav-item nav-link" href="{{route('about')}}">About Us</a>
      <a class="nav-item nav-link" href="{{route('contactus')}}">Contact</a>
    </div>
  </div>


</nav>