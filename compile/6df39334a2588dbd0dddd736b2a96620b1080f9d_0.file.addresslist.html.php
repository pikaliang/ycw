<?php
/* Smarty version 3.1.30, created on 2018-04-20 09:48:20
  from "E:\wamp\www\mvc\app\views\admin\addresslist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad99b449f7a60_69265913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6df39334a2588dbd0dddd736b2a96620b1080f9d' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\admin\\addresslist.html',
      1 => 1524210392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5ad99b449f7a60_69265913 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="panel-head"><strong class="icon-reorder"> 地址列表</strong>
        </div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">
                <li><a class="button border-main icon-plus-square-o" href="index.php?m=admin&c=address&a=addaddress"> 添加地址</a></li>
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th>id</th>
                <th width="15%">用户id</th>
                <th>地区</th>
                <th>地址</th>
                <th>手机</th>
                <th>姓名</th>
                <th>邮编</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['area'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['location'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['postcode'];?>
</td>
                <td>
                    <div class="button-group"><a class="button border-main" href="index.php?m=admin&c=address&a=updateaddress&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
"><span
                            class="icon-edit"></span>修改</a>
                        <a class="button border-red" href="index.php?m=admin&c=address&a=deladdress&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
"><span class="icon-trash-o"></span> 删除</a></div>
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
