<?php
/* Smarty version 3.1.30, created on 2018-04-20 02:55:52
  from "E:\wamp\www\mvc\app\views\admin\userlist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad93a983b01e4_99049693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd635b3723ba8f63e4fe59bad731c0b8cf69452f8' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\admin\\userlist.html',
      1 => 1524185649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5ad93a983b01e4_99049693 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="panel-head"><strong class="icon-reorder"> 用户列表</strong>
        </div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">
                <li><a class="button border-main icon-plus-square-o" href="index.php?m=admin&c=user&a=adduser"> 添加内容</a></li>
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th>id</th>
                <th width="15%">用户名</th>
                <th>密码</th>
                <th>头像</th>
                <th>手机</th>
                <th width="10%">性别</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['password'];?>
</td>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picture'];?>
" alt=""></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['sex'] == 1) {?>
                <td>男</td>
                <?php } else { ?>
                <td>女</td>
                <?php }?>
                <td>
                    <div class="button-group"><a class="button border-main" href="index.php?m=admin&c=user&a=updateuser&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><span
                            class="icon-edit"></span>修改</a>
                        <a class="button border-red" href="index.php?m=admin&c=user&a=deluser&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><span class="icon-trash-o"></span> 删除</a></div>
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <tr>
                <td colspan="7">
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
