<?php /* Smarty version Smarty-3.1.8, created on 2017-03-14 01:59:40
         compiled from "templates/auto\tablaresul6.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2820158c73ea6c57d25-77678069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ffee8e0042f0ba4f1d1ffcc34596afb4a874fd9' => 
    array (
      0 => 'templates/auto\\tablaresul6.tpl',
      1 => 1489453168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2820158c73ea6c57d25-77678069',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58c73ea70fe019_98305617',
  'variables' => 
  array (
    'response' => 0,
    'tit' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c73ea70fe019_98305617')) {function content_58c73ea70fe019_98305617($_smarty_tpl) {?><div class="row">
<div class="panel panel-primary">
  <div class="panel-heading">Estado de finalizacion</div>
  <div class="panel-body">
    <table class="table table-striped table-bordered">
		<tr>
			<th class="success">n</th>
			<th class="success">a</th>
			<th class="success">b</th>
			<th class="success">dx</th>
			<th class="success">fa</th>
			<th class="success">fb</th>
			<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['response']->value['TITULO']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value){
$_smarty_tpl->tpl_vars['tit']->_loop = true;
?>
			<th class="success">x_<?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</th>
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['response']->value['TITULO']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value){
$_smarty_tpl->tpl_vars['tit']->_loop = true;
?>
			<th class="success">fx_<?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</th>
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['response']->value['TITULO']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value){
$_smarty_tpl->tpl_vars['tit']->_loop = true;
?>
			<th class="success">error_<?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</th>
			<?php } ?>
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
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['fa'],5,",",".");?>
</td>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['fb'],5,",",".");?>
</td>
			<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['response']->value['TITULO']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value){
$_smarty_tpl->tpl_vars['tit']->_loop = true;
?>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['X'][$_smarty_tpl->tpl_vars['tit']->value],5,",",".");?>
</td>
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['response']->value['TITULO']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value){
$_smarty_tpl->tpl_vars['tit']->_loop = true;
?>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['FX'][$_smarty_tpl->tpl_vars['tit']->value],5,",",".");?>
</td>
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['response']->value['TITULO']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value){
$_smarty_tpl->tpl_vars['tit']->_loop = true;
?>
			<td class="success"><?php echo number_format($_smarty_tpl->tpl_vars['response']->value['RESULT']['ERROR_X'][$_smarty_tpl->tpl_vars['tit']->value],5,",",".");?>
</td>
			<?php } ?>
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
			<th class="warning">fa</th>
			<th class="warning">fb</th>
			<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['response']->value['TITULO']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value){
$_smarty_tpl->tpl_vars['tit']->_loop = true;
?>
			<th class="warning">x_<?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</th>
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['response']->value['TITULO']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value){
$_smarty_tpl->tpl_vars['tit']->_loop = true;
?>
			<th class="warning">fx_<?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</th>
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['response']->value['TITULO']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value){
$_smarty_tpl->tpl_vars['tit']->_loop = true;
?>
			<th class="warning">error_<?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</th>
			<?php } ?>
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
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['fa'],5,",",".");?>
</td>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['fb'],5,",",".");?>
</td>
			<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['response']->value['TITULO']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value){
$_smarty_tpl->tpl_vars['tit']->_loop = true;
?>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['X'][$_smarty_tpl->tpl_vars['tit']->value],5,",",".");?>
</td>
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['response']->value['TITULO']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value){
$_smarty_tpl->tpl_vars['tit']->_loop = true;
?>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['FX'][$_smarty_tpl->tpl_vars['tit']->value],5,",",".");?>
</td>
			<?php } ?>
			<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['response']->value['TITULO']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value){
$_smarty_tpl->tpl_vars['tit']->_loop = true;
?>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['ERROR_X'][$_smarty_tpl->tpl_vars['tit']->value],5,",",".");?>
</td>
			<?php } ?>
			<td class="warning"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['error'],5,",",".");?>
</td>
		</tr>
		<?php } ?>
	</table>
</div><?php }} ?>