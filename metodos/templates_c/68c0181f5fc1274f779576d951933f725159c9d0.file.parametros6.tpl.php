<?php /* Smarty version Smarty-3.1.8, created on 2017-05-09 14:57:43
         compiled from "templates/auto\parametros6.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10625590fb77634d5b2-54149921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68c0181f5fc1274f779576d951933f725159c9d0' => 
    array (
      0 => 'templates/auto\\parametros6.tpl',
      1 => 1494334501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10625590fb77634d5b2-54149921',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_590fb7763c1916_65936603',
  'variables' => 
  array (
    'ejercicio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590fb7763c1916_65936603')) {function content_590fb7763c1916_65936603($_smarty_tpl) {?><form role="form">
  <input type="hidden" name="ejerciciosel" id="ejerciciosel" value="<?php echo $_smarty_tpl->tpl_vars['ejercicio']->value;?>
">
  <h1>Parametros</h1>
  <div class="form-group">
    <label for="ejemplo_email_1">h</label>
    <input type="text" class="form-control" id="parh" name="para">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">x</label>
    <input type="text" class="form-control" id="parx" name="parb">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">y</label>
    <input type="text" class="form-control" id="pary" name="parn">
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">Seleccionar el tipo de Rungge-Kutta</label>
    <select id="parrk" name="parrk" class="form-control">
      <option value=''>--Seleccionar--</option>
      <option value='1'>Rungge-Kutta 1</option>
      <option value='2'>Rungge-Kutta 2</option>
      <option value='3'>Rungge-Kutta 3</option>
      <option value='4'>Rungge-Kutta 4</option>
    </select>
  </div>
  <div class="form-group">
    <label for="ejemplo_email_1">n</label>
    <input type="text" class="form-control" id="parn" name="parn">
  </div>
  <button type="button" class="btn btn-default" id="btnproc" name="btnproc">Procesar</button>
</form><?php }} ?>