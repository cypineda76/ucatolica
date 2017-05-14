<!DOCTYPE HTML>
<html>
<head>
	<title>ChapiYork - Noticias</title>
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
						<li class="active"><a href="index.php">INICIO</a></li>
						<li><a href="deportes.php">DEPORTES</a></li>
						<li><a class="hsubs" href="politica.php">POLITICA</a></li>
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
	<div class="main_bg">
		<div class="wrap">
			<div class="wrapper">	
				<div class="main">
					<div class="content">
						<a href="index.php"><h2>ChapiYork Noticias</h2></a>
					</div>
					<div class="grids_of_3">
						<div class="grid_1_of_3 images_1_of_3">
							<img src="templates/auto/images/{$noticias[0].artimg}">
							<div class="grids">
								<h3>{$noticias[0].artnom}</h3>
								<p>{$noticias[0].resumen}</p>
								<div class="button"><span><a href="#" onclick="detalle({$noticias[0].artcod});">Leer mas</a></span></div>
							</div>
						</div>
						<div class="grid_1_of_3 images_1_of_3">
							<img src="templates/auto/images/{$noticias[1].artimg}">
							<div class="grids">
								<h3>{$noticias[1].artnom}</h3>
								<p>{$noticias[1].resumen}</p>
								<div class="button"><span><a href="#" onclick="detalle({$noticias[1].artcod});">Leer mas</a></span></div>
							</div>
						</div>
						<div class="grid_1_of_3 images_1_of_3">
							<img src="templates/auto/images/{$noticias[2].artimg}">
							<div class="grids">
								<h3>{$noticias[2].artnom}</h3>
								<p>{$noticias[2].resumen}</p>
								<div class="button"><span><a href="#" onclick="detalle({$noticias[2].artcod});">Leer mas</a></span></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="cols_of_3">
						<div class="grid_1_of_3 images_1_of_3">
							<img src="templates/auto/images/{$noticias[3].artimg}">
							<div class="grids">
								<h3>{$noticias[3].artnom}</h3>
								<p>{$noticias[3].resumen}</p>
								<div class="button"><span><a href="#" onclick="detalle({$noticias[3].artcod});">Leer mas</a></span></div>
							</div>
						</div>
						<div class="grid_1_of_3 images_1_of_3">
							<img src="templates/auto/images/{$noticias[4].artimg}">
							<div class="grids">
								<h3>{$noticias[4].artnom}</h3>
								<p>{$noticias[4].resumen}</p>
								<div class="button"><span><a href="#" onclick="detalle({$noticias[4].artcod});">Leer mas</a></span></div>
							</div>
						</div>
						<div class="grid_1_of_3 images_1_of_3">
							<img src="templates/auto/images/{$noticias[5].artimg}">
							<div class="grids">
								<h3>{$noticias[5].artnom}</h3>
								<p>{$noticias[5].resumen}</p>
								<div class="button"><span><a href="#" onclick="detalle({$noticias[5].artcod});">Leer mas</a></span></div>
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