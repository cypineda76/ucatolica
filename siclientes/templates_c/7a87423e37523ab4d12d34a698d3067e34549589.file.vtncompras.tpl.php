<?php /* Smarty version Smarty-3.1.8, created on 2017-05-30 04:12:46
         compiled from "templates\vtncompras.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8735592cb2d08ff1f9-52194693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a87423e37523ab4d12d34a698d3067e34549589' => 
    array (
      0 => 'templates\\vtncompras.tpl',
      1 => 1496110360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8735592cb2d08ff1f9-52194693',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_592cb2d09e1ef9_51785670',
  'variables' => 
  array (
    'documentcli' => 0,
    'rep' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592cb2d09e1ef9_51785670')) {function content_592cb2d09e1ef9_51785670($_smarty_tpl) {?><div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">Compras de clientes</div>
		<div class="panel-body">
			<form role="form">
				<div class="form-group">
					<label>Codigo Producto</label>
					<input class="form-control" id="producto" name="producto">
				</div>
				<div class="form-group">
					<label>Descripcion Producto</label>
					<input class="form-control" id="nombre_producto" name="nombre_producto">
				</div>
				<div class="form-group">
					<label>Cantidad</label>
					<input class="form-control" id="cantidad" name="cantidad">
				</div>
				<div class="form-group">
					<label>Total</label>
					<input class="form-control" id="total" name="total">
				</div>
				<input type="hidden" id="document" name="document" value="<?php echo $_smarty_tpl->tpl_vars['documentcli']->value;?>
">
				<button type="button" id="addcompra" name="addcompra" class="btn btn-success">Añadir Compra</button>
			</form>
			<hr>
			<?php if ($_smarty_tpl->tpl_vars['rep']->value!='Sin Compras'){?>
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tr>
						<th class="warning">Id. Producto</th>
						<th class="warning">Descripcion</th>
						<th class="warning">Cantidad</th>
						<th class="warning">Total</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rep']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<tr>
						<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['producto'];?>
</td>
						<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre_producto'];?>
</td>
						<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['cantidad'];?>
</td>
						<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</td>
					</tr>
					<?php } ?>
				</table>
			</div>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>