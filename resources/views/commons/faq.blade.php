@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/course_expert_timing.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
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
        <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">FAQ</span></h5>
        <p>Will OwlHub solve my university assignments?
            OwlHub does not solve university assignments for students, it is here only to educate the beneficiary and not to assist them in any unethical means.
            
            Will OwlHub provide mentors to sit for my exams?
            It goes without saying that OwlHub does not engage itself in such activities, we strictly provide a platform for learners to connect and get the knowledge they want to seek out.
            
            Will OwlHub hand out any solutions to questions/exercise/problems?
            While our course experts are permitted to help solve the questions, they are not in any way guided to give out a soft/hard copy of the solutions. 
            
        </p>
        
        <div class="w3-panel w3-leftbar w3-light-grey">       
    </div>

    <section id="features" class="padd-section text-center wow fadeInUp">

        <div class="container">
            <div class="section-title text-left">
                <h2>How It Works</h2>
            </div>
        </div>

        <section>

            <div class="container">
                <div class="row">
                    
                            <div class="col-md-6 col-lg-3">
                                <div class="feature-block">
                                    <h4>Step 1:</h4>
                                    <img src="{{ asset('images/step-01.png') }}" alt="img" class="img-fluid">
                                    <p>Sign Up on the website</p>
                                </div>
                            </div>
                </div>
            </div>    

        </section>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <h4>Step 2:</h4>
                            <img src="{{ asset('images/step-02.png') }}" alt="img" class="img-fluid">    
                            <p> Search for your course and suitable timing  </p>
                        </div>
                    </div>

                

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <h4>Step 3:</h4>
                            <img src="{{ asset('images/step-03.png') }}" alt="img" class="img-fluid">           
                            <p>Post your problem along with your description and study materials</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <h4>Step 4:</h4>
                            <img src="{{ asset('images/step-04.png') }}" alt="img" class="img-fluid">
                            <p>Pay for your session</p>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <h4>Step 5:</h4>
                            <img src="{{ asset('images/step-05.png') }}" alt="img" class="img-fluid"> 
                            <p>Join your session</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="section-title text-left">
                            <h1>Tutorial</h1>
                            <iframe width="480" height="360"
                                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>
                    </div>


                        


                    
            
    </section>



    </div>
</body>

@endsection



