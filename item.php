<?php
ob_start();
?>
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
	
    <script type="text/javascript"
src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

<style type="text/css">
#rating {
    width:500px;
    margin: 10px auto;
    padding: 10px;
    text-align: center;
}
#rating div { float: left; }
#rating p { margin: 0; padding: 0; }
.param {
    width: 110px;
    margin: 0 20px 0 0;
    text-align: right;
}
.param, .rating, #summ { line-height: 28px; }
.stars, #sum_stars { background: url(images/stars.png); }
.stars, #sum_stars, .progress, #sum_progress {
    width: 130px;
    height: 28px;
    cursor: pointer;
}
.progress { background: #FFEE00; }
#sum_progress { background: #00EE00; }
.rating, #summ {
    margin: 0 0 0 20px;
    font-weight: bold;
}
</style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
$(document).ready(function(){
 function move(e, obj){
    var summ=0;
    var id = obj.next().attr('id').substr(1);
    var progress = e.pageX - obj.offset().left;
    var rating = progress * 5 / $('.stars').width();
    $('#param'+id).text(rating.toFixed(1));
    obj.next().width(progress);
    $('.rating').each(function(){ summ += parseFloat($(this).text()); });
    summ = summ / $('.rating').length;
    $('#sum_progress').width(Math.round($('.stars').width() * summ / 5));
    $('#summ').text(summ.toFixed(2));
$('#rateInput').val(summ.toFixed(2));
 }

 $('#rating .stars').click(function(e){
    $(this).toggleClass('fixed');
    move(e, $(this));
 });

 $('#rating .stars').on('mousemove', function(e){
    if ($(this).hasClass('fixed')==false) move(e, $(this));
 });


 function notice(text){
    $('#message').fadeOut(500, function(){ $(this).text(text); }).fadeIn(2000);
 }
});
</script>
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">
		
	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="index.php#home">Рестораны и кафе</a></h1>
			<i class="icon-remove menu-close"></i>
			<a href="#home" class="smoothScroll">Главная</a>
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

	<section id="home" id="services" name="services"></section>
	<div id="g">
		<div class="container">

				<?php 
				if (isset($_GET['id']))
				{
					
					$result=$mysqli->query('SELECT * FROM `cafe` where id="' . $_GET['id'] . '"'); 
					while($row= $result->fetch_assoc())
					{
					echo ' <img style="border-radius:20px;" src="assets/img/cafe/' . $row['image'] . '">
					<h3>'.$row['name'].'</h3>
					<p>'.$row['address'].'</p>
					<p>'.$row['rating'].'<img src="assets/img/s1.png">'.'</p>
					';
					}
					$result->close();
					echo '<br>
					';
					?>


				

	
	
		</div><!-- /container -->
	</div><!-- /g -->

		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-offset-2 col-lg-8 col-sm-offset-2 col-md-8 col-lg-offset-2">
				<?php 
	$comment=$mysqli->query('SELECT * FROM `comment` where id_cafe="' . $_GET['id'] . '"'); 
					while($row= $comment->fetch_assoc())
					{
						
					echo ' 
				
					<hr><h4><img src="assets/img/ava.png">'. $row['user_name'].'  '. $row['rating']  .'<img src="assets/img/s1.png">'.'</h4>
					<p>'. $row['comment'] .'</p> ' ;

					}
					$comment->close();
				}
				else 
					echo '404';
				
?>
				</div>
			</div>
		</div><!-- /container -->


	<style>
	.rating::before {
		display: table;
		content '';
	}
	.clearfix {
		float: none !important;
	}
	.stars {
	    z-index: 1;
   		position: absolute;
	}
	.progress {
	    position: absolute;
    	z-index: 0;
	}
	.inner {
		position: relative;
	}
	</style>
<h3 id="g">Оставить отзыв:</h3>
<form action="" method="post"><!--Создаем форму-->
<div id="rating" class="rating">
<input  type="text" class="form-control" name="fname" placeholder="Имя"><br>
<textarea name="message" class="form-control" rows="4 placeholder="Сообщение"></textarea>
<div class="clearfix">
<div class="clearfix">
<br>
<div class="param">Кухня:</div>
<div class="inner"><div class="stars"></div><p class="progress" id="p1"></p></div>
<div class="rating" id="param1">5.0</div>
</div>
<div class="clearfix">
<div class="param">Цена:</div>
<div class="inner"><div class="stars"></div><p class="progress" id="p2"></p></div>
<div class="rating" id="param2">5.0</div>
</div>
<div class="clearfix">
<div class="param">Обслуживание:</div>
<div class="inner"><div class="stars"></div><p class="progress" id="p3"></p></div>
<div class="rating" id="param3">5.0</div>
</div>
<div style="display:none" class="clearfix">
<div class="param">Общая оценка:</div>
<div id="sum_stars"></div><p class="progress" id="sum_progress"></p>
<div id="summ">5.0</div>
</div>
<div class="clearfix">
	<input id="rateInput" type="hidden" name="rate" value="5.0">
	</div>
<div class="clearfix">
<br>
    <input  type = "submit" class="btn btn-primary" value="Отправить" />  <!--Кнопка отправить-->
 </div>
 </div>
</div>
</form>
<?php
    if (!empty($_POST)) { //если нажали кнопку отправить
        $fname_u = $_POST['fname']; //создаем переменные для отправки
        $message_u = $_POST['message'];
$id_u = $_GET['id'];
       $rating_u = rand(30,45)/10;
      
$result =$mysqli->query ("INSERT INTO comment (id_cafe,user_name,rating,comment) 
	VALUES ('".$id_u."','".$fname_u."',".$rating_u." ,'". $message_u."')");
 header('Location:http://hackathontk/item.php?id='. $_GET['id']);
exit;
}
?>
  
	
				


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
						<h3>cafe@mail.com</h3>
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
