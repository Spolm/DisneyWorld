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
		<link rel="stylesheet" href="{{url()}}/assets/css/StylesVisitors.css">
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
			<h2 class="title">Ingrese sus datos</h2>
			<hr class="division">
            <h3 class="subtitle-1 margin">Ingrese los datos de cada visitante</h3>
            </br>
            <section id="section-adult">
                <h3 class="subtitle-2">Adulto(s) <span class="glyphicon glyphicon-menu-down"></span></h3>
                <div id="persons">
                    <div id="person1">                        
                        <hr class="division-2">
                        <h4>Ticket Nº0000</h4>
                        </br>  
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">¿Nos ha visitado antes?</label>
                                <div class="col-lg-9">
                                    <div class="radio col-sm-1">
                                        <label><input type="radio" name="option" id="option-Si">Si</label>
                                    </div>
                                    <div class="radio col-sm-1">
                                        <label><input type="radio" name="option" id="option-No">No</label>
                                    </div>    
                                </div>                           
                            </div>
                            <div class="new-visitor">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Primer nombre</label>
                                    <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Ingrse primer nombre">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Segundo nombre</label>
                                    <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Ingrese segundo nombre">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Primer apellido</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Ingrese primer apellido">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Segundo apellido</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Ingrese segundo apellido">
                                    </div>
                                </div>
                                <div id="date" class="form-group">
                                    <label class="col-lg-3 control-label">Fecha de nacimiento</label>
                                    <div class="col-lg-9">
                                    <div class='input-group date' id='datetimepicker'>
                                        <input type='text' class="form-control" placeholder="Ingrese su fecha de nacimiento"/>
                                        <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Género</label>
                                    <div class="col-lg-9">
                                        <div class="radio col-sm-3">
                                            <label><input type="radio" name="option2" id="option-Masculino">Masculino</label>
                                        </div>
                                        <div class="radio col-sm-3">
                                            <label><input type="radio" name="option2" id="option-Femenino">Femenino</label>
                                        </div>     
                                    </div>                             
                                </div> 
                            </div>
                            <div class="old-visitor">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">ID Disney</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Ingrese su ID Disney">
                                    </div>
                                </div>    
                            </div>
                        </form>
                    </div>
                </div>
                <hr class="division-2">
            </section>
            <section id="section-children">
                <h3 class="subtitle-2">Niños(s) <span class="glyphicon glyphicon-menu-down"></span></h3>
                 <div id="persons">
                    <div id="big">
                        <h4>Mayores de 10 años</h4>
                        <div id="person1">                        
                            <hr class="division-2">
                            <h4>Ticket Nº0000</h4>
                            </br>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">¿Nos ha visitado antes?</label>
                                    <div class="col-lg-9">
                                        <div class="radio col-sm-1">
                                            <label><input type="radio" name="option" id="option-Si">Si</label>
                                        </div>
                                        <div class="radio col-sm-1">
                                            <label><input type="radio" name="option" id="option-No">No</label>
                                        </div>    
                                    </div>                           
                                </div>
                                <div class="new-visitor">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Primer nombre</label>
                                        <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Ingrese primer nombre">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Segundo nombre</label>
                                        <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Ingrese segundo nombre">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Primer apellido</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Ingrese primer apellido">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Segundo apellido</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Ingrese segundo apellido">
                                        </div>
                                    </div>
                                    <div id="date" class="form-group">
                                        <label class="col-lg-3 control-label">Fecha de nacimiento</label>
                                        <div class="col-lg-9">
                                        <div class='input-group date' id='datetimepicker'>
                                            <input type='text' class="form-control" placeholder="Ingrese su fecha de nacimiento"/>
                                            <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Género</label>
                                        <div class="col-lg-9">
                                            <div class="radio col-sm-3">
                                                <label><input type="radio" name="option2" id="option-Masculino">Masculino</label>
                                            </div>
                                            <div class="radio col-sm-3">
                                                <label><input type="radio" name="option2" id="option-Femenino">Femenino</label>
                                            </div>     
                                        </div>                             
                                    </div>
                                </div>
                                <div class="old-visitor">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">ID Disney</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Ingrese su ID Disney">
                                        </div>
                                    </div>    
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="little">
                        <h4>Edades 3-9</h4>
                        <div id="person1">                        
                            <hr class="division-2">
                            <h4>Ticket Nº0000</h4>
                            </br>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">¿Nos ha visitado antes?</label>
                                    <div class="col-lg-9">
                                        <div class="radio col-sm-1">
                                            <label><input type="radio" name="option" id="option-Si">Si</label>
                                        </div>
                                        <div class="radio col-sm-1">
                                            <label><input type="radio" name="option" id="option-No">No</label>
                                        </div>    
                                    </div>                           
                                </div>
                                <div class="new-visitor">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Primer nombre</label>
                                        <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Ingrese primer nombre">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Segundo nombre</label>
                                        <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Ingrese segundo nombre">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Primer apellido</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Ingrese primer apellido">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Segundo apellido</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Ingrese segundo apellido">
                                        </div>
                                    </div>
                                    <div id="date" class="form-group">
                                        <label class="col-lg-3 control-label">Fecha de nacimiento</label>
                                        <div class="col-lg-9">
                                        <div class='input-group date' id='datetimepicker'>
                                            <input type='text' class="form-control" placeholder="Ingrese su fecha de nacimiento"/>
                                            <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Género</label>
                                        <div class="col-lg-9">
                                            <div class="radio col-sm-3">
                                                <label><input type="radio" name="option2" id="option-Masculino">Masculino</label>
                                            </div>
                                            <div class="radio col-sm-3">
                                                <label><input type="radio" name="option2" id="option-Femenino">Femenino</label>
                                            </div>    
                                        </div>                             
                                    </div>
                                </div>
                                <div class="old-visitor">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">ID Disney</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Ingrese su ID Disney">
                                        </div>
                                    </div>    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <hr class="division-2">
                <div class="button">
					<a href="{{url('/visitors')}}">
						<button type="button" class="btn btn-primary">Finalizar pedido</button>
					</a>
				</div>
            </section>
		</main>	
		
		<script src="{{url()}}/assets/js/jquery-1.12.1.min.js"></script>
		<script src="{{url()}}/assets/js/moment.js"></script>
		<script src="{{url()}}/assets/js/bootstrap.min.js"></script>
		<script src="{{url()}}/assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="{{url()}}/assets/js/Visitors.js"></script>
	</body>
</html>