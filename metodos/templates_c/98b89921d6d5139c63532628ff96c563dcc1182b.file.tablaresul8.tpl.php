<?php /* Smarty version Smarty-3.1.8, created on 2017-05-02 05:16:06
         compiled from "templates/auto\tablaresul8.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25825907e6a0470fa5-46688161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98b89921d6d5139c63532628ff96c563dcc1182b' => 
    array (
      0 => 'templates/auto\\tablaresul8.tpl',
      1 => 1493694959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25825907e6a0470fa5-46688161',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5907e6a05d3927_45716674',
  'variables' => 
  array (
    'response' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5907e6a05d3927_45716674')) {function content_5907e6a05d3927_45716674($_smarty_tpl) {?><div class="row">
<div class="panel panel-primary">
  <div class="panel-heading">Integracion Numerica</div>
  <div class="panel-body">
  	<p>a: <?php echo $_smarty_tpl->tpl_vars['response']->value['TIT']['a'];?>
</p>
  	<p>b: <?php echo $_smarty_tpl->tpl_vars['response']->value['TIT']['b'];?>
</p>
  	<p>n: <?php echo $_smarty_tpl->tpl_vars['response']->value['TIT']['n'];?>
</p>
  	<p>h: <?php echo $_smarty_tpl->tpl_vars['response']->value['TIT']['h'];?>
</p>
  </div>
</div>
</div>
<div class="row">
	<table class="table table-striped table-bordered">
		<tr>
			<th rowspan="2" class="success" align="center">i</th>
			<th rowspan="2" class="success" align="center">x_i</th>
			<th rowspan="2" class="success" align="center">y_i</th>
			<th colspan="3" class="success" align="center">Regla</th>
		</tr>
		<tr>
	      <td class="success">Trapecio</td>
	      <td class="success">Simpson</td>
	      <td class="success">Boole</td>
	    </tr>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['llave'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['response']->value['ARR']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['llave']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<tr>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['it'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['xi'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['yi'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['trapecio'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['simpson'];?>
</td>
			<td class="warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['boole'];?>
</td>
		</tr>
		<?php } ?>
		<tr>
			<th class="success" colspan="3">Suma</th>
			<th class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['TOT']['trapecio'];?>
</th>
			<th class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['TOT']['simpson'];?>
</th>
			<th class="success"><?php echo $_smarty_tpl->tpl_vars['response']->value['TOT']['boole'];?>
</th>
		</tr>
	</table>
</div><?php }} ?>