<?php /* Smarty version Smarty-3.1.8, created on 2017-05-06 01:49:37
         compiled from "templates/auto\detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28723590d0f9103f4b4-84561988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56a15614b985a6b62bcc2f53f18b9b16292a8b79' => 
    array (
      0 => 'templates/auto\\detalle.tpl',
      1 => 1494001315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28723590d0f9103f4b4-84561988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'det' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_590d0f91859b19_65739168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590d0f91859b19_65739168')) {function content_590d0f91859b19_65739168($_smarty_tpl) {?><div class="main_bg">
<div class="wrap">
<div class="wrapper">	
	<div class="main">
		<div class="details">
			<h2 class="style"><?php echo $_smarty_tpl->tpl_vars['det']->value['artnom'];?>
</h2>
			<div class="det_pic img_style">
				<img src="templates/auto/images/<?php echo $_smarty_tpl->tpl_vars['det']->value['artimg'];?>
" alt="">		
			</div>
			<div class="det-para">
				<p class="top para"><?php echo $_smarty_tpl->tpl_vars['det']->value['artdes'];?>
</p>
			</div>
		</div>
	</div>
</div>
</div>
</div><?php }} ?>