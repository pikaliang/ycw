<?php
/* Smarty version 3.1.30, created on 2018-04-25 11:48:13
  from "E:\wamp\www\mvc\app\views\index\sign.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae04edd6c5845_48820896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74c3625b6e827ccc8a79b43426b971361b89a5ac' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\index\\sign.html',
      1 => 1524649691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_5ae04edd6c5845_48820896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/zhuce.css">
<body>
<!-- 头部开始 -->
<div class="header">
    <h1 class="header_wen" onclick="history.back()">&lt;</h1>
    <h1 class="header_wen2">注册</h1>
</div>
<!-- 头部结束 -->
<?php if (isset($_smarty_tpl->tpl_vars['notice']->value)) {?>
<style>
    .notice {
        width: 100%;
        height: 1rem;
        background: rgba(255, 0, 26, 0.73);
        line-height: 1rem;
        color: #fff;
        text-align: center;
        position: relative;
    }

    .notice span {
        position: absolute;
        width: 0.5rem;
        height: 1rem;
        right: 0.3rem;
        text-align: center;
    }
</style>
<div class="notice"><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
 <span>x</span></div>
<?php echo '<script'; ?>
>
    var span=document.querySelector("span");
    span.onclick=function(){
        document.body.removeChild(this.parentNode);
    }
<?php echo '</script'; ?>
>
<?php }?>
<form action="index.php?m=index&c=personal&a=checksign" method="post">
    <div class="second_top">
        <div class="second_top_item">
            <h1>
                <span>&#xe693;</span>
                <span>手机注册</span>
            </h1>
            <div class="second_top_line"></div>
        </div>
    </div>
    <div class="phone">
        <h1>手机号:</h1>
        <input type="text" placeholder="请输入手机号" name="phone">
    </div>
    <div class="phone">
        <h1>验证码:</h1>
        <input type="text" name="code" placeholder="请输入验证码">
        <div class="yanzhengma">获取验证码</div>
    </div>
    <input type="submit" class="next" value="下一步">
</form>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/reg.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
