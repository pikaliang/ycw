<?php
/* Smarty version 3.1.30, created on 2018-04-24 08:47:43
  from "E:\wamp\www\mvc\app\views\index\footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aded30fdbb801_32257079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7f43951fa1e840c7d8d39cd09e9babbf18fed05' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\index\\footer.html',
      1 => 1524552449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aded30fdbb801_32257079 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/footer.css">
<div class="wode_dubu">
    <a href="index.php">
        <div class="wode_dubu_item wode_dubu_item1" <?php if ($_smarty_tpl->tpl_vars['t']->value == 1) {?>id="active"<?php }?>>
            <h1>&#xe699;</h1>
            <h2>首页</h2>
        </div>
    </a>
    <a href="index.php?m=index&c=category&a=init">
        <div class="wode_dubu_item" <?php if ($_smarty_tpl->tpl_vars['t']->value == 2) {?>id="active"<?php }?>>
            <h1>&#xe69b;</h1>
            <h2>分类</h2>
        </div>
    </a>
    <a href="index.php?m=index&c=shoppingcar&a=init">
        <div class="wode_dubu_item" <?php if ($_smarty_tpl->tpl_vars['t']->value == 3) {?>id="active"<?php }?>>
            <h1>&#xe66e;</h1>
            <h2>购物车</h2>
        </div>
    </a>
    <a href="index.php?m=index&c=personal&a=init">
        <div class="wode_dubu_item" <?php if ($_smarty_tpl->tpl_vars['t']->value == 4) {?>id="active"<?php }?>>
            <h1>&#xe622;</h1>
            <h2>个人中心</h2>
        </div>
    </a>
</div>
</body>
</html><?php }
}
