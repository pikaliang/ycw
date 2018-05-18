<?php
/* Smarty version 3.1.30, created on 2018-04-24 10:46:51
  from "E:\wamp\www\mvc\app\views\index\types.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adeeefb965728_53271777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '663fe19cef115d72e8af0088af01b464ccc36d09' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\index\\types.html',
      1 => 1524559605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5adeeefb965728_53271777 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <a href="" >
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
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
