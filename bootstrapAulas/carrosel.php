<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<title>CRUD</title>
	<style type="text/css">
		.carousel-item{
			
			height: 500px;
		}
	</style>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css"/>
	
</head>
<body>
	<!-- .divnomeDaClasse -->
	 <div class="container">
	 	<div id="slideAba" class="slide carousel">
	 		<ol class="carousel-indicators">
	 			<li data-target="#slideAba" data-slide-to="0" class="active"></li>
	 			<li data-target="#slideAba" data-slide-to="1"></li>
	 			<li data-target="#slideAba" data-slide-to="2"></li>
	 			<li data-target="#slideAba" data-slide-to="3"></li>
	 		</ol>
	 		<div class="carousel-inner">
	 			<div class="carousel-item active">
	 				<img src="./imagens/353491bf-bmw-i8.jpg" 
	 				class="w-100" alt="foto01">
	 			</div>
	 			<div class="carousel-item">
	 				<img src="./imagens/ferrarif12.jpg" class="w-100" alt="foto02">
	 			</div>
	 			<div class="carousel-item">
	 				<img src="./imagens/lamborghini-huracan.jpg" class="w-100" alt="foto03">
	 			</div>	
	 			<div class="carousel-item">
	 				<img src="./imagens/Porsche-carrera-GT.jpg" class="w-100" alt="foto04">
	 			</div>	
	 		</div>
	 		<a class="carousel-control-prev" href="#slideAba" data-slide="prev">
	 			<span class="carousel-control-prev-icon"></span>
	 		</a>

	 		<a class="carousel-control-next" href="#slideAba" data-slide="next">
	 			<span class="carousel-control-next-icon"></span>
	 		</a>

	 	</div>
	 </div>	
	</div>
	<!-- esse script poderia ser colocado no meta, mas aqui ele carrega mais rápido -->
	<script type="text/javascript" src="../bootstrap4/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../bootstrap4/js/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>