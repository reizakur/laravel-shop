<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png">
	<link rel="icon" type="image/png" href="../img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Product Page - HappySnap by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="{{asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset ('assets/css/material-kit.css')}}" rel="stylesheet"/>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body class="product-page">
	<nav class="navbar navbar-rose navbar-transparent navbar-fixed-top navbar-color-on-scroll" style="
    background-color: #30d5c8;
">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="index.php">HappySnap</a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
    		<li>
						<a href="{{'beranda'}}">
							<i class="material-icons">home</i> Home
						</a>
					</li>

                    <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="material-icons">list</i> Kategori
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu dropdown-with-icons">
				
							<li>
						
                    <a href="{{'detail'}}">
						Ayam
								</a>
							</li>
						 
						</ul>
					</li>


					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="material-icons">location_on</i> Lokasi
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu dropdown-with-icons">
					
							<li>
								<a href="lokasi.php">
									<i class="material-icons">location_on</i>Jakarta
								</a>
							</li>
						 
						
						</ul>
					</li>

                    @yield('content')  
                    

<footer class="footer footer-black footer-big">
	<div class="container">

		<div class="content">
			<div class="row">
				<div class="col-md-4">
					<h5>About Us</h5>
					<p>Creative Tim is a startup that creates design tools that make the web development process faster and easier. </p> <p>We love the web and care deeply for how users interact with a digital product. We power businesses and individuals to create better looking web projects around the world. </p>
				</div>

				<div class="col-md-4">
					<h5>Social Feed</h5>
					<div class="social-feed">
						<div class="feed-line">
							<i class="fa fa-twitter"></i>
							<p>How to handle ethical disagreements with your clients.</p>
						</div>
						<div class="feed-line">
							<i class="fa fa-twitter"></i>
							<p>The tangible benefits of designing at 1x pixel density.</p>
						</div>
						<div class="feed-line">
							<i class="fa fa-facebook-square"></i>
							<p>A collection of 25 stunning sites that you can use for inspiration.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<h5>Instagram Feed</h5>
					<div class="gallery-feed">
						<img src="img/faces/card-profile6-square.jpg" class="img img-raised img-rounded" alt="" />
						<img src="img/faces/christian.jpg" class="img img-raised img-rounded" alt="" />
						<img src="img/faces/card-profile4-square.jpg" class="img img-raised img-rounded" alt="" />
						<img src="img/faces/card-profile1-square.jpg" class="img img-raised img-rounded" alt="" />

						<img src="img/faces/marc.jpg" class="img img-raised img-rounded" alt="" />
						<img src="img/faces/kendall.jpg" class="img img-raised img-rounded" alt="" />
						<img src="img/faces/card-profile5-square.jpg" class="img img-raised img-rounded" alt="" />
						<img src="img/faces/card-profile2-square.jpg" class="img img-raised img-rounded" alt="" />
					</div>

				</div>
			</div>
		</div>


		<hr />

		<ul class="pull-left">
			<li>
				<a href="#pablo">
				   Blog
				</a>
			</li>
			<li>
				<a href="#pablo">
					Presentation
				</a>
			</li>
			<li>
				<a href="#pablo">
				   Discover
				</a>
			</li>
			<li>
				<a href="#pablo">
					Payment
				</a>
			</li>
			<li>
				<a href="#pablo">
					Contact Us
				</a>
			</li>
		</ul>

		<div class="copyright pull-right">
			Copyright &copy; <script>document.write(new Date().getFullYear())</script> Creative Tim All Rights Reserved.
		</div>
	</div>
</footer>

</body>

	<!--   Core JS Files   -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/material.min.js"></script>

	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="js/nouislider.min.js" type="text/javascript"></script>

	<!--	Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!--	Plugin for Select Form control, full documentation here: https://github.com/FezVrasta/dropdown.js -->
	<script src="js/jquery.dropdown.js" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
	<script src="js/jquery.tagsinput.js"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
	<script src="js/jasny-bootstrap.min.js"></script>

	<!--	Plugin for Product Gallery, full documentation here: https://9bitstudios.github.io/flexisel/ -->
	<script src="js/jquery.flexisel.js"></script>

	<!-- Plugin For Google Maps -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="js/material-kit.js" type="text/javascript"></script>

    <script type="text/javascript">

    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 3
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 3
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3
                }
            }
          });
    });
   </script>


</html>
