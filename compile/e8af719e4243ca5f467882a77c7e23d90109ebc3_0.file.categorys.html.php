<?php
/* Smarty version 3.1.30, created on 2018-04-24 10:43:58
  from "E:\wamp\www\mvc\app\views\index\categorys.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adeee4ed26d94_76799424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8af719e4243ca5f467882a77c7e23d90109ebc3' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\index\\categorys.html',
      1 => 1524559433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5adeee4ed26d94_76799424 (Smarty_Internal_Template $_smarty_tpl) {
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
                <a href="index.php?m=index&c=category&a=showtypes&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" >
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt="">
                <h1 data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
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
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
