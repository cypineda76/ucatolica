<?php /* Smarty version Smarty-3.1.8, created on 2017-03-14 00:55:02
         compiled from "templates/auto\parametros2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1630458c73156b31706-33745645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4b354570be7cfa0676865454f81f04314974af6' => 
    array (
      0 => 'templates/auto\\parametros2.tpl',
      1 => 1489449104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1630458c73156b31706-33745645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ejercicio' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58c73156b9d6a5_03360242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c73156b9d6a5_03360242')) {function content_58c73156b9d6a5_03360242($_smarty_tpl) {?><form role="form">
  <input type="hidden" name="ejerciciosel" id="ejerciciosel" value="<?php echo $_smarty_tpl->tpl_vars['ejercicio']->value;?>
">
  <h1>Numero Seccion</h1>
  <div class="form-group">
    <input type="text" class="form-control" id="seccion" name="seccion">
  </div>
  <hr>
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