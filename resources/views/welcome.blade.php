<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>EcoFresh - Drinking Water</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('ecofresh/images/fav-icon/icon.png') }}">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('ecofresh/css/style.css?v=3') }}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('ecofresh/css/responsive.css?v=5') }}">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="{{ asset('ecofresh/vendor/html5shiv.js') }}"></script>
			<script src="{{ asset('ecofresh/vendor/respond.js') }}"></script>
		<![endif]-->
			
	</head>

	<body>
		<div class="main-page-wrapper home-page-three">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>



			<div class="html-top-content">
				<!-- 
				=============================================
					Theme Header
				============================================== 
				-->
				<header class="theme-main-header">
					<div class="container">
						<div class="menu-wrapper clearfix">
							<div class="logo float-left"><a href="./">
                                                                <img src="{{ asset('ecofresh/images/logo/eco-logo-white.png?v=2') }}" alt="Logo" style="height: 45px !important;"></a></div>
							
							
						</div> <!-- /.menu-wrapper -->
					</div> <!-- /.container -->
				</header> <!-- /.theme-main-header -->


				<!--
				=====================================================
					Theme Main SLider
				=====================================================
				-->
				<div class="partical-bg-wrapper partical-gradient-three">
					<div class="count-particles">
	  					<span class="js-count-particles">--</span>
					</div>
					<div id="particles-js-three"></div>
					<div id="theme-main-banner" class="banner-three">
						<div data-src="{{ asset('ecofresh/images/home/slide-transparent.png') }}" >
							<div class="camera_caption">
								<div class="main-container">
									<div class="container">
										<h5 class="wow fadeInUp animated">#1 Keonjhar, Water Delivery App</h5>
                                                                                <h1 class="wow fadeInUp animated">Serving pure, safe and <br>  healthy drinking water  <br>that you deserve.</h1>
										
										<a href="course-2-column.html" class="tran3s wow fadeInRight animated button-two" data-wow-delay="0.499s">
                                                                                    <img src="{{ asset('ecofresh/images/icon/2.png') }}" alt="">GooglePlay</a>
										<div class="image-wrapper wow fadeInUp animated" data-wow-delay="0.75s">
											<img src="{{ asset('ecofresh/images/home/eco-big-mage.png') }}"  style="height: 600px;" alt="">
										</div>
									</div> <!-- /.container -->
								</div> <!-- /.main-container -->
							</div> <!-- /.camera_caption -->
						</div>
						<div data-src="{{ asset('ecofresh/images/home/slide-transparent.png') }}">
							<div class="camera_caption">
								<div class="main-container">
									<div class="container">
										<h5 class="wow fadeInUp animated">#1 Keonjhar, Water Delivery App</h5>
										<h1 class="wow fadeInUp animated">Serving pure, safe <br> and healthy drinking water that you deserve.</h1>
										<p class="wow fadeInUp animated">The
                                                                                    <br> choice of Keonjhar.</p>
										<a href="course-2-column.html" class="tran3s wow fadeInRight animated button-two" data-wow-delay="0.499s">
                                                                                    <img src="{{ asset('ecofresh/images/icon/2.png') }}" alt="">GooglePlay</a>
										<div class="image-wrapper wow fadeInUp animated" data-wow-delay="0.75s">
											<img src="{{ asset('ecofresh/images/home/eco-big-mage.png') }}" alt="">
										</div>
									</div> <!-- /.container -->
								</div> <!-- /.main-container -->
							</div> <!-- /.camera_caption -->
						</div>
					</div> <!-- /#theme-main-banner -->
				</div> <!-- /.partical-bg-wrapper -->

				



		      

		        <!--
				=====================================================
					Boost Your Phone
				=====================================================
				-->
				<div class="boost-your-phone">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-xs-12 float-right  wow fadeInRight">
								<div class="text">
									<div class="theme-title-two">
										<h2>Order your jars</h2>
										<p>In 2minutes, from the App!</p>
									</div> <!-- /.theme-title-two -->
									<ul>
										<li><i class="flaticon-tick"></i> Instant Jar Delivery Updates</li>
										<li><i class="flaticon-tick"></i> View and Download Bills</li>
										<li><i class="flaticon-tick"></i> Contact less Delivery</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="boster-image-wrapper  wow fadeInLeft">
							<img src="{{ asset('ecofresh/images/home/try.png') }}" alt="" class="try">
                                                        <input type="checkbox" id="ao-toggle" class="ao-toggle" name="ao-toggle">
							<img src="{{ asset('ecofresh/images/home/shape-2.png?v=2') }}" alt="">
							<div class="ao-annotations">
								<span>Pay online</span>
								<span>Rate Delivery</span>
								<span>Download Bills</span>
								<span>Contactless Delivery</span>
								<span>Set delayed delivery of jars</span>
							</div>
						</div> <!-- /.boster-image-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.boost-your-phone -->


