<?php /* Smarty version Smarty-3.1.8, created on 2017-05-10 23:23:00
         compiled from "templates/auto\registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16550591219cc342949-25862762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16626c7dc574494564625619779c3e814faeb1c1' => 
    array (
      0 => 'templates/auto\\registro.tpl',
      1 => 1494451356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16550591219cc342949-25862762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_591219cc385384_05207372',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591219cc385384_05207372')) {function content_591219cc385384_05207372($_smarty_tpl) {?><!DOCTYPE HTML>
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
</html><?php }} ?>