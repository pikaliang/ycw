<?php
/* Smarty version 3.1.30, created on 2018-04-21 10:01:37
  from "E:\wamp\www\mvc\app\views\admin\categorylist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adaefe1c36539_81320654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa4e23ea12fe4ef990e6657fafceb3d7b409b8e9' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\admin\\categorylist.html',
      1 => 1524297695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5adaefe1c36539_81320654 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="panel-head"><strong class="icon-reorder"> 大分类列表</strong>
        </div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">
                <li><a class="button border-main icon-plus-square-o" href="index.php?m=admin&c=category&a=addcategory"> 添加大分类</a></li>
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th>id</th>
                <th width="15%">大分类名称</th>
                <th>缩略图</th>
                <th>排序</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</td>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
"></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['corder'];?>
</td>
                <td>
                    <div class="button-group"><a class="button border-main" href="index.php?m=admin&c=category&a=updatecategory&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><span
                            class="icon-edit"></span>修改</a>
                        <a class="button border-red" href="index.php?m=admin&c=category&a=delcategory&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><span class="icon-trash-o"></span> 删除</a></div>
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <tr>
                <td colspan="5">
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
