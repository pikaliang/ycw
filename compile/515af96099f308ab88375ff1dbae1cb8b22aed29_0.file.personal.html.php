<?php
/* Smarty version 3.1.30, created on 2018-04-24 10:34:00
  from "E:\wamp\www\mvc\app\views\index\personal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adeebf8751c70_81713123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '515af96099f308ab88375ff1dbae1cb8b22aed29' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\index\\personal.html',
      1 => 1524558836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5adeebf8751c70_81713123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/wode.css">
<body>
	<main class="wode">
		<div class="wodezong">
			<div class="wode_top">
					<div class="wode_shezhi">
						<span class="head_left11">&#xe65b;</span>
						<span class="head_left11">&#xe6cd;</span>
					</div>
					<div class="wode_denglu1">
						<img src="<?php echo IMG_PATH;?>
/zhongcao4.png" alt="">
						<h1>登录/注册</h1>
						<div class="wode_shoucang">
						</div>
					</div>
			</div>	
			
			<div class="wode_dingdan">
					<div class="wode_ding_top">
						<h3>我的订单</h3>
					</div>
					<div class="wode_ding_bottom">
						<div class="ding_bottom_item">
							<h1>&#xe640;</h1>
							<h2>待付款</h2>
						</div>
						<div class="ding_bottom_item">
							<h1>&#xe63f;</h1>
							<h2>待发货</h2>
						</div>
						<div class="ding_bottom_item">
							<h1>&#xe60d;</h1>
							<h2>待收货</h2>
						</div>
						<div class="ding_bottom_item">
							<h1>&#xe66b;</h1>
							<h2>待评价</h2>
						</div>
						<div class="ding_bottom_item">
							<h1>&#xe609;</h1>
							<h2>退货退款</h2>
						</div>
					</div>
			</div>

		</div>
	</main>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
