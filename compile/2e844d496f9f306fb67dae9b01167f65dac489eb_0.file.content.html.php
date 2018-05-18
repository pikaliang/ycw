<?php
/* Smarty version 3.1.30, created on 2018-04-25 09:17:52
  from "E:\wamp\www\mvc\app\views\index\content.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae02ba0517ea9_35358244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e844d496f9f306fb67dae9b01167f65dac489eb' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\index\\content.html',
      1 => 1524640669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_5ae02ba0517ea9_35358244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/content.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/swiper.css">
	<!-- 头部开始 -->
	<div class="top">
		<div class="top_left" onclick="history.back();">&lt;</div>
		<div class="top_right">
			<!--<a>&#xe658;</a>-->
			<!--<a>&#xe6a4;</a>-->
		</div>
	</div>
	<!-- 头部结束 -->

	<div class="second">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['gpictures'], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
				<div class="swiper-slide">
					<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" alt="" width="100%" height="auto">
				</div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
	<div class="xinxi">
		<p><span><?php echo $_smarty_tpl->tpl_vars['data']->value['gname'];?>
</span>
		<h1>￥<?php echo $_smarty_tpl->tpl_vars['data']->value['gprice'];?>
</h1>
		<div class="xinxi_miaoshu">
		<div class="miaoshu_wenzi">
			<span><?php echo $_smarty_tpl->tpl_vars['data']->value['gdescription'];?>
</span>
		</div>
	</div>
	</div>
	
	<!--<div class="huayu">-->
		<!--<div class="item">-->
			<!--<div class="xinxi_box2">-->
				<!--<h1>配送</h1>-->
				<!--<h2>全国</h2>-->
			<!--</div>-->
			<!--<div class="xinxi_box4">-->
				<!--<h1>附送</h1>-->
				<!--<h2>下单填写留言，即免费赠送精美贺卡</h2>-->
			<!--</div>-->
			<!--<div class="xinxi_box5">-->
				<!--<h1>说明</h1>-->
				<!--<h2>畅销款特惠</h2>-->
			<!--</div>-->
		<!--</div>-->
	<!--</div>-->
	<!--<div class="peisong">-->
		<!--<h1 class="peisong_wen1">配送</h1>-->
		<!--<h1 class="peisong_wen2">&#xe648;</h1>-->
		<!--<h1 class="peisong_wen3">请选择配送地区</h1>-->
		<!--<h1 class="peisong_wen4">&#xe6a3;</h1>-->
	<!--</div>-->
	<!--<div class="pingjia">-->
		<!--<div class="pingjia_top">-->
			<!--<h1>订单评价</h1>-->
			<!--<div class="pingjia_top_right">-->
				<!--<h1>-->
					<!--<span>4276条评价</span>-->
					<!--<span>></span>-->
				<!--</h1>-->
			<!--</div>-->
		<!--</div>-->
		<!--<div class="pingjia_item">-->
			<!--<div class="pingjia_item_tu">-->
				<!--<img src="img/ya1.jpg" alt="">-->
			<!--</div>-->
			<!--<div class="pingjia_item_xinxi">-->
				<!--<div class="pingji_item_lxinxi">-->
					<!--<h1>zhaoshan**</h1>-->
					<!--<h2>非常满意，效果非常好，是很好的牌子了</h2>-->
					<!--<h3>-->
						<!--<span>&#xe648;</span>-->
						<!--<span>广东江门市开平市中和平路派件活梵蒂冈的</span>-->
					<!--</h3>-->
				<!--</div>-->
				<!--<div class="pingjia_item_rxinxi">-->
					<!--<h1>-->
						<!--<span>&#xe611;</span>-->
						<!--<span>&#xe611;</span>-->
						<!--<span>&#xe611;</span>-->
						<!--<span>&#xe611;</span>-->
						<!--<span>&#xe611;</span>-->
					<!--</h1>-->
					<!--<h2>2018-4-10</h2>-->
				<!--</div>-->
			<!--</div>-->
		<!--</div>-->
		<!--<div class="pingjia_item">-->
			<!--<div class="pingjia_item_tu">-->
				<!--<img src="img/ya1.jpg" alt="">-->
			<!--</div>-->
			<!--<div class="pingjia_item_xinxi">-->
				<!--<div class="pingji_item_lxinxi">-->
					<!--<h1>zhaoshan**</h1>-->
					<!--<h2>非常满意，效果非常好，是很好的牌子了</h2>-->
					<!--<h3>-->
						<!--<span>&#xe648;</span>-->
						<!--<span>广东江门市开平市中和平路派件活梵蒂冈的</span>-->
					<!--</h3>-->
				<!--</div>-->
				<!--<div class="pingjia_item_rxinxi">-->
					<!--<h1>-->
						<!--<span>&#xe611;</span>-->
						<!--<span>&#xe611;</span>-->
						<!--<span>&#xe611;</span>-->
						<!--<span>&#xe611;</span>-->
						<!--<span>&#xe611;</span>-->
					<!--</h1>-->
					<!--<h2>2018-4-10</h2>-->
				<!--</div>-->
			<!--</div>-->
		<!--</div>-->
		<!--<div class="pingjia_item">-->
			<!--<div class="pingjia_item_tu">-->
				<!--<img src="img/ya1.jpg" alt="">-->
			<!--</div>-->
			<!--<div class="pingjia_item_xinxi">-->
				<!--<div class="pingji_item_lxinxi">-->
					<!--<h1>zhaoshan**</h1>-->
					<!--<h2>非常满意，效果非常好，是很好的牌子了</h2>-->
					<!--<h3>-->
						<!--<span>&#xe648;</span>-->
						<!--<span>广东江门市开平市中和平路派件活梵蒂冈的</span>-->
					<!--</h3>-->
				<!--</div>-->
				<!--<div class="pingjia_item_rxinxi">-->
					<!--<h1>-->
						<!--<span>&#xe611;</span>-->
						<!--<span>&#xe611;</span>-->
						<!--<span>&#xe611;</span>-->
						<!--<span>&#xe611;</span>-->
						<!--<span>&#xe611;</span>-->
					<!--</h1>-->
					<!--<h2>2018-4-10</h2>-->
				<!--</div>-->
			<!--</div>-->
		<!--</div>-->
	<!--</div>-->
	<!--<div class="xiangqingtu">-->
		<!--<img src="img/18.jpg" alt="">-->
		<!--<img src="img/19.jpg" alt="">-->
		<!--<img src="img/20.jpg" alt="">-->
		<!--<img src="img/21.jpg" alt="">-->
	<!--</div>-->
	<!-- 加入购物车开始 -->
	<div class="lianxi">
		<div class="lianxi_item">
			<!--<h1>&#xe6cd;</h1>-->
			<!--<h2>客服</h2>-->
		</div>
		<!--<div class="lianxi_line"></div>-->
		<div class="lianxi_item">
			<!--<h1>&#xe62a;</h1>-->
			<!--<h2>电话</h2>-->
		</div>
		<!--<div class="lianxi_line"></div>-->
		<div class="lianxi_item">
			<h1>&#xe608;</h1>
			<h2>购物车</h2>
		</div>
		<div class="lianxi_item2">
			<h1>加入购物车</h1>
		</div>
		<div class="lianxi_item2 lianxi_item3">
			<h1>立即购买</h1>
		</div>
	</div>
	<!-- 加入购物车结束 -->
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/swiper.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var mySwiper = new Swiper('.swiper-container', {
        speed: 500,
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },
    });
<?php echo '</script'; ?>
>
</html><?php }
}
