<?php
/* Smarty version 3.1.30, created on 2018-04-24 10:33:58
  from "E:\wamp\www\mvc\app\views\index\shoppingcar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adeebf65ce974_90180573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa5e1daf46b76e9f26b14c4b2da2cd2449fce933' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\index\\shoppingcar.html',
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
function content_5adeebf65ce974_90180573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/gouwuche.css">
<body>
	<main id="gouwuche">
		<!-- 顶部开始 -->
		<section id="top">
			<h1>购物车<i>(2)</i></h1>
			<div class="top_right">
				<h2>编辑</h2>
				<h3>&#xe6cd;</h3>
			</div>
		</section>
		<!-- 顶部结束 -->
		<!-- 正文内容开始 -->
		<section id="content">
			<div class="content_item">
				<div class="content_item_zhong">
					<div class="content_item_zhong_left">
						<div class="yuan yuan1">&#xe633;</div>
					</div>
					<div class="content_item_zhong_right">
						<div class="content_item_tu">
							<img src="<?php echo IMG_PATH;?>
/1.png" alt="">
						</div>
						<div class="content_item_wenzi">
							<span>
							<div class="cainixihuan_bottom_kuang">
								<h1>自营</h1>
							</div>
							</span>
							<span>考拉工厂店经典阿尔巴卡羊驼大衣</span>
							<h2>军绿色 165</h2>
						</div>
						<div class="content_item_wright">
							<h1>￥79.00</h1>
							<h2>X1</h2>
						</div>

					</div>
				</div>
				<div class="content_item_botom">
					<div class="content_ritem">
						<h2>总计：&nbsp;&nbsp;￥79.00</h2>
					</div>
				</div>
			</div>
		</section>
		<!-- 正文内容结束 -->
	</main>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
