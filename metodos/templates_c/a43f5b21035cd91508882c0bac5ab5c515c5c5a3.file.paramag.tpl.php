<?php /* Smarty version Smarty-3.1.8, created on 2017-05-18 06:58:11
         compiled from "templates/auto\paramag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31593591d1ab25c8e19-61523486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a43f5b21035cd91508882c0bac5ab5c515c5c5a3' => 
    array (
      0 => 'templates/auto\\paramag.tpl',
      1 => 1495083266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31593591d1ab25c8e19-61523486',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_591d1ab265b7e0_25086997',
  'variables' => 
  array (
    'ejercicio' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591d1ab265b7e0_25086997')) {function content_591d1ab265b7e0_25086997($_smarty_tpl) {?><table width="1300" height='500'>
  <tr>
    <td  valign="top">
    <div class="col-md-12">
      <form role="form">
        <input type="hidden" name="ejerciciosel" id="ejerciciosel" value="<?php echo $_smarty_tpl->tpl_vars['ejercicio']->value;?>
">
        <h1>Algoritmo Genetico</h1>
        <div class="col-md-12">
        <div class="form-group">
          <small>Cantidad de Ciudades</small>
          <select id="dimfil" name="dimfil" class="form-control">
            <?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int)ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 56+1 - (7) : 7-(56)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0){
for ($_smarty_tpl->tpl_vars['var']->value = 7, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++){
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
        <button type="button" class="btn btn-default" id="btnmatriz" name="btnmatriz" onclick="llenarmatrizag();">llenar matriz(Numeros aleatorios)</button>
        <hr>
        <div class="col-md-4">
          <div class="form-group">
          <small># de Poblacion</small>
          <input type="text" name="population" id="population" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
          <small># de Generaciones</small>
          <input type="text" name="generations" id="generations" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
          <small># de Elitismo</small>
          <input type="text" name="elitism" id="elitism" class="form-control">
          </div>
        </div>
        <hr>
        <button type="button" class="btn btn-default" id="btnproc" name="btnproc">Procesar</button>
      </form>
    </div>
    </td>
  </tr>
</table><?php }} ?>