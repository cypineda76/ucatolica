<?php /* Smarty version Smarty-3.1.8, created on 2017-02-20 22:56:05
         compiled from "templates/auto\tablaresul3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:789958a9c7281742c7-93131302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '912b70359e942dc498963421c3982458e8e1f5c9' => 
    array (
      0 => 'templates/auto\\tablaresul3.tpl',
      1 => 1487627280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '789958a9c7281742c7-93131302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58a9c7287bb723_28451902',
  'variables' => 
  array (
    'response' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a9c7287bb723_28451902')) {function content_58a9c7287bb723_28451902($_smarty_tpl) {?><div class="row">
<div class="panel panel-primary">
  <div class="panel-heading">Estado de finalizacion</div>
  <div class="panel-body">
  	<div class="table-responsive">
    <table class="table table-striped table-bordered">
		<tr>
			<th class="success">n</th>
			<th class="success">x</th>
			<th class="success">f(x)</th>
			<th class="success">f(x)'</th>
			<th class="success">Error</th>
		</tr>
		<tr>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['n'];?>
</td>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['x'];?>
</td>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['fn'];?>
</td>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['fg'];?>
</td>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['error'];?>
</td>
		</tr>
	</table>
	</div>
  </div>
</div>
</div>
<div class="row">
	<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<tr>
			<th class="warning">n</th>
			<th class="warning">x</th>
			<th class="warning">f(x)</th>
			<th class="warning">f(x)'</th>
			<th class="warning">Error</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['response']->value['ARR']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<tr>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['n'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['x'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['fn'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['fg'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['error'];?>
</td>
		</tr>
		<?php } ?>
	</table>
	</div>
</div><?php }} ?>