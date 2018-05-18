<?php
/* Smarty version 3.1.30, created on 2018-04-24 10:56:41
  from "E:\wamp\www\mvc\app\views\admin\orderslist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adef149d96bb7_53890793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3b9b14bcd24eac120a2edfa09557a9230487ba8' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\admin\\orderslist.html',
      1 => 1524560154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5adef149d96bb7_53890793 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="panel-head"><strong class="icon-reorder">订单列表</strong>
        </div>
        <div class="padding border-bottom">
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th>订单id</th>
                <th>商品名称</th>
                <th>商品价格</th>
                <th>商品个数</th>
                <th>用户</th>
                <th>地址</th>
                <th>订单状态</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['oid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gnumber'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ostate'];?>
</td>
                <td>
                    <div class="button-group"><a class="button border-main" href=""><span
                            class="icon-edit"></span>修改</a>
                        <a class="button border-red" href=""><span class="icon-trash-o"></span> 删除</a></div>
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <tr>
                <td colspan="8">
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
