<?php /* Smarty version Smarty-3.1.8, created on 2017-05-18 05:53:44
         compiled from "templates/auto\matriz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1163358d068eea99292-87245772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45afeb7f8ee7ee3b9cd07b20d7407ace66ca3ddf' => 
    array (
      0 => 'templates/auto\\matriz.tpl',
      1 => 1494733221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1163358d068eea99292-87245772',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58d068eec34006_34925791',
  'variables' => 
  array (
    'matriz' => 0,
    'kc' => 0,
    'kf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d068eec34006_34925791')) {function content_58d068eec34006_34925791($_smarty_tpl) {?>
	<style type="text/css">
		.inputcel{
			text-align: center;
		    width: 40px;
		    font-size: 13px;
		}
		.gridtable {
			font-family: verdana,arial,sans-serif;
			font-size:11px;
			color:#333333;
			border-width: 1px;
			border-color: #666666;
			border-collapse: collapse;
		}
		.gridtable th {
			border-width: 1px;
			padding: 2px;
			border-style: solid;
			border-color: #666666;
			background-color: #dedede;
			text-align: center;
		}
		.gridtable td {
			border-width: 1px;
			padding: 2px;
			border-style: solid;
			border-color: #666666;
			background-color: #ffffff;
		}
	</style>

<form id="formMatriz">
<input type="hidden" name="x" id="x" value="">
<table border="1" align="center" class="gridtable">
	<tr>
		<th>N&ordm;</th>
	<?php  $_smarty_tpl->tpl_vars['columna'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['columna']->_loop = false;
 $_smarty_tpl->tpl_vars['kc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['matriz']->value['TITCOL']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['columna']->key => $_smarty_tpl->tpl_vars['columna']->value){
$_smarty_tpl->tpl_vars['columna']->_loop = true;
 $_smarty_tpl->tpl_vars['kc']->value = $_smarty_tpl->tpl_vars['columna']->key;
?>
		<th>x_<?php echo $_smarty_tpl->tpl_vars['kc']->value;?>
</th>
	<?php } ?>
		<th>b</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['fila'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fila']->_loop = false;
 $_smarty_tpl->tpl_vars['kf'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['matriz']->value['FIL']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->key => $_smarty_tpl->tpl_vars['fila']->value){
$_smarty_tpl->tpl_vars['fila']->_loop = true;
 $_smarty_tpl->tpl_vars['kf']->value = $_smarty_tpl->tpl_vars['fila']->key;
?>
	<tr>
	<th><?php echo $_smarty_tpl->tpl_vars['kf']->value;?>
</th>
	<?php  $_smarty_tpl->tpl_vars['columna'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['columna']->_loop = false;
 $_smarty_tpl->tpl_vars['kc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['matriz']->value['COL']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['columna']->key => $_smarty_tpl->tpl_vars['columna']->value){
$_smarty_tpl->tpl_vars['columna']->_loop = true;
 $_smarty_tpl->tpl_vars['kc']->value = $_smarty_tpl->tpl_vars['columna']->key;
?>
		<td><input type="text" class="inputcel" size="4" name="M[<?php echo $_smarty_tpl->tpl_vars['kf']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['kc']->value;?>
]" id="M[<?php echo $_smarty_tpl->tpl_vars['kf']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['kc']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['matriz']->value['LLE'][$_smarty_tpl->tpl_vars['kf']->value][$_smarty_tpl->tpl_vars['kc']->value];?>
"></td>
	<?php } ?>
	</tr>
	<?php } ?>
</table>
</form><?php }} ?>