<?php
/* Smarty version 3.1.30, created on 2018-04-25 08:09:07
  from "E:\wamp\www\mvc\app\views\index\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae01b8316e9c8_76851482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7875d5dee4ae7db35b3d390083b1a91e4a2367d' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\index\\list.html',
      1 => 1524636398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5ae01b8316e9c8_76851482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/list.css">
<body>
<main id="xiangqing">
    <div class="top" id="<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
">
        <div class="top_left" onclick="history.back()">&lt;</div>
    </div>
    <div class="shaixuan">
        <div class="shaixuan_item">
            <a style="color:#e11b4c;" class="order">综合</a>
        </div>
        <div class="shaixuan_item">
            <a class="price">价格</a>
        </div>
        <div class="shaixuan_item">
            <a class="new">新品</a>
        </div>
    </div>
    <div class="content">
        <div class="content_zong">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <a href="index.php?m=index&c=category&a=showcontent&gid=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
" class="content_item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt="">
                <div class="content_wenzi">
                    <h1><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</h1>
                    <h2><?php echo $_smarty_tpl->tpl_vars['v']->value['gdescription'];?>
</h2>
                </div>
                <div class="content_wenzi content_wenzi2">
                    <h1>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</h1>
                </div>
            </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
</main>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/getlist.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
