<?php
/* Smarty version 3.1.30, created on 2018-04-20 02:42:08
  from "E:\wamp\www\mvc\app\views\admin\pass.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad93760b22892_03218110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c1cd40a280f9e15e23bdb7b03b4936c6aba35a0' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\admin\\pass.html',
      1 => 1524045350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5ad93760b22892_03218110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-key"></span> 修改会员密码</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="index.php?m=admin&c=login&a=checkpass">
      <div class="form-group">
        <div class="label">
          <label>管理员帐号：</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">
           <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

          </label>
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="mpass">原始密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" id="mpass" name="mpass" size="50" placeholder="请输入原始密码" data-validate="required:请输入原始密码" />       
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="sitename">新密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" name="newpass" size="50" placeholder="请输入新密码" data-validate="required:请输入新密码,length#>=5:新密码不能小于5位" />         
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label for="sitename">确认新密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" name="renewpass" size="50" placeholder="请再次输入新密码" data-validate="required:请再次输入新密码,repeat#newpass:两次输入的密码不一致" />          
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
</body></html><?php }
}
