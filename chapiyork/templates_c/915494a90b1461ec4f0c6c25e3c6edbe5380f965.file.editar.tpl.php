<?php /* Smarty version Smarty-3.1.8, created on 2017-05-10 21:50:44
         compiled from "templates/auto\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23796591230ce9dc173-64376527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '915494a90b1461ec4f0c6c25e3c6edbe5380f965' => 
    array (
      0 => 'templates/auto\\editar.tpl',
      1 => 1494445842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23796591230ce9dc173-64376527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_591230cea3abd7_24189060',
  'variables' => 
  array (
    'det' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591230cea3abd7_24189060')) {function content_591230cea3abd7_24189060($_smarty_tpl) {?>    <title>ChapiYork - Noticias</title>
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
<div style="width: 800px;">
	<div class="main_bg">
		<div class="wrap">
			<div class="wrapper">	
				<div class="row">
                <div class="col-lg-12">
                    <h1>Editar Noticia</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        <input type="hidden" name="artcod" id="artcod" value="<?php echo $_smarty_tpl->tpl_vars['det']->value['artcod'];?>
">
                                        <div class="form-group">
                                            <label>Titulo</label>
                                            <input id="artnom" value="<?php echo $_smarty_tpl->tpl_vars['det']->value['artnom'];?>
" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Seccion</label>
                                            <select id="artsec" class="form-control">
                                                <option value="">--Seleccione--</option>
                                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['det']->value['artsec']==2){?> selected <?php }?>>Deportes</option>
                                                <option value="3" <?php if ($_smarty_tpl->tpl_vars['det']->value['artsec']==3){?> selected <?php }?>>Politica</option>
                                                <option value="4" <?php if ($_smarty_tpl->tpl_vars['det']->value['artsec']==4){?> selected <?php }?>>Tecnologia</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion</label>
                                            <textarea id="artdes" class="form-control" rows="3"><?php echo $_smarty_tpl->tpl_vars['det']->value['artdes'];?>
</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Imagen</label>
                                            <input id="artimg" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['det']->value['artimg'];?>
">
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de noticia</label>
                                            <select id="artpri" class="form-control">
                                                <option value="PRINCIPAL" <?php if ($_smarty_tpl->tpl_vars['det']->value['artpri']=='PRINCIPAL'){?> selected <?php }?>>Principal</option>
                                                <option value=""  <?php if ($_smarty_tpl->tpl_vars['det']->value['artpri']==''){?> selected <?php }?>>Secundario</option>
                                            </select>
                                        </div>
                                        <button type="button" id="btnedit" name="btnedit" class="btn btn-primary" onclick="saveEdit();">Editar</button>
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
</div><?php }} ?>