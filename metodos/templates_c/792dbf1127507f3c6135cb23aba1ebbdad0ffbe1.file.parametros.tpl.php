<?php /* Smarty version Smarty-3.1.8, created on 2017-02-19 03:34:17
         compiled from "templates/auto\parametros.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18157588fff1c240575-05357408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '792dbf1127507f3c6135cb23aba1ebbdad0ffbe1' => 
    array (
      0 => 'templates/auto\\parametros.tpl',
      1 => 1487471650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18157588fff1c240575-05357408',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_588fff1c285400_56528421',
  'variables' => 
  array (
    'ejercicio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588fff1c285400_56528421')) {function content_588fff1c285400_56528421($_smarty_tpl) {?><form role="form">
  <input type="hidden" name="ejerciciosel" id="ejerciciosel" value="<?php echo $_smarty_tpl->tpl_vars['ejercicio']->value;?>
">
  <h1>Valor del error</h1>
  <div class="form-group">
    <label for="ejemplo_email_1">Base</label>
    <input type="text" class="form-control" id="base" name="base" placeholder="Ejem. 10">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">Exponente</label>
    <input type="text" class="form-control" id="exponente" name="exponente" placeholder="Ejem. -3">
  </div>
  <button type="button" class="btn btn-default" id="btnproc" name="btnproc">Procesar</button>
</form><?php }} ?>