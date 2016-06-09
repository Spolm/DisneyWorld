<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Disney World</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>	
		<link rel="stylesheet" href="{{url()}}/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{url()}}/assets/css/Styles.css">
		<link rel="stylesheet" href="{{url()}}/assets/css/Parallax.css">
		<link rel="stylesheet" href="{{url()}}/assets/css/icons/flaticon.css">
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-ex1-collapse">
				<span class="sr-only">Desplegar navegación</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<div id="logo">
					<a href="{{url('/')}}">
						<img src="{{url()}}/assets/Imagenes/Logo.png" alt="">
					</a>
				</div>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{url('/calendar')}}"><h4>Calendario</h4></a></li>
					<li><a href="{{url('/tickets')}}"><h4>Parques y boletos</h4></a></li>
					<li><a href="#"><h4>Hoteles</h4></a></li>
					<li><a href="#"><h4>Restaurantes</h4></a></li>
				</ul>
				
			</div>
		</nav>	

		<main>
			
			<div id="carousel">	
				<div id="carousel-principal" class="carousel slide" data-ride="carousel">
					<ul class="carousel-indicators">
						<li data-target="#carousel-principal" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-principal" data-slide-to="1"></li>
						<li data-target="#carousel-principal" data-slide-to="2"></li>
						<li data-target="#carousel-principal" data-slide-to="3"></li>
					</ul>

					<!-- Las imagenes que se mostrarán en el carousel -->
					<div class="carousel-inner" role="listbox" >
						<div class="item active" >
							<div>
								<img src="{{url()}}/assets/Imagenes/Img1.jpg" alt="">                                              
							</div>     
						</div>
						<div class="item">
							<div>
								<img src="{{url()}}/assets/Imagenes/Img2.jpg" alt="">             
							</div>
						</div>
						<div class="item">
							<div>
								<img src="{{url()}}/assets/Imagenes/Img3.jpg" alt="">                         
							</div>
						</div>
						<div class="item">
							<div>
								<img src="{{url()}}/assets/Imagenes/Img4.jpg" alt="">   
							</div>
						</div>
					</div>

					<!-- Los botones para seleccionar las imagenes -->
					<a class="left carousel-control" href="#carousel-principal" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" arian-hidden="true"></span>
						<span class="sr-only">Previo</span>
					</a>
					<a class="right carousel-control" href="#carousel-principal" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" arian-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>
				</div>		
				
			</div>
			
			<div id="logo2">
				<img src="{{url()}}/assets/Imagenes/Logo2.png" alt="">
			</div>
			
			<div id="castillo" class="parallax-container">	
				<h1>Donde los sueños se hacen realidad</h1>				
				<div class="parallax"><img src="{{url()}}/assets/Imagenes/CastilloDisney.jpg"></div>
			</div>
			
			@extends('layout.mapa')
		</main>	
		
		<!-- script para que funcione el modal -->
		<script>
			$(document).ready(function(){
				$("#myBtn").click(function(){
					$("#myModal").modal();
				});
			});
		</script>
		<script src="{{url()}}/assets/js/jquery-1.12.1.min.js"></script>
		<script src="{{url()}}/assets/js/bootstrap.min.js"></script>
		<script src="{{url()}}/assets/js/parallax.js"></script>
		<script src="{{url()}}/assets/js/Index.js"></script>
	</body>
</html>