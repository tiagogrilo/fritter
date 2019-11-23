<?php
/* Smarty version 3.1.33, created on 2019-11-22 11:55:00
  from '/usr/users2/mieec2013/up201305267/public_html/tweetdb/templates/tweets/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd7be84a50689_11712035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7054ffd619394d81e63a0fa45b3fc3161eae0491' => 
    array (
      0 => '/usr/users2/mieec2013/up201305267/public_html/tweetdb/templates/tweets/list.tpl',
      1 => 1574420054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5dd7be84a50689_11712035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section id="tweets">

      <header>
        <h2>Tweets</h2>
      </header>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tweets']->value, 'tweet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tweet']->value) {
?>
      <article class="tweet">
        <header>
          <span class="realname"><?php echo $_smarty_tpl->tpl_vars['tweet']->value['realname'];?>
</span>
              <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/tweets/list_user.php?username=<?php echo $_smarty_tpl->tpl_vars['tweet']->value['username'];?>
" class="username">@<?php echo $_smarty_tpl->tpl_vars['tweet']->value['username'];?>
</a>
          <span class="time"><?php echo $_smarty_tpl->tpl_vars['tweet']->value['time'];?>
</span>
        </header>

        <p><?php echo $_smarty_tpl->tpl_vars['tweet']->value['text'];?>
</p>
      </article>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </section>
<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
