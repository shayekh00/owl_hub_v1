<!DOCTYPE html>
<html lang="en">
<head>
	<title>OwlHub Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" src="{{ asset('images/logo.png') }}"/>
	<!-- <img src="{{ asset('images/logo.png') }}"> -->
	<link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing/themify-icons.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= "{{ asset('css/landing/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing/slick.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing/lightbox.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/landing/main.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->

</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="{{route('new_landing')}}">
							<img src= "{{ asset('images/logo1.png') }}" alt="IMG-LOGO" data-logofixed="{{ asset('images/logo2.png') }}">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="{{route('new_landing')}}">Home</a>
								</li>


								<li>
									<a href="{{route('about_us')}}">About</a>
								</li>

								<li>
									<a href="{{route('faq')}}">FAQ</a>
								</li>

								<li>
									<a href="{{route('contact_us')}}">Contact</a>
								</li>

								<li>
									<a href="{{route('landing')}}">Login/Sign up</a>
								</li>

							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<!-- <a href=""class="fa fa-facebook" style="font-size:24px"></a> -->
						<!-- <i class="fa fa-facebook" style="font-size:24px"></i> -->
						<a href="https://www.facebook.com/theowlhubbd"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/theowlhubbd/?hl=en"><i class="fa fa-instagram m-l-21" aria-hidden="true"></i></a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>
		
		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="{{route('new_landing')}}" class="txt19">Home</a>
			</li>


			<li class="t-center m-b-13">
				<a href="{{route('about_us')}}" class="txt19">About</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{route('faq')}}" class="txt19">FAQ</a>
			</li>

			<li class="t-center m-b-33">
				<a href="{{route('contact_us')}}" class="txt19">Contact</a>
			</li>

			<li class="t-center m-b-33">
				<a href="{{route('landing')}}" class="txt19">Login/Sign up</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="{{route('landing')}}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Get Started!
				</a>
			</li>
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->
			

			
			</div>
		</div>
	</aside>

	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/nb4.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown" style="font-size:35px;">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp" style="font-size:40px;">
							OWLHUB
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
							<!-- Button1 -->
							<a href="{{route('landing')}}" class="btn1 flex-c-m size1 txt3 trans-0-4">
								GET STARTED!
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(images/bg23.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown" style="font-size:35px;">
							Country's ﬁrst
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37 " data-appear="fadeInUp" style="font-size:40px;">
							P2P teaching platform
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
							<!-- Button1 -->
							<a href="{{route('landing')}}" class="btn1 flex-c-m size1 txt3 trans-0-4">
								GET STARTED!
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(images/b2.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown"style="font-size:35px;">
							Your guide to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp"style="font-size:40px;">
							better learning
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
							<!-- Button1 -->
							<a href="{{route('landing')}}" class="btn1 flex-c-m size1 txt3 trans-0-4">
								GET STARTED!
							</a>
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick1-dots"></div>
		</div>
	</section>

	<!-- Welcome -->
	<section class="section-welcome bg1-pattern p-t-120 p-b-105" style="background-image: url(images/pattern2.png);">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
							The country's ﬁrst  P2P teaching platform
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							OWL HUB
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							Owlhub is the country's ﬁrst P2P teaching platform.With a vision of onboarding 
							every university students in BD
						</p>

						<a href="/about_us" class="txt4">
							Our Story
							<i class="fa fa-long-arrow-right" style="font-size:24px"></i>
							<!-- <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i> -->
						</a>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="{{ asset('images/oh.jpg') }}" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>

	

	<!-- Our menu -->
	<section class="section-ourmenu bg2-pattern p-t-115 p-b-120">
		<div class="container">
			<div class="title-section-ourmenu t-center m-b-22">
				

				<h3 class="tit5 t-center m-t-2">
					FEATURES
				</h3>
			</div>

			
				<div class="container">
					<div class="row">
						<div class="col-md-4 p-t-30">
							<!-- Block1 -->
							<div class="blo1">
								<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
									<a href="#"><img src="{{ asset('images/f12.jpg') }}" alt="IMG-INTRO"></a>
								</div>
	
								<div class="wrap-text-blo1 p-t-35">
									<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
										GET HELP FROM COURSE EXPERTS
									</h4></a>
	
									<p class="m-b-20">
									Avail on help from course experts for any problems within all range of courses for any university.
									</p>
	
									<a href="#" class="txt4">
										Learn More
										<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
	
						<div class="col-md-4 p-t-30">
							<!-- Block1 -->
							<div class="blo1">
								<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
									<a href="#"><img src="{{ asset('images/f1.jpg') }}" alt="IMG-INTRO"></a>
								</div>
	
								<div class="wrap-text-blo1 p-t-35">
									<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
										Anonymus
									</h4></a>
	
									<p class="m-b-20">
									Both your and the course expert’s identity shall remain hidden so that the student doesn’t feel hesitant to ask questions.
									</p>
	
									<a href="#" class="txt4">
										Learn More
										<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>


						
	
						<div class="col-md-4 p-t-30">
							<!-- Block1 -->
							<div class="blo1">
								<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
									<a href="#"><img src="{{ asset('images/f3.jpg') }}" alt="IMG-INTRO"></a>
								</div>
	
								<div class="wrap-text-blo1 p-t-35">
									<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									On Demand Service
									</h4></a>
	
									<p class="m-b-20">
									All the course experts will be informed immediately via text message once you request them for solving any problem. 
									</p>
	
									<a href="#" class="txt4">
										Learn More
										<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
	
				</div>
			</div>

		</div>
	</section>


	
	


	<!-- Video -->
	<section class="section-video parallax100" style="background-image: url(images/b3.jpg);">
		<div class="content-video t-center p-t-225 p-b-250">
			

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
			Tutorials
			</h3>

			<div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal" data-target="#modal-video-01">
				<div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
					<i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</section>


	

	<!-- Sign up -->
	<div class="section-signup bg1-pattern p-t-85 p-b-85">
		<form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
			<span class="txt5 m-10">
				FEEDBACK
			</span>

			<div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
				<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address" placeholder="say something">
				<i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
			</div>

			<!-- Button3 -->
			<button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
				SEND
			</button>
		</form>
	</div>


	<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Contact Us
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							Dhaka
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							01689846116
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							owlhub@gmail.com
						</li>
					
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Service Times
					</h4>

					<div class="m-b-25">
						
						<a href="#" class="txt15">
							09:30 AM – 11:00 PM
						</a>

						<li class="txt14">
							Every Day
						</li>

					
					</div>

					
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					

				</div>
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						
						<a href="https://www.facebook.com/theowlhubbd" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/theowlhubbd/?hl=en" class="fs-15 c-white"><i class="fa fa-instagram m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2021 All rights reserved  OWL HUB</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01"> 
				<div class="w-full wrap-pic-w op-0-0"><img src="{{ asset('images/video-16-9.jpg') }}" alt="IMG"></div>
				<div class="video-mo-01">
					<!-- <iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0" allowfullscreen></iframe> -->
					<iframe src="https://www.youtube.com/watch?v=iIqWV1eYzKM" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	

<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('js/landing/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('js/landing/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('js/landing/popper.js') }}"></script>
	<script type="text/javascript" src=	"{{ asset('js/landing/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('js/landing/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('js/landing/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/landing/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('js/landing/slick.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/landing/slick-custom.js') }}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('js/landing/parallax100.js') }}"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('js/landing/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script>src="{{ asset('js/landing/lightbox.min.js') }}"</script>
<!--===============================================================================================-->
	<script src="{{ asset('js/landing/main1.js') }}"></script>
<!--===============================================================================================-->
</body>
</html>
