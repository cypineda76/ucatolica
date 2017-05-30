<?php /* Smarty version Smarty-3.1.8, created on 2017-05-30 04:33:27
         compiled from "templates\vtnusuclient.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1601592cd9916a7551-07786067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '142b88eb043877f999e4603a6193b6a0fd28494a' => 
    array (
      0 => 'templates\\vtnusuclient.tpl',
      1 => 1496111588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1601592cd9916a7551-07786067',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_592cd99170e6a7_60434052',
  'variables' => 
  array (
    'documentcli' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592cd99170e6a7_60434052')) {function content_592cd99170e6a7_60434052($_smarty_tpl) {?><div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">Usuario de cliente</div>
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
				<input type="hidden" id="document" name="document" value="<?php echo $_smarty_tpl->tpl_vars['documentcli']->value;?>
">
				<button type="button" id="newuser" name="newuser" class="btn btn-success">Crear</button>
				<button type="button" class="btn btn-default" id="btncancel">Cancelar</button>
			</form>
		</div>
	</div>
</div><?php }} ?>