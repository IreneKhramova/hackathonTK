<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Рестораны и кафе города Саранск</title>

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
			<h1 class="logo"><a href="index.php#home">Рестораны и кафе</a></h1>
			<i class="icon-remove menu-close"></i>
			<a href="#home" class="smoothScroll">Главная</a>
			<a href="#services" class="smoothScroll">Куда пойти ?</a>
			<a href="#contact" class="smoothScroll">Контакты</a>
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
			<h1>Рестораны и кафе</h1>
			<h2>Где поесть в Саранске ?</h2>
			<div class="row">
				<br>
				<br>
				<br>
				<div class="col-sm-6 col-md-6 col-lg-6  col-sm-offset-3  col-md-offset-3 col-lg-offset-3">
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /headerwrap -->
	
	
	<!-- ========== WHITE SECTION ========== -->
	<div id="w">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-offset-2 col-lg-8 col-sm-offset-2 col-md-8 col-sm-offset-2">
				<h3>ХОТИТЕ <bold>ВКУСНО ПОЕСТЬ</bold> В ГОРОДЕ <bold>САРАНСК</bold> И НЕ ЗНАЕТЕ <bold>ГДЕ</bold>? ПРЕДЛАГАЕМ ОЗНАКОМИТЬСЯ С РЕСТОРАНАМИ И КАФЕ ГОРОДА - ОРГАНИЗАТОРА <bold>ЧМ 2018</bold>.
				</h3>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /w -->


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
			<div class="row">
				<h3>КУДА ПОЙТИ</h3>
				<br>
				<br>


				<?php 
				$result=$mysqli->query('SELECT * FROM `cafe`'); // запрос на выборку
				while($row= $result->fetch_assoc())
				{
				echo '  <div class="col-sm-3 col-md-3 col-lg-3">
					<img src="assets/img/sa/' . $row['image'] . '">
					<h4><a href="item.php?id='. $row['id'] .'">'.$row['name'].'</a></h4>
					<p>'.$row['address'].'</p>
					<p>'.$row['rating'].'<img src="assets/img/s1.png">'.'</p>
					</div>';
				}
				$result->close();
				?>

	
			</div>
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
					<h3><b>СВЯЖИТЕСЬ С НАМИ</b></h3>
					<br>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<h3><b>Отправить нам сообщение:</b></h3>
						<h3>test@mail.com</h3>
						<br>
					</div>
					
					<div class="col-sm-4 col-md-4 col-lg-4">	
						<h3><b>Звоните нам:</b></h3>
						<h3>+55 3984-4389</h3>
						<br>
					</div>
					
					<div class="col-sm-4 col-md-4 col-lg-4">
						<h3><b>Мы в социальных сетях</b></h3>
						<p>
							<a href="#"><i class="icon-facebook"></i></a>
							<a href="#"><i class="icon-twitter"></i></a>
							<a href="#"><i class="icon-envelope"></i></a>
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