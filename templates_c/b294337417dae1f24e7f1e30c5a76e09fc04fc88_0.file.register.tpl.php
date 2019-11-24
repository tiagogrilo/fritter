<?php
/* Smarty version 3.1.33, created on 2019-11-24 01:14:48
  from '/usr/users2/mieec2013/up201305267/public_html/fritter/templates/users/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd9cb787f7066_77715376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b294337417dae1f24e7f1e30c5a76e09fc04fc88' => 
    array (
      0 => '/usr/users2/mieec2013/up201305267/public_html/fritter/templates/users/register.tpl',
      1 => 1574554439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5dd9cb787f7066_77715376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="register">
  <h2>Create your account</h2>

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post" enctype="multipart/form-data">
    <input type="text" 
           name="realname" 
           value="<?php if (isset($_smarty_tpl->tpl_vars['FORM_VALUES']->value)) {
echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['realname'];
}?>"
           placeholder="Name">
    <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['username'];?>
</span>
    <input type="text" 
           name="username" 
           value="<?php if (isset($_smarty_tpl->tpl_vars['FORM_VALUES']->value)) {
echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];
}?>"
           placeholder="Username">
       <input type="email" 
              name="email" 
              value="<?php if (isset($_smarty_tpl->tpl_vars['FORM_VALUES']->value)) {
echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['email'];
}?>"
              placeholder="Email">
    <input type="password" 
           name="password" 
           value="" 
           placeholder="Password">
    <div  class="photo-upload">
      <label>Photo: <input type="file" name="photo">
      </label>
    </div>
    <input type="submit" value="Register">
  </form>

</section>

<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
