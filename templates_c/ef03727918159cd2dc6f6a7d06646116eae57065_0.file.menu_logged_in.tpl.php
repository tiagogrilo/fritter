<?php
/* Smarty version 3.1.33, created on 2019-11-22 16:09:29
  from '/usr/users2/mieec2013/up201305267/public_html/fritter/templates/common/menu_logged_in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd7fa29194ae2_14364660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef03727918159cd2dc6f6a7d06646116eae57065' => 
    array (
      0 => '/usr/users2/mieec2013/up201305267/public_html/fritter/templates/common/menu_logged_in.tpl',
      1 => 1574434459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd7fa29194ae2_14364660 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span><?php }
}
