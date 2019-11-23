<?php
/* Smarty version 3.1.33, created on 2019-11-22 17:45:29
  from '/usr/users2/mieec2013/up201305267/public_html/fritter/templates/common/menu_logged_out.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd810a9913243_09752132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c185048d841477d94b2669e118fbe77e0bb3d903' => 
    array (
      0 => '/usr/users2/mieec2013/up201305267/public_html/fritter/templates/common/menu_logged_out.tpl',
      1 => 1574441092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd810a9913243_09752132 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Sign up</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form><?php }
}
