<!DOCTYPE HTML>
<html>
<head>
	<title>ChapiYork - Noticias | Registro</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
	<link href="templates/auto/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="scripts/lib/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css" media="all" />
	<link href="scripts/lib/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="./scripts/lib/jquery-ui/jquery-ui.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="./scripts/lib/fancybox1/source/jquery.fancybox.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-buttons.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-thumbs.css" media="screen" />
	<script type='text/javascript' src='scripts/lib/jquery.js'></script>
	<script type='text/javascript' src='scripts/lib/bootstrap.min.js'></script>
	<script type='text/javascript' src='scripts/lib/jquery-ui/jquery-ui.js'></script>
	<script type="text/javascript" src="./scripts/lib/fancybox1/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="./scripts/lib/fancybox1/source/helpers/jquery.fancybox-thumbs.js"></script>
    <script type='text/javascript' src='scripts/index.js'></script>
</head>
<body>
	<div class="h_bg">
		<div class="wrap">
			<div class="wrapper1">	
				<div class="menu">	
					<ul class="top-nav">
						<li><a href="index.php">INICIO</a></li>
						<li><a href="deportes.php">DEPORTES</a></li>
						<li><a href="politica.php">POLITICA</a></li>
						<li><a href="actualidad.php">TEGNOLOGIA</a></li>
						<li><a href="registro.php">REGISTRO</a></li>
						{if $usuario ==""}
						<li><a href="ingreso.php">INGRESO</a></li>
						{else}
						<li><a href="salir.php">SALIR</a></li>
						{/if}
						<div class="clear"></div>
					</ul>
					{if $usuario !=""}Bienvenido @{$usuario}{/if}
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- start main -->
	<div class="main_bg">
		<div class="wrap">
			<div class="wrapper">	
				<div class="main">
					<div class="content">
						<a href="index.php"><img src="templates/auto/images/chapiyork.png" title="image-name"></a>
					</div>
					<div class="section group">				
						<div class="col span_2_of_4">
							<div class="contact-form">
								<h2 class="style">Registro de Usuarios</h2>
								<form>
									<div>
										<span><label>Nombre</label></span>
										<span><input name="usunom" id="usunom" type="text" class="textbox"></span>
									</div>
									<div>
										<span><label>Usuario</label></span>
										<span><input name="usulog" id="usulog" type="text" class="textbox"></span>
									</div>
									<div>
										<span><label>Contraeña</label></span>
										<span><input name="usupas" id="usupas" type="password" class="textbox"></span>
									</div>
									<div>
										<span><input type="button" class="btn btn-default"  value="Registrar" onclick="registroUsuario();"></span>
									</div>
								</form>

							</div>
						</div>		
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</body>
</html>