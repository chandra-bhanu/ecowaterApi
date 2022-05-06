<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>EcoFresh - Refunds/Cancellations</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('ecofresh/images/fav-icon/icon.png') }}">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('ecofresh/css/style.css?v=5') }}">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('ecofresh/css/responsive.css?v=5') }}">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
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
				<header class="theme-main-header theme-main-header-sub">
					<div class="container">
                                            <div class="wrapper">
						<div class="menu-wrapper clearfix">
							<div class="logo float-left"><a href="{{route('home')}}">
                                                                <img src="{{ asset('ecofresh/images/logo/eco-logo-white.png?v=2') }}" alt="Logo" style="height: 45px !important;"></a></div>
							
							
						</div> <!-- /.menu-wrapper -->
                                          </div>      
					</div> <!-- /.container -->
                                </header> <!-- /.theme-main-header -->
                                
                                
                                
                                
                                
            
            <div class="blog-details blog-v3">
					<div class="container">
						<div class="wrapper">
							<div class="blog-main-post">
                                                            <br/> <br/>
								<h3>Refunds/Cancellations</h3>
							</div> <!-- /.blog-main-post -->
							
						</div> <!-- /.wrapper -->
					</div> <!-- /.container -->

					
						<div class="container">
							<div class="wrapper">
								<div class="tgPageContent"><p>
              All products remain property of EcoFresh 
until full payment is made. 
The price applicable is that set at the date on which you place your order. 
Shipping costs and payment fees are recognized before confirming the purchase. 
If you are under 18 years old you must have parents' permission to buy from
https://https://ecofreshkeonjhar.com. Card information is transmitted securely through 
a third party. EcoFresh shall have no role to play 
in case of any dispute related to payments/refunds. It is expected that user 
shall contact the third party payment gateway and/or the bank for any issues 
related to payment for products purchased through the Website. The collection 
and usage of payment related information is governed by the policies of the
payment gateway provider.  
            </p> <h3>Cancellations</h3> <p>As the product we sold on this site contains food items, 
   items can't be returned once shipped, We allow cancellation on unprocessed orders.</p> <h3>Refunds</h3> <p>
               Upon Cancellation of the order, the refund will be issued withing 2 business days,
               Customers will be notified via email for the same. If you faill to receive the refund notification,
               please contact our ustomer Support</p> <p>
               Once the refund is processed, the order amount will be return to its source in 5-7 working days.
               In case of orders amounting above ₹ 10,000.00, you will be contacted by our support team for 
               further assistance if needed.
           </p> <p>
               If you faill to receive the refund amount in notified time, please contact our Customer Support.
           </p></div>
                                                        </div> <!-- /.wrapper -->
						</div> <!-- /.container -->
					</div> <!-- /.comment-area -->
				</div> <!-- /.blog-details -->

                     </div> <!-- /.html-top-content -->           
                                
           </div> <!-- /.html-top-content -->                         
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