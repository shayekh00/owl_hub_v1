<style>
  .nav-item {
    margin-right: 30px;
}
</style>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end sticky-top">

    <a class="navbar-brand" href="{{route('live_search.index')}}">
        <img src="{{ asset('images/logo.png') }}"  width="60" height="60" alt="">
    </a>

    <!-- <a class="navbar-brand ml-auto mr-1" href="{{route('live_search.index')}}"><i class="fa fa-home"></i> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarid">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarid">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link " href="{{route('live_search.index')}}">Home</a>
      <a class="nav-item nav-link" href="/student_profile">Profile</a>
      <a class="nav-item nav-link" href="{{route('student.allrequest')}}">My Requests</a>
      <a class="nav-item nav-link" href="{{route('logout')}}">Logout</a>
    </div>
  </div>


</nav>