</div> <!-- /.container -->
				</div> <!-- /.what-we-do -->


			<!--
			=====================================================
				Footer 
			=====================================================
			-->
			<footer>
				<div class="container">
					<div class="footer-data-wrapper">
						
						<div class="bottom-footer">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-xs-12 text-left ">
                                                                    
									<ul class="links">
										<li><a href="{{route('privacyLink')}}" class="tran3s">Privacy Policies</a></li>
										<li><a href="{{route('termsLink')}}" class="tran3s">Terms & Conditions</a></li>
										<li><a href="{{route('shippingLink')}}" class="tran3s">Shipping Policies</a></li>
										<li><a href="{{route('refundLink')}}" class="tran3s">Refunds/Cancellations</a></li>
									</ul>
								</div>
                                                            <div class="col-lg-4 col-md-4 col-xs-12 text-left ">
                                                                    
									<ul class="links">
										<li><a href="{{route('contactLink')}}" class="tran3s">Contact Us</a></li>
										<li><a href="{{route('aboutLink')}}" class="tran3s">About</a></li>
										<li><a href="{{route('productsLink')}}" class="tran3s">Products</a></li>
										
									</ul>
								</div>
								<div class="col-lg-4 col-md-4 col-xs-12 footer-logo text-right">
                                                                    <div class="logo">
                                                                        <a href="{{route('home')}}">
                                                                            <img src="{{ asset('ecofresh/images/logo/logo.png') }}" alt="Logo" style="height:80px;">
                                                                        </a>
                                                                    </div>
                                                                   <p><strong>
                                                                            EcoFresh, Station Rd, Keonjhar, Odisha 758002.</strong>
                                                                     All Right Reserved  
                                                                    </p>
                                                                            
								</div>
							</div> <!-- /.row -->
						</div> <!-- /.bottom-footer -->
					</div>
				</div> <!-- /.container -->
			</footer>


		



		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="{{ asset('ecofresh/vendor/jquery.2.2.3.min.js') }}"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="{{ asset('ecofresh/vendor/bootstrap/bootstrap.min.js') }}"></script>

		<!-- Vendor js _________ -->
		<!-- Camera Slider -->
		<script type='text/javascript' src='{{ asset('ecofresh/vendor/Camera-master/scripts/jquery.mobile.customized.min.js') }}'></script>
                <script type='text/javascript' src='{{ asset('ecofresh/vendor/Camera-master/scripts/jquery.easing.1.3.js') }}'></script> 
                <script type='text/javascript' src='{{ asset('ecofresh/vendor/Camera-master/scripts/camera.min.js') }}'></script>
              <!-- WOW js -->
		<script type="text/javascript" src="{{ asset('ecofresh/vendor/WOW-master/dist/wow.min.js') }}"></script>
		<!-- Tilt js -->
		<script type="text/javascript" src="{{ asset('ecofresh/vendor/tilt.js/src/tilt.jquery.js') }}"></script>
		<!-- Fancybox -->
		<script type="text/javascript" src="{{ asset('ecofresh/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
		<!-- Validation -->
		<script type="text/javascript" src="{{ asset('ecofresh/vendor/contact-form/validate.js') }}"></script>
		<script type="text/javascript" src="{{ asset('ecofresh/vendor/contact-form/jquery.form.js') }}"></script>
		<!-- partical Js -->
		<script type="text/javascript" src="{{ asset('ecofresh/vendor/particles.js-master/particles.js') }}"></script>
		<script type="text/javascript" src="{{ asset('ecofresh/vendor/particles.js-master/demo/js/lib/stats.js') }}"></script>
		<script type="text/javascript" src="{{ asset('ecofresh/vendor/particles.js-master/demo/js/app.js') }}"></script>

		<!-- owl.carousel -->
		<script type="text/javascript" src="{{ asset('ecofresh/vendor/owl-carousel/owl.carousel.min.js') }}"></script>

		<!-- Theme js -->
		<script type="text/javascript" src="{{ asset('ecofresh/js/theme.js') }}"></script>

		</div> <!-- /.main-page-wrapper -->
	</body>
</html>