<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Onassis - Bootstrap 3 Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/Chart.js"></script>
	<script src="assets/js/modernizr.custom.js"></script>
	

	
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">
		
	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="index.html#home">Onassis</a></h1>
			<i class="icon-remove menu-close"></i>
			<a href="#home" class="smoothScroll">Home</a>
			<a href="#services" class="smoothScroll">Services</a>
			<a href="#portfolio" class="smoothScroll">Portfolio</a>
			<a href="#about" class="smoothScroll">About</a>
			<a href="#contact" class="smoothScroll">Contact</a>
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-envelope"></i></a>
		</div>
		
		<!-- Menu button -->
		<div id="menuToggle"><i class="icon-reorder"></i></div>
	</nav>


	
	<!-- ========== HEADER SECTION ========== -->
	<section id="home" name="home"></section>
	<div id="headerwrap">
		<div class="container">
			<br>
			<h1>Кафе</h1>
			<h2>Саранск</h2>
			<div class="row">
				<br>
				<br>
				<br>
				<div class="col-lg-6 col-lg-offset-3">
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /headerwrap -->
	
	
	<!-- ========== WHITE SECTION ========== -->
	<div id="w">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
				<h3>WELCOME TO <bold>ONASSIS</bold>. <bold>A FREE BOOTSTRAP 3</bold> THEME. CRAFTED WITH LOVE BY <bold>BLACKTIE.CO</bold>. <br/>
					<bold>IDEAL FOR</bold> AGENCIES & FREELANCERS.
				</h3>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /w -->


	<?php
  			$mysqli = @new mysqli('localhost', 'root', 'root', 'cafe');
  			if (mysqli_connect_errno()) {
    			echo "Подключение невозможно: ".mysqli_connect_error();
  			}
  			$mysqli->query('SET NAMES utf8');
	?>



	<!-- ========== SERVICES - GREY SECTION ========== -->
	<section id="services" name="services"></section>
	<div id="g">
		<div class="container">
			<div class="row">
				<h3>Кафе</h3>
				<br>
				<br>
				<div class="col-lg-3">


					<?php
					$result_set = $mysqli->query('Select image from cafe where id=1');
					while ($row = $result_set->fetch_assoc()) {
    					echo "<img src=\"" . $row['image'] . "\">";
					}
					$result_set->close();
					?>


					
					<h4>



					<?php
					$result_set = $mysqli->query('Select name from cafe where id=1');
					while ($row = $result_set->fetch_assoc()) {
    					echo $row['name'];
					}
					$result_set->close();
					?>



					</h4>
					<p>
						
					<?php
					$result_set = $mysqli->query('Select address from cafe where id=1');
					while ($row = $result_set->fetch_assoc()) {
    					echo $row['address'];
					}
					$result_set->close();
					?>




					</p>
				</div>
				<div class="col-lg-3">
					<img src="assets/img/s2.png">
					<h4>Berlin</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>
				<div class="col-lg-3">
					<img src="assets/img/s3.png">
					<h4>Paris</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>
				<div class="col-lg-3">
					<img src="assets/img/s4.png">
					<h4>Tokyo</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>
				<br>
				<br>
				<div class="col-lg-3">
					<img src="assets/img/s1.png">
					<h4>London</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>
				<div class="col-lg-3">
					<img src="assets/img/s2.png">
					<h4>Berlin</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>
				<div class="col-lg-3">
					<img src="assets/img/s3.png">
					<h4>Paris</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>
				<div class="col-lg-3">
					<img src="assets/img/s4.png">
					<h4>Tokyo</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /g -->
	
	





	$mysqli->close();
	
	<!-- ========== FOOTER SECTION ========== -->
	<section id="contact" name="contact"></section>
	<div id="f">
		<div class="container">
			<div class="row">
					<h3><b>CONTACT US</b></h3>
					<br>
					<div class="col-lg-4">
						<h3><b>Send Us A Message:</b></h3>
						<h3>onassis@blacktie.co</h3>
						<br>
					</div>
					
					<div class="col-lg-4">	
						<h3><b>Call Us:</b></h3>
						<h3>+55 3984-4389</h3>
						<br>
					</div>
					
					<div class="col-lg-4">
						<h3><b>We Are Social</b></h3>
						<p>
							<a href="index.html#"><i class="icon-facebook"></i></a>
							<a href="index.html#"><i class="icon-twitter"></i></a>
							<a href="index.html#"><i class="icon-envelope"></i></a>
						</p>
						<br>
					</div>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /f -->
	
	
	
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/classie.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>
