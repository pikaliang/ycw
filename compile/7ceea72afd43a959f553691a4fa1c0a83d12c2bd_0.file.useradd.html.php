<?php
/* Smarty version 3.1.30, created on 2018-04-20 08:58:56
  from "E:\wamp\www\mvc\app\views\admin\useradd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad98fb01566a3_43239086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ceea72afd43a959f553691a4fa1c0a83d12c2bd' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\admin\\useradd.html',
      1 => 1524185436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5ad98fb01566a3_43239086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加用户</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="index.php?m=admin&c=user&a=checkuseradd">
            <div class="form-group">
                <div class="label">
                    <label>用户名：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="" name="username" data-validate="required:请输入用户名"/>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>密码：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="" name="password" data-validate="required:请输入密码"/>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>头像：</label>
                </div>
                <div class="field">
                    <input type="file" id="url1" class="input tips" style="width:25%; float:left;" value="" data-toggle="hover" data-place="right" data-image=""/>
                    <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传" style="float:left;" data-url="index.php?m=admin&c=user&a=upload">
                    <div class="tipss">图片尺寸：500*500</div>
                    <input type="hidden" name="picture" id="hidden">
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>手机：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="" name="phone" data-validate="required:请输入手机号码"/>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>性别：</label>
                </div>
                <div class="field" style="padding-top:8px;">
                    男 <input value="1" type="radio" name="sex" checked/>
                    女 <input value="0" type="radio" name="sex"/>
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
