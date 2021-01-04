<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale-1.0">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Reach Us</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link rel="stylesheet" href="owl.carousel.min.css">
	<link rel="stylesheet" href="owl.theme.default.min.css">
	<link rel="stylesheet" href="flexboxgrid.css">
	<link rel="stylesheet" href="reach-us-style.css">

</head>

<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="navbar-brand"><img src="../images/logo.png" style="width:55px; height:55px;"></div>
		<a class="navbar-brand" href="../Home/home.html"><span>Gyan</span><span id="span1">Sagar</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myMenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="myMenu">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="../Home/home.html" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="../Activity/activity.html" class="nav-link">Activity</a></li>
				<li class="nav-item"><a href="../Gallery/gallery.html" class="nav-link">Gallery</a></li>
				<li class="nav-item"><a href="../ReachUs/reachUs.php" class="nav-link">Reach US</a></li>
				<!-- <li class="nav-item"><a href="#" class="nav-link">About</a></li> -->
			</ul>
		</div>
	</nav>

	<div class="main">
		<div class="container2">
			<h3 class="brand bg bg-dark text-white px-4 py-2">Have a query or an idea?
				<span style="font-size:16px;" class="text-warning">We are just a message away !</span></h3>
			<div class="wrapper2">
				<div class="details">
					<h3>Give us your Feedback</h3>
					<p>We are excited to hear from you ! </p>
				</div>
				<div class="contacts">
					<h1>Mail Us</h1>
