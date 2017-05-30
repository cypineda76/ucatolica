<?php /* Smarty version Smarty-3.1.8, created on 2017-05-29 21:32:53
         compiled from "templates\vtndeletecliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14811592c6e98dcffc0-63925851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aef495447cd1566085086bb804d9ab3da4815e40' => 
    array (
      0 => 'templates\\vtndeletecliente.tpl',
      1 => 1496086365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14811592c6e98dcffc0-63925851',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_592c6e98e43432_51173886',
  'variables' => 
  array (
    'documentcli' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c6e98e43432_51173886')) {function content_592c6e98e43432_51173886($_smarty_tpl) {?><form role="form">
    <input type="text" name="clidoc" id="clidoc" value="<?php echo $_smarty_tpl->tpl_vars['documentcli']->value;?>
">
    <button type="button" class="btn btn-danger" id="btndelete">Borrar</button>
    <button type="button" class="btn btn-default" id="btncancel">Cancelar</button>
</form><?php }} ?>