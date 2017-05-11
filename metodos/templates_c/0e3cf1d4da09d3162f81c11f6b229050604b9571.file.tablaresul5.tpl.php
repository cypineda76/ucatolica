<?php /* Smarty version Smarty-3.1.8, created on 2017-03-07 02:53:27
         compiled from "templates/auto\tablaresul5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1724558be11bfe56429-76683680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e3cf1d4da09d3162f81c11f6b229050604b9571' => 
    array (
      0 => 'templates/auto\\tablaresul5.tpl',
      1 => 1488851596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1724558be11bfe56429-76683680',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58be11c012db62_84459457',
  'variables' => 
  array (
    'response' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58be11c012db62_84459457')) {function content_58be11c012db62_84459457($_smarty_tpl) {?><div class="row">
<div class="panel panel-primary">
  <div class="panel-heading">Estado de finalizacion</div>
  <div class="panel-body">
    <table class="table table-striped table-bordered">
		<tr>
			<th class="success">n</th>
			<th class="success">a</th>
			<th class="success">b</th>
			<th class="success">dx</th>
			<th class="success">x1</th>
			<th class="success">x2</th>
			<th class="success">fa</th>
			<th class="success">fb</th>
			<th class="success">fx1</th>
			<th class="success">fx2</th>
			<th class="success">error2</th>
			<th class="success">error1</th>
			<th class="success">error</th>
		</tr>
		<tr>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['n'];?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['a'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['b'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['dx'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['x1'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['x2'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['fa'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['fb'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['fx1'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['fx2'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['error1'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['error2'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['error'],5,",",".");?>
</td>
		</tr>
	</table>
  </div>
</div>
</div>
<div class="row">
	<table class="table table-striped table-bordered">
		<tr>
			<th class="warning">n</th>
			<th class="warning">a</th>
			<th class="warning">b</th>
			<th class="warning">dx</th>
			<th class="warning">x1</th>
			<th class="warning">x2</th>
			<th class="warning">fa</th>
			<th class="warning">fb</th>
			<th class="warning">fx1</th>
			<th class="warning">fx2</th>
			<th class="warning">error2</th>
			<th class="warning">error1</th>
			<th class="warning">error</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['response']->value['ARR']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<tr>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['n'];?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['a'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['b'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['dx'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['x1'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['x2'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['fa'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['fb'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['fx1'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['fx2'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['error1'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['error2'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['error'],5,",",".");?>
</td>
		</tr>
		<?php } ?>
	</table>
</div><?php }} ?>