<?php /* Smarty version Smarty-3.1.8, created on 2017-05-30 04:31:40
         compiled from "templates\listclientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7881591f6813c9a9a8-62361413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fec212381d66cd35229909f45893630cf0696f6' => 
    array (
      0 => 'templates\\listclientes.tpl',
      1 => 1496111495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7881591f6813c9a9a8-62361413',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_591f6813e1c880_40593518',
  'variables' => 
  array (
    'rep' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591f6813e1c880_40593518')) {function content_591f6813e1c880_40593518($_smarty_tpl) {?><div class="row">
	<div class="panel panel-primary">
	<div class="panel-heading">Listado de clientes</div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<tr>
					<th class="warning"></th>
					<th class="warning">Tipo documento</th>
					<th class="warning">Documento</th>
					<th class="warning">Nombre</th>
					<th class="warning">Apellido</th>
					<th class="warning">Genero</th>
					<th class="warning">Fecha Nacimiento</th>
					<th class="warning">Telefono</th>
					<th class="warning">Email</th>
					<th class="warning">Direccion</th>
					<th class="warning">Pais</th>
					<th class="warning">Departamento</th>
					<th class="warning">Ciudad</th>
					<th class="warning">Nit</th>
					<th class="warning">Nombre Compañia</th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rep']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr>
					<td class="warning"><a href="#" onclick="compras(<?php echo $_smarty_tpl->tpl_vars['item']->value['document'];?>
);"><i class="fa fa-shopping-cart "></i>
					<a href="#" onclick="editarCliente(<?php echo $_smarty_tpl->tpl_vars['item']->value['document'];?>
);"><i class="fa fa-edit"></i>
					<a href="#" onclick="eliminarCliente(<?php echo $_smarty_tpl->tpl_vars['item']->value['document'];?>
);"><i class="fa fa-times"></i>
					<a href="#" onclick="fnusucli(<?php echo $_smarty_tpl->tpl_vars['item']->value['document'];?>
);"><i class="fa fa-user"></i>
					</td>
					<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['type_descriptions'];?>
</td>
					<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['document'];?>
</td>
					<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['firts_name'];?>
</td>
					<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['last_name'];?>
</td>
					<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['gender'];?>
</td>
					<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['date_birth'];?>
</td>
					<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</td>
					<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
					<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['street'];?>
</td>
					<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['country_descriptions'];?>
</td>
					<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['department_name'];?>
</td>
					<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['city_name'];?>
</td>
					<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['company_code'];?>
</td>
					<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['company_name'];?>
</td>
				</tr>
				<?php } ?>
			</table>
			</div>
		</div>
	</div>
</div><?php }} ?>