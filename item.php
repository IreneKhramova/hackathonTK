<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Кафе Саранск</title>

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
			<h1 class="logo"><a href="index.php">Кафе Саранск</a></h1>
			<i class="icon-remove menu-close"></i>
			<a href="#contact" class="smoothScroll">Контакты</a>
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-envelope"></i></a>
		</div>
		
		<!-- Menu button -->
		<div id="menuToggle"><i class="icon-reorder"></i></div>
	</nav>



	<!-- ========== SERVICES - GREY SECTION ========== -->

	<?php
  			$mysqli = @new mysqli('localhost', 'root', 'root', 'cafe');
  			if (mysqli_connect_errno()) {
    			echo "Подключение невозможно: ".mysqli_connect_error();
  			}
  			$mysqli->query('SET NAMES utf8');
	?>


	<section id="services" name="services"></section>
	<div id="g">
		<div class="container">

				<?php 
				if (isset($_GET['id']))
				{
					
					$result=$mysqli->query('SELECT * FROM `cafe` where id="' . $_GET['id'] . '"'); 
					while($row= $result->fetch_assoc())
					{
					echo ' <img src="' . $row['image'] . '">
					<h3>'.$row['name'].'</h3>
					<p>'.$row['address'].'</p>
					<p>'.$row['rating'].'</p>
					';
					}
					$result->close();
					echo '<br>
					';
					$comment=$mysqli->query('SELECT * FROM `comment` where id_cafe="' . $_GET['id'] . '"'); 
					while($row= $comment->fetch_assoc())
					{
					echo ' <br>
					<h4>'. $row['user_name'] .'</h4>
					<br>
					<p>'. $row['comment'] .'</p>' . $row['rating'];
					}
					$comment->close();
				}
				else 
					echo '404';
				?>

	
		</div><!-- /container -->
	</div><!-- /g -->
	
	




	<?php
	$mysqli->close();
	?>
	
	<!-- ========== FOOTER SECTION ========== -->
	<section id="contact" name="contact"></section>
	<div id="f">
		<div class="container">
			<div class="row">
					<h3><b>Контакты</b></h3>
					<br>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<h3><b>Send Us A Message:</b></h3>
						<h3>onassis@blacktie.co</h3>
						<br>
					</div>
					
					<div class="col-sm-4 col-md-4 col-lg-4">	
						<h3><b>Call Us:</b></h3>
						<h3>+55 3984-4389</h3>
						<br>
					</div>
					
					<div class="col-sm-4 col-md-4 col-lg-4">
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
