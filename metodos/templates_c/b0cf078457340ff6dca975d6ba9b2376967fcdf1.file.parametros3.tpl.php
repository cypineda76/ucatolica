<?php /* Smarty version Smarty-3.1.8, created on 2017-03-21 02:57:59
         compiled from "templates/auto\parametros3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2024858d0688eabc026-43126140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0cf078457340ff6dca975d6ba9b2376967fcdf1' => 
    array (
      0 => 'templates/auto\\parametros3.tpl',
      1 => 1490061260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2024858d0688eabc026-43126140',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58d0688eb339f6_87875645',
  'variables' => 
  array (
    'ejercicio' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d0688eb339f6_87875645')) {function content_58d0688eb339f6_87875645($_smarty_tpl) {?><table width="800" height='500'>
  <tr>
    <td  valign="top">
    <div class="col-md-12">
      <form role="form">
        <input type="hidden" name="ejerciciosel" id="ejerciciosel" value="<?php echo $_smarty_tpl->tpl_vars['ejercicio']->value;?>
">
        <h1>Dimension de la matriz</h1>
        <div class="col-md-6">
        <div class="form-group">
          <small>Numero de Filas</small>
          <select id="dimfil" name="dimfil" class="form-control">
            <?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int)ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 10+1 - (2) : 2-(10)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0){
for ($_smarty_tpl->tpl_vars['var']->value = 2, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++){
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</option>
            <?php }} ?>
          </select>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
          <small>Numero de Columnas</small>
          <select id="dimcol" name="dimcol" class="form-control">
            <?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int)ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 10+1 - (3) : 3-(10)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0){
for ($_smarty_tpl->tpl_vars['var']->value = 3, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++){
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</option>
            <?php }} ?>
          </select>
        </div>
        </div>
        <hr>
        <div id="divmatriz"></div>
        <button type="button" class="btn btn-default" id="btnmatriz" name="btnmatriz" onclick="llenarmatriz();">llenar matriz(Numeros aleatorios)</button>
        <button type="button" class="btn btn-default" id="btnproc" name="btnproc">Procesar</button>
      </form>
    </div>
    </td>
  </tr>
</table><?php }} ?>