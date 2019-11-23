<?php
/* Smarty version 3.1.33, created on 2019-11-22 11:57:37
  from '/usr/users2/mieec2013/up201305267/public_html/tweetdb/templates/users/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd7bf213feb87_47354531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd73eff64805b126219b78f1f907ad7620d9eec8e' => 
    array (
      0 => '/usr/users2/mieec2013/up201305267/public_html/tweetdb/templates/users/register.tpl',
      1 => 1574420247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5dd7bf213feb87_47354531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="register">
  <h2>Register</h2>

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post">
    <label>Realname: <input type="text" name="realname" value=""></label>
    <label>Username: <input type="text" name="username" value=""></label>
    <label>Password: <input type="password" name="password" value=""></label>
    <input type="submit" value="Register">
  </form>

</section>

<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