<!-- 					<form name="feedback" method="post" action="submit.php">
						<p>
							<label>Name</label>
							<input type="text" name="name">
						</p>
						<p>
							<label>E-mail Address</label>
							<input type="email" name="email">
						</p>
						<p>
							<label>Phone Number</label>
							<input type="text" name="phone">
						</p>
						<p>
							<label class="full">Message</label>
							<textarea name="message" rows="5"></textarea>
						</p>
						<p>
							<button class="full" name="register">Submit</button>
						</p>
					</form>
 -->
 <form name="feedback" method="post" action="submit.php">
						<p>

							<label>Name</label>
							<input type="text" name="name" value="<?php if(isset($_POST['name'])) {
                 echo htmlentities ($_POST['name']); }?>">
						</p>
						<p>
							<label>E-mail Address</label>
							<input type="email" name="email" value="<?php if(isset($_POST['name'])) {
                 echo htmlentities ($_POST['email']); }?>">
						</p>
						<p>
							<label>Phone Number</label>
							<input type="text" name="phone" value="<?php if(isset($_POST['phone'])) {
                 echo htmlentities ($_POST['phone']); }?>">
						</p>
						<p>
							<label class="full">Message</label>
							<textarea name="message" rows="5"></textarea>
						</p>
						<p>
							<button class="full" name="register">Submit</button>
						</p>
					</form>
				</div>
			</div>
		</div>
		<h3 class="brand bg bg-dark text-white px-4 py-2">Looking to meet in-person?
			<span style="font-size:16px;" class="text-warning">Sure, Locate us on map !</span></h3>
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14492.853566983262!2d92.78296069999999!3d24.75387165!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1548990504792"
			width="1200" height="400" frameborder="0" style="border:0; margin:auto; width:100%;" allowfullscreen></iframe>
	</div>


	<!--STATRING PROF-->
	<div class="demo">
		<div class="text-sect">
			<div class="heading2">
				<h2><span>Love </span>Our Work</h2>
			</div>
		</div>
		<div class="text-pera">
			<h4>Contact Us</h4>
		</div>
		<div class="container10">
			<div class="row">
				<div id="testimonial-slider" class="owl-carousel owl-theme owl-controls">
					<div class="testimonial">
						<p class="description">
							<h3 class="title" style="padding-top: 5px;"> Apoorv Singh</h3>
							<span class="post" style="padding-top: 10px;">Head</span>
							<div class="middle">
								<a href="">
									<i class="btn fab fa-facebook-f"></i>
								</a>
								<a href="">
									<i class="btn fas fa-at"></i>
								</a>
								<a href="">
									<i class="btn fab fa-whatsapp"></i>
								</a>
							</div>
						</p>
						<div class="testimonial-content">
							<div class="pic">
								<img src="../images/profiles/apoorv.jpg" style="width: 130px; height: 130px;" alt="">
							</div>
						</div>
					</div>

					<div class="testimonial">
						<p class="description">
							<h3 class="title" style="padding-top: 5px;">Ashish Ranjan</h3>
							<span class="post" style="padding-top: 10px;">Treasurer</span>
							<div class="middle">
								<a href="">
									<i class="btn fab fa-facebook-f"></i>
								</a>
								<a href="">
									<i class="btn fas fa-at"></i>
								</a>
								<a href="">
									<i class="btn fab fa-whatsapp"></i>
								</a>
							</div>
						</p>
						<div class="testimonial-content">
							<div class="pic">
								<img src="../images/profiles/ashish.jpg" style="width: 130px; height: 130px;" alt="">
							</div>

						</div>
					</div>

					<div class="testimonial">
						<p class="description">
							<h3 class="title" style="padding-top: 5px;">Akanksha Kedia</h3>
							<span class="post" style="padding-top: 10px;">Head</span>
							<div class="middle">
								<a href="">
									<i class="btn fab fa-facebook-f"></i>
								</a>
								<a href="">
									<i class="btn fas fa-at"></i>
								</a>
								<a href="">
									<i class="btn fab fa-whatsapp"></i>
								</a>
							</div>
						</p>
						<div class="testimonial-content">
							<div class="pic">
								<img src="../images/profiles/akanksha.jpg" style="width: 130px; height: 130px;"  alt="">
							</div>

						</div>
					</div>

					<div class="testimonial">
						<p class="description">
							<h3 class="title" style="padding-top: 5px;">Rachna Gupta</h3>
							<span class="post" style="padding-top: 10px;">Head</span>
							<div class="middle">
								<a href="">
									<i class="btn fab fa-facebook-f"></i>
								</a>
								<a href="">
									<i class="btn fas fa-at"></i>
								</a>
								<a href="">
									<i class="btn fab fa-whatsapp"></i>
								</a>
							</div>
						</p>
						<div class="testimonial-content">
							<div class="pic">
								<img src="../images/profiles/rachna.jpg" style="width: 130px; height: 130px;"  alt="">
							</div>

						</div>
					</div>

					<div class="testimonial">
						<p class="description">
							<h3 class="title" style="padding-top: 5px;">Subham Ahir</h3>
							<span class="post" style="padding-top: 10px;">Head</span>
							<div class="middle">
								<a href="">
									<i class="btn fab fa-facebook-f"></i>
								</a>
								<a href="">
									<i class="btn fas fa-at"></i>
								</a>
								<a href="">
									<i class="btn fab fa-whatsapp"></i>
								</a>
							</div>
						</p>
						<div class="testimonial-content">
							<div class="pic">
								<img src="../images/profiles/subham.png" style="width: 130px; height: 130px;"  alt="">
							</div>

						</div>
					</div>

					<div class="testimonial">
						<p class="description">
							<h3 class="title" style="padding-top: 5px;">Kartikey Dev</h3>
							<span class="post" style="padding-top: 10px;">Head</span>
							<div class="middle">
								<a href="">
									<i class="btn fab fa-facebook-f"></i>
								</a>
								<a href="">
									<i class="btn fas fa-at"></i>
								</a>
								<a href="">
									<i class="btn fab fa-whatsapp"></i>
								</a>
							</div>
						</p>
						<div class="testimonial-content">
							<div class="pic">
								<img src="../images/profiles/kartikey.jpg" style="width: 130px; height: 130px;"  alt="">
							</div>

						</div>
					</div>

					<div class="testimonial">
						<p class="description">
							<h3 class="title" style="padding-top: 5px;">Prakash Jha</h3>
							<span class="post" style="padding-top: 10px;">NITS-CIT Head</span>
							<div class="middle">
								<a href="">
									<i class="btn fab fa-facebook-f"></i>
								</a>
								<a href="">
									<i class="btn fas fa-at"></i>
								</a>
								<a href="">
									<i class="btn fab fa-whatsapp"></i>
								</a>
							</div>
						</p>
						<div class="testimonial-content">
							<div class="pic">
								<img src="../images/profiles/prakash.jpg" style="width: 130px; height: 130px;"  alt="">
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end  PROF-->
		<section id="devloper">
			<div class="contain">
				<div class="heading2">
					<h2><span>Found </span> a bug!</h2>
				</div>
				<div class="text-pera">
					<h4>Report Us</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center">
					<div class="profile">
						<img src="../images/profiles/prakash.jpg" alt="" class="user">
						<h3>Prakash Jha</h3>
						<h6><span>Developer Head</span></h6>
						<div class="middle">
							<a href="">
								<i class="btn fab fa-facebook-f"></i>
							</a>
							<a href="">
								<i class="btn fas fa-at"></i>
							</a>
							<a href="">
								<i class="btn fab fa-linkedin-in"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="profile">
						<img src="../images/profiles/galib.jpeg" alt="" class="user">
						<h3>Galib Hazarika</h3>
						<h6><span>Developer</span></h6>	
						<div class="middle">
							<a href="">
								<i class="btn fab fa-facebook-f"></i>
							</a>
							<a href="">
								<i class="btn fas fa-at"></i>
							</a>
							<a href="">
								<i class="btn fab fa-linkedin-in"></i>
							</a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 text-center">
					<div class="profile">
						<img src="../images/profiles/sanchit2.jpeg" alt="" class="user">
						<h3>Sanchit Verma</h3>
						<h6><span>Developer</span></h6>
						<div class="middle">
							<a href="">
								<i class="btn fab fa-facebook-f"></i>
							</a>
							<a href="">
								<i class="btn fas fa-at"></i>
							</a>
							<a href="">
								<i class="btn fab fa-linkedin-in"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="profile">
						<img src="../images/profiles/rahul2.jpeg" alt="" class="user">
						<h3>Rahul Singh</h3>
						<h6><span>Developer</span></h6>
						<div class="middle">
							<a href="">
								<i class="btn fab fa-facebook-f"></i>
							</a>
							<a href="">
								<i class="btn fas fa-at"></i>
							</a>
							<a href="">
								<i class="btn fab fa-linkedin-in"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- Footer -->
	<footer class="page-footer font-small unique-color-dark"
		style="background-color:hsl(340, 4%, 67%); color:white; font-family: 'PT Sans Narrow', sans-serif;">

		<div style="background-color: #726c6f;">
			<div class="container">

				<!-- Grid row-->
				<div class="row py-4 mt-4 d-flex align-items-center">

					<!-- Grid column -->
					<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
						<h6 class="mb-0">Connect with us on social networks!</h6>
					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-md-6 col-lg-7 text-center text-md-right">

						<!-- Facebook -->
						<a class="fb-ic">
							<i class="fab fa-facebook-f white-text mr-4"> </i>
						</a>
						<!-- Twitter -->
						<a class="tw-ic">
							<i class="fab fa-twitter white-text mr-4"> </i>
						</a>
						<!-- Google +-->
						<a class="gplus-ic">
							<i class="fab fa-google-plus-g white-text mr-4"> </i>
						</a>
						<!--Instagram-->
						<a class="ins-ic">
							<i class="fab fa-instagram white-text"> </i>
						</a>

					</div>
					<!-- Grid column -->

				</div>
				<!-- Grid row-->

			</div>
		</div>

		<!-- Footer Links -->
		<div class="container text-center text-md-left mt-5">

			<!-- Grid row -->
			<div class="row">

				<!-- Grid column -->
				<div class="col-md-5 col-lg-5 col-xl-5">

					<!-- Content -->
					<h6 class="text-uppercase font-weight-bold">Gyansagar</h6>
					<hr class="d-inline-block" style="width: 100px;">
					<p>We believe in creating a better world</p>

				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-3 col-lg-3">

					<!-- Links -->
					<h6 class="text-uppercase font-weight-bold">Useful links</h6>
					<hr class="d-inline-block" style="width: 100px;">
					<p class='mt-4'>
						<a href="../ReachUs/reachUs.php" style="color:aliceblue; text-decoration:none;">Feedback</a>
					</p>
					<p class='mt-4'>
						<a href="../Activity/activity.html"
							style="color:aliceblue; text-decoration:none;">Activities</a>
					</p>
					<p class='mt-4'>
						<a href="../Gallery/gallery.html" style="color:aliceblue; text-decoration:none;">Gallery</a>
					</p>
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-lg-4 col-xl-4">

					<!-- Links -->
					<h6 class="text-uppercase font-weight-bold">Contact</h6>
					<hr class="d-inline-block" style="width: 100px;">
					<p>
						<i class="fas fa-home mt-4 mb-0"></i> Gyansagar Room, NIT Silchar, 788010</p>
					<p>
						<i class="fas fa-envelope mt-4  mb-0"></i> info@example.com</p>
					<p>
						<i class="fas fa-phone mt-4  mb-0"></i> + 01 234 567 88</p>
				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row -->

		</div>
		<!-- Footer Links -->

	</footer>
	<!-- Footer -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="jquery-3.3.1.min.js"></script>
	<script src="owl.carousel.min.js"></script>
	<script src="jquery.js"></script>
</body>

</html>