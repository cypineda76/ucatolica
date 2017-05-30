<?php /* Smarty version Smarty-3.1.8, created on 2017-05-30 04:05:51
         compiled from "templates\vtnCrearcliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5372592cd262a16917-59108244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70f0e41c2021ebaae6ed1b6975c04439949d6557' => 
    array (
      0 => 'templates\\vtnCrearcliente.tpl',
      1 => 1496109906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5372592cd262a16917-59108244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_592cd262ab1b34_05185182',
  'variables' => 
  array (
    'tipdoc' => 0,
    'tdoc' => 0,
    'listciu' => 0,
    'ciu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592cd262ab1b34_05185182')) {function content_592cd262ab1b34_05185182($_smarty_tpl) {?><form role="form">
    <div class="form-group">
        <label>Tipo Documento</label>
        <select class="form-control" id="type_document_id" name="type_document_id">
            <option value="">--Seleccione--</option>
            <?php  $_smarty_tpl->tpl_vars['tdoc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tdoc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipdoc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tdoc']->key => $_smarty_tpl->tpl_vars['tdoc']->value){
$_smarty_tpl->tpl_vars['tdoc']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['tdoc']->value['type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tdoc']->value['descrip'];?>
</option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label>Documento</label>
        <input class="form-control" id="document" name="document">
    </div>
    <div class="form-group">
        <label>Nombre</label>
        <input class="form-control" id="firts_name" name="firts_name">
    </div>
    <div class="form-group">
        <label>Apellido</label>
        <input class="form-control" id="last_name" name="last_name">
    </div>
    <div class="form-group">
        <label>Genero</label>
        <select class="form-control" id="gender" name="gender">
            <option value="">--Seleccione--</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
    </div>
    <div class="form-group">
        <label>Fecha Nacimineto</label>
        <input class="form-control" id="date_birth" name="date_birth">
    </div>
    <div class="form-group">
        <label>Ciudad</label>
        <select class="form-control" id="code_city" name="code_city">
            <option value="">--Seleccione--</option>
            <?php  $_smarty_tpl->tpl_vars['ciu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listciu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciu']->key => $_smarty_tpl->tpl_vars['ciu']->value){
$_smarty_tpl->tpl_vars['ciu']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['ciu']->value['city_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ciu']->value['city_name'];?>
</option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label>Direccion</label>
        <input class="form-control" id="street" name="street">
    </div>
    <div class="form-group">
        <label>Telefono</label>
        <input class="form-control" id="phone" name="phone">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label>Nit</label>
        <input class="form-control" id="company_code" name="company_code">
    </div>
    <div class="form-group">
        <label>Nombre Empresa</label>
        <input class="form-control" id="company_name" name="company_name">
    </div>
    <button type="button" class="btn btn-success" id="savclien">Crear</button>
    <button type="button" class="btn btn-default" id="btncancel">Cancelar</button>
</form><?php }} ?>