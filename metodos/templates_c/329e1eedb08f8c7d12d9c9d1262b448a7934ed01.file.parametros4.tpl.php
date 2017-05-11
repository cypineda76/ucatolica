<?php /* Smarty version Smarty-3.1.8, created on 2017-03-27 19:57:49
         compiled from "templates/auto\parametros4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2602658d92f7c79efd1-73220344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '329e1eedb08f8c7d12d9c9d1262b448a7934ed01' => 
    array (
      0 => 'templates/auto\\parametros4.tpl',
      1 => 1490637467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2602658d92f7c79efd1-73220344',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58d92f7c831e88_25982231',
  'variables' => 
  array (
    'ejercicio' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d92f7c831e88_25982231')) {function content_58d92f7c831e88_25982231($_smarty_tpl) {?><table width="800" height='500'>
  <tr>
    <td  valign="top">
      <div class="col-md-12">
        <h3>Parametros Globales</h3>
        <div class="col-md-2">
          <div class="form-group">
            <small>Valor de X</small>
            <input type="text" name="valx" id="valx" class="form-control"">
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <small>Valor de Y</small>
            <input type="text" name="valy" id="valy" class="form-control"">
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <small>Valor de Z</small>
            <input type="text" name="valz" id="valz" class="form-control"">
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-6">
            <div class="form-group">
              <small>Base</small>
              <input type="text" class="form-control" id="base" name="base" value="10" placeholder="Ejem. 10">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <small>Exponente</small>
              <input type="text" class="form-control" id="exponente" name="exponente" placeholder="Ejem. -3">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <form role="form">
        <input type="hidden" name="ejerciciosel" id="ejerciciosel" value="<?php echo $_smarty_tpl->tpl_vars['ejercicio']->value;?>
">
        <h3>Dimension de la matriz</h3>
        <div class="col-md-6">
          <div class="form-group">
            <small>Numero de Filas</small>
            <select id="dimfil" name="dimfil" class="form-control">
              <?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int)ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 3+1 - (3) : 3-(3)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
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
        <div class="col-md-6">
          <div class="form-group">
            <small>Numero de Columnas</small>
            <select id="dimcol" name="dimcol" class="form-control">
              <?php $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int)ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 4+1 - (4) : 4-(4)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0){
for ($_smarty_tpl->tpl_vars['var']->value = 4, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++){
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