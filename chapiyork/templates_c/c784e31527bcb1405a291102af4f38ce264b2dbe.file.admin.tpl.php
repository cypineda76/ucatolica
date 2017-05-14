<?php /* Smarty version Smarty-3.1.8, created on 2017-05-09 22:19:50
         compiled from "templates/auto\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12722590d0ffe65df68-99380817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c784e31527bcb1405a291102af4f38ce264b2dbe' => 
    array (
      0 => 'templates/auto\\admin.tpl',
      1 => 1494361179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12722590d0ffe65df68-99380817',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_590d0ffe735712_90354149',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590d0ffe735712_90354149')) {function content_590d0ffe735712_90354149($_smarty_tpl) {?><!DOCTYPE HTML>
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
                        <li><a href="politica.php">POLITICA</a></li>
                        <li><a href="actualidad.php">TEGNOLOGIA</a></li>
                        <li><a href="registro.php">REGISTRO</a></li>
                        <li><a href="ingreso.php">INGRESO</a></li>
                        <div class="clear"></div>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
	<!-- start main -->
	<div class="main_bg">
		<div class="wrap">
			<div class="wrapper">	
				<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Text Input</label>
                                            <input class="form-control">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Text Input with Placeholder</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>Static Control</label>
                                            <p class="form-control-static">email@example.com</p>
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Checkboxes</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 1
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 2
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Inline Checkboxes</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">1
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">2
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">3
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Radio Buttons</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</body>
</html><?php }} ?>