<?php /* Smarty version Smarty-3.1.8, created on 2017-05-09 22:33:25
         compiled from "templates/auto\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24272590cbabacc53c9-32957973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'def1e9ec56e2e12cf88e7b9eb18875c2e0d6f37a' => 
    array (
      0 => 'templates/auto\\index.tpl',
      1 => 1494362003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24272590cbabacc53c9-32957973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_590cbabadbdb80_28102435',
  'variables' => 
  array (
    'usuario' => 0,
    'noticias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590cbabadbdb80_28102435')) {function content_590cbabadbdb80_28102435($_smarty_tpl) {?><!DOCTYPE HTML>
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
	<div class="main_bg">
		<div class="wrap">
			<div class="wrapper">	
				<div class="main">
					<div class="content">
						<a href="index.php"><h2>ChapiYork Noticias</h2></a>
					</div>
					<div class="grids_of_3">
						<div class="grid_1_of_3 images_1_of_3">
							<img src="templates/auto/images/<?php echo $_smarty_tpl->tpl_vars['noticias']->value[0]['artimg'];?>
">
							<div class="grids">
								<h3><?php echo $_smarty_tpl->tpl_vars['noticias']->value[0]['artnom'];?>
</h3>
								<p><?php echo $_smarty_tpl->tpl_vars['noticias']->value[0]['resumen'];?>
</p>
								<div class="button"><span><a href="#" onclick="detalle(<?php echo $_smarty_tpl->tpl_vars['noticias']->value[0]['artcod'];?>
);">Leer mas</a></span></div>
							</div>
						</div>
						<div class="grid_1_of_3 images_1_of_3">
							<img src="templates/auto/images/<?php echo $_smarty_tpl->tpl_vars['noticias']->value[1]['artimg'];?>
">
							<div class="grids">
								<h3><?php echo $_smarty_tpl->tpl_vars['noticias']->value[1]['artnom'];?>
</h3>
								<p><?php echo $_smarty_tpl->tpl_vars['noticias']->value[1]['resumen'];?>
</p>
								<div class="button"><span><a href="#" onclick="detalle(<?php echo $_smarty_tpl->tpl_vars['noticias']->value[1]['artcod'];?>
);">Leer mas</a></span></div>
							</div>
						</div>
						<div class="grid_1_of_3 images_1_of_3">
							<img src="templates/auto/images/<?php echo $_smarty_tpl->tpl_vars['noticias']->value[2]['artimg'];?>
">
							<div class="grids">
								<h3><?php echo $_smarty_tpl->tpl_vars['noticias']->value[2]['artnom'];?>
</h3>
								<p><?php echo $_smarty_tpl->tpl_vars['noticias']->value[2]['resumen'];?>
</p>
								<div class="button"><span><a href="#" onclick="detalle(<?php echo $_smarty_tpl->tpl_vars['noticias']->value[2]['artcod'];?>
);">Leer mas</a></span></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="cols_of_3">
						<div class="grid_1_of_3 images_1_of_3">
							<img src="templates/auto/images/<?php echo $_smarty_tpl->tpl_vars['noticias']->value[3]['artimg'];?>
">
							<div class="grids">
								<h3><?php echo $_smarty_tpl->tpl_vars['noticias']->value[3]['artnom'];?>
</h3>
								<p><?php echo $_smarty_tpl->tpl_vars['noticias']->value[3]['resumen'];?>
</p>
								<div class="button"><span><a href="#" onclick="detalle(<?php echo $_smarty_tpl->tpl_vars['noticias']->value[3]['artcod'];?>
);">Leer mas</a></span></div>
							</div>
						</div>
						<div class="grid_1_of_3 images_1_of_3">
							<img src="templates/auto/images/<?php echo $_smarty_tpl->tpl_vars['noticias']->value[4]['artimg'];?>
">
							<div class="grids">
								<h3><?php echo $_smarty_tpl->tpl_vars['noticias']->value[4]['artnom'];?>
</h3>
								<p><?php echo $_smarty_tpl->tpl_vars['noticias']->value[4]['resumen'];?>
</p>
								<div class="button"><span><a href="#" onclick="detalle(<?php echo $_smarty_tpl->tpl_vars['noticias']->value[4]['artcod'];?>
);">Leer mas</a></span></div>
							</div>
						</div>
						<div class="grid_1_of_3 images_1_of_3">
							<img src="templates/auto/images/<?php echo $_smarty_tpl->tpl_vars['noticias']->value[5]['artimg'];?>
">
							<div class="grids">
								<h3><?php echo $_smarty_tpl->tpl_vars['noticias']->value[5]['artnom'];?>
</h3>
								<p><?php echo $_smarty_tpl->tpl_vars['noticias']->value[5]['resumen'];?>
</p>
								<div class="button"><span><a href="#" onclick="detalle(<?php echo $_smarty_tpl->tpl_vars['noticias']->value[5]['artcod'];?>
);">Leer mas</a></span></div>
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