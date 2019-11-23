<?php
/* Smarty version 3.1.33, created on 2019-11-22 20:54:04
  from '/usr/users2/mieec2013/up201305267/public_html/fritter/templates/common/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd83cdc890f98_34858706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eef3601a25adc4111fad7f00d838eb32b22d8825' => 
    array (
      0 => '/usr/users2/mieec2013/up201305267/public_html/fritter/templates/common/header.tpl',
      1 => 1574452370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/menu_logged_in.tpl' => 1,
    'file:common/menu_logged_out.tpl' => 1,
  ),
),false)) {
function content_5dd83cdc890f98_34858706 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <head>
    <title>Fritter</title>
    <meta charset='utf-8'>
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
	  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.2.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/main.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style.css">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/icon/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <header>
      <div>
        <h1><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Fritter</a></h1>
        <?php if (isset($_smarty_tpl->tpl_vars['USERNAME']->value)) {?>
          <?php $_smarty_tpl->_subTemplateRender('file:common/menu_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>
          <?php $_smarty_tpl->_subTemplateRender('file:common/menu_logged_out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
      </div>
    </header>

    <section id="messages">
      <?php if (isset($_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value, 'success');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['success']->value) {
?>
          <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
 <a class="close" href="#">&#215;</a></div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php }?>

      <?php if (isset($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
          <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 <a class="close" href="#">&#215;</a></div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php }?>
    </section>
 <?php }
}
