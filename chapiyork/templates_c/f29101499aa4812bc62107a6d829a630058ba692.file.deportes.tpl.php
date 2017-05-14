<?php /* Smarty version Smarty-3.1.8, created on 2017-05-10 22:05:07
         compiled from "templates/auto\deportes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13547590cbab6791fc8-14899845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f29101499aa4812bc62107a6d829a630058ba692' => 
    array (
      0 => 'templates/auto\\deportes.tpl',
      1 => 1494446704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13547590cbab6791fc8-14899845',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_590cbab6854866_19459031',
  'variables' => 
  array (
    'usuario' => 0,
    'noticias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590cbab6854866_19459031')) {function content_590cbab6854866_19459031($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
	<title>ChapiYork - Noticias | Deportes</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
	<link href="templates/auto/css/style.css" rel="stylesheet" type="text/css" media="all" />
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
						<?php if ($_smarty_tpl->tpl_vars['usuario']->value==''){?>
						<li><a href="ingreso.php">INGRESO</a></li>
						<?php }else{ ?>
						<li><a href="salir.php">SALIR</a></li>
						<?php }?>
						<div class="clear"></div>
					</ul>
					<?php if ($_smarty_tpl->tpl_vars['usuario']->value!=''){?>Bienvenido @<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
<?php }?>
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
							<h2 class="style"><?php echo $_smarty_tpl->tpl_vars['noticias']->value[0]['artnom'];?>
</h2>
							<div class="clear"> </div>
						</div>
						<div class="about-info">
							<div class="gallery img_style"><img src="templates/auto/images/<?php echo $_smarty_tpl->tpl_vars['noticias']->value[0]['artimg'];?>
"></div>
							<p><?php echo $_smarty_tpl->tpl_vars['noticias']->value[0]['resumen'];?>
</p>
							<div class="read_more1"><a href="#" onclick="detalle(<?php echo $_smarty_tpl->tpl_vars['noticias']->value[0]['artcod'];?>
);" class="btn">Leer mas</a> <?php if ($_smarty_tpl->tpl_vars['usuario']->value!=''){?><button id="vtnedit" name="vtnedit" class="btn btn-warning" onclick="editarNoticia(<?php echo $_smarty_tpl->tpl_vars['noticias']->value[0]['artcod'];?>
);">Editar</button><?php }?></div>
						</div>
						<div class="specials">
							<div class="specials-grids">
								<div class="special-grid">
									<div class="gallery img_style">
										<img src="templates/auto/images/<?php echo $_smarty_tpl->tpl_vars['noticias']->value[1]['artimg'];?>
" title="image-name">
									</div>
									<h3 class="style"><a href="#" onclick="detalle(<?php echo $_smarty_tpl->tpl_vars['noticias']->value[1]['artcod'];?>
);" ><?php echo $_smarty_tpl->tpl_vars['noticias']->value[1]['artnom'];?>
</a></p>
									<?php if ($_smarty_tpl->tpl_vars['usuario']->value!=''){?><button id="vtnedit" name="vtnedit" class="btn btn-warning" onclick="editarNoticia(<?php echo $_smarty_tpl->tpl_vars['noticias']->value[1]['artcod'];?>
);">Editar</button><?php }?></h3>
									<p class="para"><?php echo $_smarty_tpl->tpl_vars['noticias']->value[1]['resumen'];?>

								</div>
								<div class="special-grid">
									<div class="gallery img_style">
										<img src="templates/auto/images/<?php echo $_smarty_tpl->tpl_vars['noticias']->value[2]['artimg'];?>
" title="image-name">
									</div>
									<h3 class="style"><a href="#" onclick="detalle(<?php echo $_smarty_tpl->tpl_vars['noticias']->value[2]['artcod'];?>
);" ><?php echo $_smarty_tpl->tpl_vars['noticias']->value[2]['artnom'];?>
</a></h3>
									<p class="para"><?php echo $_smarty_tpl->tpl_vars['noticias']->value[2]['resumen'];?>
</p>
									<?php if ($_smarty_tpl->tpl_vars['usuario']->value!=''){?><button id="vtnedit" name="vtnedit" class="btn btn-warning" onclick="editarNoticia(<?php echo $_smarty_tpl->tpl_vars['noticias']->value[2]['artcod'];?>
);">Editar</button><?php }?>
								</div>
								<div class="special-grid">
									<div class="gallery img_style">
										<img src="templates/auto/images/<?php echo $_smarty_tpl->tpl_vars['noticias']->value[3]['artimg'];?>
" title="image-name">
									</div>
									<h3 class="style"><a href="#" onclick="detalle(<?php echo $_smarty_tpl->tpl_vars['noticias']->value[3]['artcod'];?>
);" ><?php echo $_smarty_tpl->tpl_vars['noticias']->value[3]['artnom'];?>
</a> </h3>
									<p class="para"><?php echo $_smarty_tpl->tpl_vars['noticias']->value[3]['resumen'];?>
</p>
									<?php if ($_smarty_tpl->tpl_vars['usuario']->value!=''){?><button id="vtnedit" name="vtnedit" class="btn btn-warning" onclick="editarNoticia(<?php echo $_smarty_tpl->tpl_vars['noticias']->value[3]['artcod'];?>
);">Editar</button<?php }?>
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
</html><?php }} ?>