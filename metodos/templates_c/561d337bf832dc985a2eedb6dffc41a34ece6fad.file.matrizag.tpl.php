<?php /* Smarty version Smarty-3.1.8, created on 2017-05-18 07:03:29
         compiled from "templates/auto\matrizag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4152591d1c70a79171-41524710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '561d337bf832dc985a2eedb6dffc41a34ece6fad' => 
    array (
      0 => 'templates/auto\\matrizag.tpl',
      1 => 1495083803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4152591d1c70a79171-41524710',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_591d1c70b25b17_49195711',
  'variables' => 
  array (
    'matriz' => 0,
    'kc' => 0,
    'kf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591d1c70b25b17_49195711')) {function content_591d1c70b25b17_49195711($_smarty_tpl) {?>
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
			<th>Ciudad <?php echo $_smarty_tpl->tpl_vars['kc']->value;?>
</th>
			<?php } ?>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['fila'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fila']->_loop = false;
 $_smarty_tpl->tpl_vars['kf'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['matriz']->value['FIL']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->key => $_smarty_tpl->tpl_vars['fila']->value){
$_smarty_tpl->tpl_vars['fila']->_loop = true;
 $_smarty_tpl->tpl_vars['kf']->value = $_smarty_tpl->tpl_vars['fila']->key;
?>
		<tr>
			<th>Ciudad <?php echo $_smarty_tpl->tpl_vars['kf']->value;?>
</th>
			<?php  $_smarty_tpl->tpl_vars['columna'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['columna']->_loop = false;
 $_smarty_tpl->tpl_vars['kc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['matriz']->value['COL']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['columna']->key => $_smarty_tpl->tpl_vars['columna']->value){
$_smarty_tpl->tpl_vars['columna']->_loop = true;
 $_smarty_tpl->tpl_vars['kc']->value = $_smarty_tpl->tpl_vars['columna']->key;
?>
			<td>
				<?php if (isset($_smarty_tpl->tpl_vars['matriz']->value['LLE'][$_smarty_tpl->tpl_vars['kf']->value][$_smarty_tpl->tpl_vars['kc']->value])){?>
				<input type="text" class="inputcel" size="4" name="m[<?php echo $_smarty_tpl->tpl_vars['kf']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['kc']->value;?>
]" id="m[<?php echo $_smarty_tpl->tpl_vars['kf']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['kc']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['matriz']->value['LLE'][$_smarty_tpl->tpl_vars['kf']->value][$_smarty_tpl->tpl_vars['kc']->value];?>
" <?php if ($_smarty_tpl->tpl_vars['kf']->value==$_smarty_tpl->tpl_vars['kc']->value){?> disabled <?php }?>>
				<?php }?>
			</td>
			<?php } ?>
		</tr>
		<?php } ?>
	</table>
</form><?php }} ?>