<?php /* Smarty version Smarty-3.1.8, created on 2017-05-20 01:50:12
         compiled from "templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21656591f415a5eb5e6-84516944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64dc0f53a42be5b3a7d2ba591c653348a6eeab8a' => 
    array (
      0 => 'templates\\login.tpl',
      1 => 1495222893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21656591f415a5eb5e6-84516944',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_591f415a64f968_94589391',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591f415a64f968_94589391')) {function content_591f415a64f968_94589391($_smarty_tpl) {?><!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login </title>
  <link rel="stylesheet" href="templates/css/login.css">
  <script src="scripts/lib/jquery.js"></script>
  <script src="scripts/login.js"></script>
</head>
<body>
  <div class="wrap">
		<div class="avatar">
      <img src="templates/images/loginimg.png">
		</div>
		<input type="text" placeholder="username" id="user_login" name="user_login" required>
		<div class="bar">
			<i></i>
		</div>
		<input type="password" id="user_pass" name="user_pass" placeholder="password" required>
		<br>
		<button type="button" id="btnlogin" name="btnlogin">Sign in</button>
	</div>
</body>
</html><?php }} ?>