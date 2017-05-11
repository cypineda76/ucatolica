<?php /* Smarty version Smarty-3.1.8, created on 2017-05-08 18:56:16
         compiled from "templates/auto\tablaresul9.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28224591093f9ee8236-63466638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bf7e9041e0812eb7d09c3190cbea0ddd86c80a0' => 
    array (
      0 => 'templates/auto\\tablaresul9.tpl',
      1 => 1494262561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28224591093f9ee8236-63466638',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_591093fa2f7f53_81996588',
  'variables' => 
  array (
    'rk' => 0,
    'response' => 0,
    'item' => 0,
    'graf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591093fa2f7f53_81996588')) {function content_591093fa2f7f53_81996588($_smarty_tpl) {?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="./scripts/highcharts.js" charset="UTF-8"></script>

<div class="row">
	<table class="table table-striped table-bordered">
		<tr>
			<th class="success" align="center">i</th>
			<th class="success" align="center">x_i</th>
			<th class="success" align="center">y_i</th>
			<?php if ($_smarty_tpl->tpl_vars['rk']->value>1){?>
			<th class="success" align="center">k_1</th>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['rk']->value>=2){?>
			<th class="success" align="center">k_2</th>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['rk']->value>=3){?>
			<th class="success" align="center">k_3</th>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['rk']->value>=4){?>
			<th class="success" align="center">k_4</th>
			<?php }?>
			<th class="success" align="center">k</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['llave'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['response']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['llave']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<tr>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['i'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['x'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['y'];?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['rk']->value>1){?>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['k1'];?>
</td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['rk']->value>=2){?>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['k2'];?>
</td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['rk']->value>=3){?>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['k3'];?>
</td>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['rk']->value>=4){?>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['k4'];?>
</td>
			<?php }?>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['k'];?>
</td>
		</tr>
		<?php } ?>
	</table>
</div>
<div class="row">
	<div class="col-sm-8 col-md-8" id="grafica"><script type="text/javascript"><?php echo $_smarty_tpl->tpl_vars['graf']->value;?>
</script></div>
</div><?php }} ?>