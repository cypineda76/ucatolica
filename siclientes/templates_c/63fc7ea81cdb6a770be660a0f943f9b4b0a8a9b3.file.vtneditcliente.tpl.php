<?php /* Smarty version Smarty-3.1.8, created on 2017-05-30 01:37:26
         compiled from "templates\vtneditcliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16614592c7e49db2f90-01265002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63fc7ea81cdb6a770be660a0f943f9b4b0a8a9b3' => 
    array (
      0 => 'templates\\vtneditcliente.tpl',
      1 => 1496100554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16614592c7e49db2f90-01265002',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_592c7e49e087e8_88464108',
  'variables' => 
  array (
    'tipdoc' => 0,
    'tdoc' => 0,
    'rep' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c7e49e087e8_88464108')) {function content_592c7e49e087e8_88464108($_smarty_tpl) {?><form role="form">
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
" <?php if ($_smarty_tpl->tpl_vars['tdoc']->value['type_id']==$_smarty_tpl->tpl_vars['rep']->value['type_document_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['tdoc']->value['descrip'];?>
</option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label>Documento</label>
        <input class="form-control" id="document_mod" name="document_mod" value="<?php echo $_smarty_tpl->tpl_vars['rep']->value['document'];?>
">
        <input type="hidden" id="document" name="document" value="<?php echo $_smarty_tpl->tpl_vars['rep']->value['document'];?>
">
    </div>
    <div class="form-group">
        <label>Nombre</label>
        <input class="form-control" id="firts_name" name="firts_name" value="<?php echo $_smarty_tpl->tpl_vars['rep']->value['firts_name'];?>
">
    </div>
    <div class="form-group">
        <label>Apellido</label>
        <input class="form-control" id="last_name" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['rep']->value['last_name'];?>
">
    </div>
    <div class="form-group">
        <label>Genero</label>
        <select class="form-control" id="gender" name="gender">
            <option value="">--Seleccione--</option>
            <option value="M" <?php if ($_smarty_tpl->tpl_vars['rep']->value['gender']=="M"){?>selected<?php }?>>Masculino</option>
            <option value="F" <?php if ($_smarty_tpl->tpl_vars['rep']->value['gender']=="F"){?>selected<?php }?>>Femenino</option>
        </select>
    </div>
    <div class="form-group">
        <label>Fecha Nacimineto</label>
        <input class="form-control" id="date_birth" name="date_birth" value="<?php echo $_smarty_tpl->tpl_vars['rep']->value['date_birth'];?>
">
    </div>
    <div class="form-group">
        <label>Direccion</label>
        <input class="form-control" id="street" name="street" value="<?php echo $_smarty_tpl->tpl_vars['rep']->value['street'];?>
">
    </div>
    <div class="form-group">
        <label>Telefono</label>
        <input class="form-control" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['rep']->value['phone'];?>
">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['rep']->value['email'];?>
">
    </div>
    <button type="button" class="btn btn-success" id="savedit">Editar</button>
    <button type="button" class="btn btn-default" id="btncancel">Cancelar</button>
</form><?php }} ?>