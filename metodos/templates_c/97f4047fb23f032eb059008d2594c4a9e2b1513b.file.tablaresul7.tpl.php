<?php /* Smarty version Smarty-3.1.8, created on 2017-03-27 19:52:56
         compiled from "templates/auto\tablaresul7.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3112158d9517801a451-47334087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97f4047fb23f032eb059008d2594c4a9e2b1513b' => 
    array (
      0 => 'templates/auto\\tablaresul7.tpl',
      1 => 1490637161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3112158d9517801a451-47334087',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'response' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58d951782fe9f1_07594445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d951782fe9f1_07594445')) {function content_58d951782fe9f1_07594445($_smarty_tpl) {?><div class="row">
<div class="panel panel-primary">
  <div class="panel-heading">Estado de finalizacion</div>
  <div class="panel-body">
    <table class="table table-striped table-bordered">
		<tr>
			<th class="success">n</th>
			<th class="success">X</th>
			<th class="success">Y</th>
			<th class="success">Z</th>
			<th class="success">Error X</th>
			<th class="success">Error Y</th>
			<th class="success">Error Z</th>
			<th class="success">Error</th>
		</tr>
		<tr>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['n'];?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['X'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['Y'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['Z'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['ERRORX'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['ERRORY'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['ERRORZ'],5,",",".");?>
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
			<th class="warning">X</th>
			<th class="warning">Y</th>
			<th class="warning">Z</th>
			<th class="warning">Error X</th>
			<th class="warning">Error Y</th>
			<th class="warning">Error Z</th>
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
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['X'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['Y'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['Z'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['ERRORX'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['ERRORY'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['ERRORZ'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['error'],5,",",".");?>
</td>
		</tr>
		<?php } ?>
	</table>
</div><?php }} ?>