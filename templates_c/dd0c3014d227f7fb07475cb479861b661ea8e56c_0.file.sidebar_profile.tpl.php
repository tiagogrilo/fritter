<?php
/* Smarty version 3.1.33, created on 2019-11-24 02:11:16
  from '/usr/users2/mieec2013/up201305267/public_html/fritter/templates/users/sidebar_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd9d8b4bc8e16_48451851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd0c3014d227f7fb07475cb479861b661ea8e56c' => 
    array (
      0 => '/usr/users2/mieec2013/up201305267/public_html/fritter/templates/users/sidebar_profile.tpl',
      1 => 1574557846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd9d8b4bc8e16_48451851 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sidebar-profile">
    <?php if (!isset($_smarty_tpl->tpl_vars['USERNAME']->value)) {?>
        <h2>Join Fritter</h2>
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
    <?php }?>    
</div><?php }
}
