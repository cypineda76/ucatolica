<?php /* Smarty version Smarty-3.1.8, created on 2017-02-19 04:35:58
         compiled from "templates/auto\tablaresul.tpl" */ ?>
<?php /*%%SmartyHeaderCode:643458902079d81999-62116228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc4e490d53d319058cdbc26f15d022a2f98dc348' => 
    array (
      0 => 'templates/auto\\tablaresul.tpl',
      1 => 1487475345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '643458902079d81999-62116228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58902079e028f0_45161480',
  'variables' => 
  array (
    'imagen' => 0,
    'response' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58902079e028f0_45161480')) {function content_58902079e028f0_45161480($_smarty_tpl) {?><div class="row">
<div class="panel panel-primary">
  <div class="panel-heading">Estado de finalizacion para <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
"></div>
  <div class="panel-body">
    <table class="table table-striped table-bordered">
		<tr>
			<th class="success">n</th>
			<th class="success">a_n</th>
			<th class="success">s_n</th>
			<th class="success">error</th>
		</tr>
		<tr>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['n'];?>
</td>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['a_n'];?>
</td>
			<td class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['RESULT']['s_n'];?>
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
			<th class="warning">n</th>
			<th class="warning">a_n</th>
			<th class="warning">s_n</th>
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
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['a_n'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['s_n'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['error'];?>
</td>
		</tr>
		<?php } ?>
	</table>
</div><?php }} ?>