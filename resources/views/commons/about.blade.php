@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/course_expert_timing.css') }}" rel="stylesheet">
    <!-- <meta charset="UTF-8"> -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata"> -->
@endsection



@section('content')

@extends('commons.navbar')
<style>
body, html {
  height: 100%;
  font-family: "maven pro", sans-serif;
}

</style>

<body>
  <div class="w3-sand w3-grayscale w3-large">
    <div class="w3-container" id="about">
      <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT OWLHUB</span></h5>
    <p>OwlHub is an online peer-to-peer learning platform for university students all across Bangladesh. 
      Students can sign up as learners or teachers for their respective university courses and get connected 
      online via a video call to assist each other in their academic tasks. OwlHub opens doors to a new and 
      effective version of learning; peer-to-peer learning. It is often we can see university students pursuing 
      their classmates or seniors in the hopes of learning that one concept that they failed to understand in class. 
      A problem like that is prevalent in any university of the world, hence, we hope to mitigate the gap between a 
      plethora of these knowledge seeking and the well performing students of a university course through our platform 
      where they may connect and get a chance to learn and understand the concepts that they missed out in class.</p>
    <div class="w3-panel w3-leftbar w3-light-grey">       
</div>

</div>
</body>


@endsection