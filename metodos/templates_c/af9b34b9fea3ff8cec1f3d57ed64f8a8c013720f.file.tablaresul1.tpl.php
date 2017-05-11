<?php /* Smarty version Smarty-3.1.8, created on 2017-02-19 07:15:19
         compiled from "templates/auto\tablaresul1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:633658a920b3f30464-76869004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af9b34b9fea3ff8cec1f3d57ed64f8a8c013720f' => 
    array (
      0 => 'templates/auto\\tablaresul1.tpl',
      1 => 1487484662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '633658a920b3f30464-76869004',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58a920b411fdc3_20856518',
  'variables' => 
  array (
    'response' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a920b411fdc3_20856518')) {function content_58a920b411fdc3_20856518($_smarty_tpl) {?><div class="row">
<div class="panel panel-primary">
  <div class="panel-heading">Estado de finalizacion</div>
  <div class="panel-body">
    <table class="table table-striped table-bordered">
		<tr>
			<th class="success">n</th>
			<th class="success">a</th>
			<th class="success">b</th>
			<th class="success">x</th>
			<th class="success">fa</th>
			<th class="success">fb</th>
			<th class="success">fx</th>
			<th class="success">error</th>
		</tr>
		<tr>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['n'];?>
</td>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['a'];?>
</td>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['b'];?>
</td>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['x'];?>
</td>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['fa'];?>
</td>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['fb'];?>
</td>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['fx'];?>
</td>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['error'];?>
</td>
		</tr>
	</table>
  </div>
</div>
</div>
<div class="row">
	<table class="table table-striped table-bordered">
		<tr>
			<th class="success">n</th>
			<th class="success">a</th>
			<th class="success">b</th>
			<th class="success">x</th>
			<th class="success">fa</th>
			<th class="success">fb</th>
			<th class="success">fx</th>
			<th class="success">error</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['response']->value['ARR']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<tr>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['n'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['a'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['b'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['x'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['fa'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['fb'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['fx'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['error'];?>
</td>
		</tr>
		<?php } ?>
	</table>
</div><?php }} ?>