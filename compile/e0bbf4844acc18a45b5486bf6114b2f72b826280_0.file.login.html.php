<?php
/* Smarty version 3.1.30, created on 2018-04-25 10:17:08
  from "E:\wamp\www\mvc\app\views\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae039843c1ad0_11055102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0bbf4844acc18a45b5486bf6114b2f72b826280' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\index\\login.html',
      1 => 1524644220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_5ae039843c1ad0_11055102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/login.css">
<body>
	<!-- 头部开始 -->
	<div class="header">
		<h1 class="header_wen" onclick="location.href='index.php'">取消</h1>
		<h1 class="header_wen2">登录</h1>
	</div>
	<!-- 头部结束 -->
	<div class="tu"><img src="<?php echo IMG_PATH;?>
/15.jpg" alt=""></div>
	<!-- 中间部分开始 -->
	<div class="second_top">
		<div class="second_top_item">
			<h1>
				<span>&#xe637;</span>
				<span>会员账号登录</span>
			</h1>
			<div class="second_top_line"></div>
		</div>
	</div>
	<div class="second_bottom">
		<div class="second_bottom_item">
			<h1 class="second_bottom_wen1">账号：</h1>
			<div class="second_item_box">
				<input type="text" class="second_input" placeholder="邮箱/手机号">
			</div>
		</div>
		<div class="second_bottom_item">
			<h1 class="second_bottom_wen1">密码：</h1>
			<div class="second_item_box">
				<input type="password" class="second_input" placeholder="请输入密码">
			</div>
		</div>
	</div>
	<div class="btn">
		<h1 class="btn_wen">登录</h1>
	</div>
	<a href="index.php?m=index&c=personal&a=sign" class="wen1">快速注册</a>
	<!--<h1 class="wen2">找回密码</h1>-->
	<!-- 中间部分结束 -->
	<!-- 底部开始 -->
	<!--<div class="dibu">-->
		<!--<div class="dibu_item">-->
			<!--<h1 class="dibu_item_wen">-->
				<!--<span class="dibu_wen1">&#xe628;</span>-->
				<!--<span class="dibu_wen2">微信登录</span>-->
			<!--</h1>-->
		<!--</div>-->
		<!--<div class="dibu_line"></div>-->
		<!--<div class="dibu_item">-->
			<!--<h1 class="dibu_item_wen">-->
				<!--<span class="dibu_wen1 dibu_wen3">&#xe604;</span>-->
				<!--<span class="dibu_wen2">QQ登录</span>-->
			<!--</h1>-->
		<!--</div>-->
		<!--<div class="dibu_line"></div>-->
		<!--<div class="dibu_item">-->
			<!--<h1 class="dibu_item_wen">-->
				<!--<span class="dibu_wen1 dibu_wen4">&#xe65e;</span>-->
				<!--<span class="dibu_wen2">支付宝登录</span>-->
			<!--</h1>-->
		<!--</div>-->
	<!--</div>-->
	<!-- 底部结束 -->
</body>
</html><?php }
}
