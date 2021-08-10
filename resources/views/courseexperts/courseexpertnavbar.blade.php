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

    <!-- <a class="navbar-brand ml-auto mr-1" href="{{route('student_request.index')}}"><i class="fa fa-home"></i> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarid">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarid" >
    <div class="navbar-nav ml-auto" >
      <a class="nav-item nav-link " href="{{route('student_request.index')}}">Home</a>
      
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="/expert_profile">View Profile</a>
          <a  class="dropdown-item" href="/update_expert_profile">Edit Profile</a>
          <a  class="dropdown-item" href="/appointments">Appointments</a>
          <a class="dropdown-item" href="/skypeLink">Add Links</a>


          </div>
      </li>


      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Courses
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('TeacherController.courseExpertCourses')}}">Add Course</a>
          <a  class="dropdown-item" href="/view_courses">View Courses</a>
          <a  class="dropdown-item" href="/update_expert_course">Delete Courses</a>

          </div>
      </li>

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Timing
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="{{route('TeacherController.courseExpertTiming')}}">Add Timing</a>
            <a  class="dropdown-item" href="/view_timing">View Timing</a>

          </div>
      </li>

      <a class="nav-item nav-link" href="{{route('logout')}}">Logout</a>
    </div>
    </div>
</nav>
