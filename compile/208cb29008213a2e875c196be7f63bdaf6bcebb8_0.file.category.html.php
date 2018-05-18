<?php
/* Smarty version 3.1.30, created on 2018-04-25 09:30:54
  from "E:\wamp\www\mvc\app\views\index\category.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae02eae5ca8d8_05504217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '208cb29008213a2e875c196be7f63bdaf6bcebb8' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\index\\category.html',
      1 => 1524641448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5ae02eae5ca8d8_05504217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/fenlei.css">
<body>
<main id="fenlei">
    <!-- 搜索框开始 -->
    <section id="search">
        <h1>&#xe62f;</h1>
        <input type="text" class="sousuo" placeholder="&#xe69b;飞利浦剃须刀">
        <h1>&#xe6cd;</h1>
    </section>
    <!-- 搜索框结束 -->
    <!-- 正文内容开始 -->
    <section id="content">
        <div class="content_left">
            <div class="tuijian_wenzi">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['cid']->value == $_smarty_tpl->tpl_vars['v']->value['cid']) {?>
                <h1 data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" style="color:red"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</h1>
                <?php } else { ?>
                <h1 data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</h1>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>

        <div class="content_right">
            <div class="remen">
                <h1 class="">详细分类</h1>
            </div>
            <div class="remen_neirong">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <a href="index.php?m=index&c=category&a=showlist&tid=<?php echo $_smarty_tpl->tpl_vars['v']->value['tid'];?>
" class="remen_neirong_item">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['tthumb'];?>
" alt="">
                    <h1><?php echo $_smarty_tpl->tpl_vars['v']->value['tname'];?>
</h1>
                </a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
    </section>
</main>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/gettype.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
