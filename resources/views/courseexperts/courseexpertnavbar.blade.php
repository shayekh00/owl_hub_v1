<style>
  .nav-item {
    margin-right: 30px;
}
</style>

<!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end" > -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end sticky-top" >

    <a class="navbar-brand" href="{{route('student_request.index')}}">
        <img src="{{ asset('images/logo.png') }}"  width="60" height="60" alt="">
    </a>

    <a class="navbar-brand ml-auto mr-1" href="{{route('student_request.index')}}"><i class="fa fa-home"></i>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
    <div class="navbar-nav" >
      <a class="nav-item nav-link " href="{{route('student_request.index')}}">Home</a>
      <a class="nav-item nav-link" href="{{route('courseexperts.expertProfile')}}">Profile</a>
      <a class="nav-item nav-link" href="{{route('TeacherController.courseExpertCourses')}}">Add Course</a>
      <a class="nav-item nav-link" href="{{route('TeacherController.courseExpertTiming')}}">Add Time</a>
      <a class="nav-item nav-link" href="{{route('logout')}}">Logout</a>
    </div>
    </div>
</nav>