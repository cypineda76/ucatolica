<?php /* Smarty version Smarty-3.1.8, created on 2017-05-30 04:42:23
         compiled from "templates\vtnusu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28317592cdc0fe4d765-09708330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7c28398e52f0acd1050eef70e29b8854af5c3c4' => 
    array (
      0 => 'templates\\vtnusu.tpl',
      1 => 1496112127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28317592cdc0fe4d765-09708330',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_592cdc0fea5d93_58021379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592cdc0fea5d93_58021379')) {function content_592cdc0fea5d93_58021379($_smarty_tpl) {?><div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">Usuario Admin</div>
		<div class="panel-body">
			<form role="form">
				<div class="form-group">
					<label>Nombre</label>
					<input class="form-control" id="usunom" name="usunom">
				</div>
				<div class="form-group">
					<label>Login</label>
					<input class="form-control" id="usulog" name="usulog">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control" id="usupas" name="usupas">
				</div>
				<button type="button" id="newuser" name="newuser" class="btn btn-success">Crear</button>
				<button type="button" class="btn btn-default" id="btncancel">Cancelar</button>
			</form>
		</div>
	</div>
</div><?php }} ?>