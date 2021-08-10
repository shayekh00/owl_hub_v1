<style>
  .nav-item {
    margin-right: 30px;
}

</style>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end sticky-top">

    <a class="navbar-brand" href="{{route('new_landing')}}">
        <img src="{{ asset('images/logo.png') }}"  width="60" height="60" alt="">
    </a>

    <!-- <a class="navbar-brand ml-auto mr-1" href="{{route('new_landing')}}"> -->
      <!-- <i class="fa fa-home"></i> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarid">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarid">
    <div class="navbar-nav  ml-auto">
      <a class="nav-item nav-link" href="{{route('new_landing')}}"> Home </a>
      <a class="nav-item nav-link" href="{{route('how_it_works')}}"> How It Works </a>
      <a class="nav-item nav-link " href="{{route('faq')}}">FAQ</a>
      <a class="nav-item nav-link" href="{{route('about_us')}}">About Us</a>
      <a class="nav-item nav-link" href="{{route('contact_us')}}">Contact</a>
    </div>
  </div>

    </a>


</nav>

