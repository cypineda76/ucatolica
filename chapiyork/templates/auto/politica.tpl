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
	<!-- start header -->
	<div class="h_bg">
		<div class="wrap">
			<div class="wrapper1">	
				<div class="menu">	
					<ul class="top-nav">
						<li><a href="index.php">INICIO</a></li>
						<li><a href="deportes.php">DEPORTES</a></li>
						<li  class="active"><a href="politica.php">POLITICA</a></li>
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
					<div class="about-us">
						<div class="about-header">
							<h2 class="style">{$noticias[0].artnom}</h2>
							<div class="clear"> </div>
						</div>
						<div class="about-info">
							<div class="gallery img_style"><img src="templates/auto/images/{$noticias[0].artimg}"></div>
							<p>{$noticias[0].resumen}</p>
							<div class="read_more1"><a href="#" onclick="detalle({$noticias[0].artcod});" class="btn">Leer mas</a> {if $usuario !=''}<button id="vtnedit" name="vtnedit" class="btn btn-warning" onclick="editarNoticia({$noticias[0].artcod});">Editar</button>{/if}</div>
						</div>
						<div class="specials">
							<div class="specials-grids">
								<div class="special-grid">
									<div class="gallery img_style">
										<img src="templates/auto/images/{$noticias[1].artimg}" title="image-name">
									</div>
									<h3 class="style"><<a href="#" onclick="detalle({$noticias[1].artcod});" >{$noticias[1].artnom}</a></h3>
									<p class="para">{$noticias[1].resumen}</p>
									{if $usuario !=''}<button id="vtnedit" name="vtnedit" class="btn btn-warning" onclick="editarNoticia({$noticias[1].artcod});">Editar</button>{/if}
								</div>
								<div class="special-grid">
									<div class="gallery img_style">
										<img src="templates/auto/images/{$noticias[2].artimg}" title="image-name">
									</div>
									<h3 class="style"><<a href="#" onclick="detalle({$noticias[2].artcod});" >{$noticias[2].artnom}</a></h3>
									<p class="para">{$noticias[2].resumen}</p>
									{if $usuario !=''}<button id="vtnedit" name="vtnedit" class="btn btn-warning" onclick="editarNoticia({$noticias[2].artcod});">Editar</button>{/if}
								</div>
								<div class="special-grid">
									<div class="gallery img_style">
										<img src="templates/auto/images/{$noticias[3].artimg}" title="image-name">
									</div>
									<h3 class="style"><<a href="#" onclick="detalle({$noticias[3].artcod});" >{$noticias[3].artnom}</a></h3>
									<p class="para">{$noticias[3].resumen}</p>
									{if $usuario !=''}<button id="vtnedit" name="vtnedit" class="btn btn-warning" onclick="editarNoticia({$noticias[3].artcod});">Editar</button>{/if}
								</div>
								<div class="clear"> </div>
							</div>
							<div class="clear"> </div>
						</div>
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