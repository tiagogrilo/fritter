<?php
/* Smarty version 3.1.33, created on 2019-11-24 02:11:16
  from '/usr/users2/mieec2013/up201305267/public_html/fritter/templates/tweets/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd9d8b4b21c02_28256529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cc9f6184939b6854380ea8e0314217970454b4c' => 
    array (
      0 => '/usr/users2/mieec2013/up201305267/public_html/fritter/templates/tweets/list.tpl',
      1 => 1574557875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:users/sidebar_profile.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5dd9d8b4b21c02_28256529 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="wrapper">
    <?php $_smarty_tpl->_subTemplateRender('file:users/sidebar_profile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section id="tweets">

      <header>
        <h2>Tweets</h2>
      </header>

      <?php if (isset($_smarty_tpl->tpl_vars['USERNAME']->value)) {?>
      <section id="tweet_form">
        <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/tweets/tweet.php" method="post">
          <textarea name="tweet" placeholder="Say something"></textarea>
          <input type="submit" value="Freet">
        </form>
      </section>
      <?php }?>

      <section id="new_tweets"></section>
      
        <div class="container">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tweets']->value, 'tweet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tweet']->value) {
?>
            <article class="tweet">
              <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['tweet']->value['photo'];?>
">
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
          <p class="pagination">
            <a class="pagination__next" href="page2.html">Next page</a>
          </p>
        </div>
      </div> 
    </section>
<?php $_smarty_tpl->_subTemplateRender('file:common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
