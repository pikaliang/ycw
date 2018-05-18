<?php
/* Smarty version 3.1.30, created on 2018-04-20 03:16:56
  from "E:\wamp\www\mvc\app\views\admin\userupdate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad93f8879d3d2_60125896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d8810399a2374f7b1e6f6df74fc23b51188cc79' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\admin\\userupdate.html',
      1 => 1524186989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5ad93f8879d3d2_60125896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改用户</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="index.php?m=admin&c=user&a=checkuserupdate">
            <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['uid'];?>
">
            <div class="form-group">
                <div class="label">
                    <label>用户名：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
" name="username" data-validate="required:请输入用户名"/>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>密码：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['password'];?>
" name="password" data-validate="required:请输入密码" readonly/>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>头像：</label>
                </div>
                <div class="field">
                    <input type="file" id="url1" class="input tips" style="width:25%; float:left;" value="" data-toggle="hover" data-place="right" data-image="<?php echo $_smarty_tpl->tpl_vars['data']->value['picture'];?>
"/>
                    <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传" style="float:left;" data-url="index.php?m=admin&c=user&a=upload">
                    <div class="tipss">图片尺寸：500*500</div>
                    <input type="hidden" name="picture" id="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['picture'];?>
">
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>手机：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
" name="phone" data-validate="required:请输入手机号码"/>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>性别：</label>
                </div>
                <div class="field" style="padding-top:8px;">
                    男 <input value="1" type="radio" name="sex" <?php if ($_smarty_tpl->tpl_vars['data']->value["sex"] == 1) {?>checked<?php }?> />
                    女 <input value="0" type="radio" name="sex" <?php if ($_smarty_tpl->tpl_vars['data']->value["sex"] == 0) {?>checked<?php }?>/>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
