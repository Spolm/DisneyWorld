<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Tickets</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>	
		<link rel="stylesheet" href="{{url()}}/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{url()}}/assets/css/bootstrap-datetimepicker.css">
		<link rel="stylesheet" href="{{url()}}/assets/css/StylesTickets.css">
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
					<li><a href="{{url('/tickets')}}"><h4>Parques y boletos</h4></a></li>
					<li><a href="#"><h4>Hoteles</h4></a></li>
					<li><a href="#"><h4>Restaurantes</h4></a></li>
				</ul>
				
			</div>
		</nav>	

		<main>
			<h2 id="title">Boletos para Parques Temáticos</h2>
			<hr id="division">
			<section id="selection-days">			
				<h3 class="subtitle-1">Selecciona el número de días</h3>
				<div class="counter">
					<div class="less">
						<label>-</label>
					</div>
					<input type="text" name="numbers" id="numbers" value="1" readonly="readonly">
					<div class="more">
						<label>+</label>
					</div>
					<div class="clear"></div>
				</div>			
				<div class="days">				
					<div id="info">
						<label>Desde</label>
						<label>$000.00</label>
					</div>	
				</div>	
				<h5 class="note">*Los precios varían según el rango de edad</h5>		
				
			</section>
			<hr id="division">			
			<section id="selection-tickets">	
				<h3 class="subtitle-1">Selecciona el número de boletos</h3>
				</br>				
				<h4>Adultos (18+)</h4>
				</br>
				<div id="adult">
					<div class="counter">
						<div class="less">
							<label>-</label>
						</div>
						<input type="text" name="numbers" id="numbers" value="1" readonly="readonly">
						<div class="more">
							<label>+</label>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				</br>
				<h4>Niños</h4>
				</br>
				<div id="children">
					<h5 class="note-2">Por favor toma en cuenta que los niños menores de 3 años de edad no necesitan pase.<h5 id="subtitle-1">
					<div id="big">
						<h4>Mayores de 10 años</h4>
						<div class="counter">
							<div class="less">
								<label>-</label>
							</div>
							<input type="text" name="numbers" id="numbers" value="0" readonly="readonly">
							<div class="more">
								<label>+</label>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div id="little">
						<h4>Edades 3-9</h4>
						<div class="counter">
							<div class="less">
								<label>-</label>
							</div>
							<input type="text" name="numbers" id="numbers" value="0" readonly="readonly">
							<div class="more">
								<label>+</label>
							</div>
							<div class="clear"></div>
						</div>	
						<div class="clear"></div>
					</div>	
					<div class="clear"></div>
				</div>
			</section>
			<hr id="division">
			<section id="selection-date">
				<h3 class="subtitle-1">Selecciona la fecha de ingreso</h3>
				</br>
				<div id="date" class="form-group">
					<div class='input-group date' id='datetimepicker'>
						<input type='text' class="form-control" placeholder="Ingrese fecha de ingreso" />
						<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" value="">Boleto(s) sin expiración.</label>
				</div>
				</br>
				<div class="button">
					<a href="{{url('/visitors')}}">
						<button type="button" class="btn btn-primary">Continuar con pedido</button>
					</a>
				</div>
			</section>
			<hr id="division">
			<section id="conditions">
				<h5 class="note-2">*A partir de la fecha seleccionada su(s) boleto(s) comenzará(n) a tener validez.</h5>
				<h5 class="note-2">*Cada boleto tendrá una vigencia máxima de 14 días a partir del primer día de uso, a menos que
adquiera boletos sin expiración.</h5>
				<h5 class="note-2">*Cada boleto sin expiración tiene un recargo del 20% por encima de su monto individual.</h5>
				<h5 class="note-2">*Los menores de 18 años deben estar acompañados por un representante que tenga un
boleto válido para poder ingresar a los parques.</h5>
				<h5 class="note-2">*Por día sólo se puede entrar a un parque.</h5>
				<h5 class="note-2">*Al aquirir boletos con tres meses de anticipación a su visita, recibe el 15% de
descuento. Esta es la anticipación máxima para adquirir boletos.
			</section>
		</main>	
		
		<script src="{{url()}}/assets/js/jquery-1.12.1.min.js"></script>
		<script src="{{url()}}/assets/js/moment.js"></script>
		<script src="{{url()}}/assets/js/bootstrap.min.js"></script>
		<script src="{{url()}}/assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="{{url()}}/assets/js/Tickets.js"></script>
	</body>
</html>