<?php
/* Smarty version 3.1.30, created on 2018-04-24 05:23:59
  from "E:\wamp\www\mvc\app\views\admin\goodslist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adea34f9b76c1_06195855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4573ea6c3d4a332be18a5765a9a9a56baaa81d4' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\admin\\goodslist.html',
      1 => 1524540231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5adea34f9b76c1_06195855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
    td>img{
        width:50px;
        height:50px;
        border-radius:50%;
    }
</style>
<body>
<form method="post" action="" id="listform">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 商品列表</strong>
        </div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">
                <li><a class="button border-main icon-plus-square-o" href="index.php?m=admin&c=goods&a=addgoods"> 添加商品</a></li>
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th>id</th>
                <th width="15%">商品名</th>
                <th>缩略图</th>
                <th>多图片</th>
                <th>价格</th>
                <th>描述</th>
                <th>所属分类</th>
                <th>是否推荐</th>
                <th>排序</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</td>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
"></td>
                <td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['gpictures'], 'src');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['src']->value) {
?>
                      <img src="<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
" alt="">
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gdescription'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['tname'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['grecommend'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gorder'];?>
</td>
                <td>
                    <div class="button-group"><a class="button border-main" href="index.php?m=admin&c=goods&a=updategoods&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
"><span
                            class="icon-edit"></span>修改</a>
                        <a class="button border-red" href="index.php?m=admin&c=goods&a=delgoods&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
"><span class="icon-trash-o"></span> 删除</a></div>
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <tr>
                <td colspan="10">
                    <div class="pagelist">
                        <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                    </div>
                </td>
            </tr>
        </table>
    </div>
</form>
</body>
</html><?php }
}
