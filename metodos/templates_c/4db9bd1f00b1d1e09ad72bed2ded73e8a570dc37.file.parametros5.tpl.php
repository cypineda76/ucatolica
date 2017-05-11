<?php /* Smarty version Smarty-3.1.8, created on 2017-05-02 05:16:46
         compiled from "templates/auto\parametros5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70835907e60d0f5b63-97504883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4db9bd1f00b1d1e09ad72bed2ded73e8a570dc37' => 
    array (
      0 => 'templates/auto\\parametros5.tpl',
      1 => 1493695001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70835907e60d0f5b63-97504883',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5907e60d16d806_40379356',
  'variables' => 
  array (
    'ejercicio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5907e60d16d806_40379356')) {function content_5907e60d16d806_40379356($_smarty_tpl) {?><form role="form">
  <input type="hidden" name="ejerciciosel" id="ejerciciosel" value="<?php echo $_smarty_tpl->tpl_vars['ejercicio']->value;?>
">
  <h1>Parametros</h1>
  <div class="form-group">
    <label for="ejemplo_email_1">a</label>
    <input type="text" class="form-control" id="para" name="para">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">b</label>
    <input type="text" class="form-control" id="parb" name="parb">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">n</label>
    <input type="text" class="form-control" id="parn" name="parn">
  </div>
  <button type="button" class="btn btn-default" id="btnproc" name="btnproc">Procesar</button>
</form><?php }} ?>