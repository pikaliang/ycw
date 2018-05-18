<?php
/* Smarty version 3.1.30, created on 2018-04-25 09:27:52
  from "E:\wamp\www\mvc\app\views\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae02df8e7f8c6_78604058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c64e73b09c390798c54a13c4e65bb8fefd0acaf' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\index\\index.html',
      1 => 1524641230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5ae02df8e7f8c6_78604058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/main.css">
<body>
		<!-- 搜索框开始 -->
		<section id="search">
			<h1>&#xe62f;</h1>
			<input type="text" class="sousuo" placeholder="&#xe69b;飞利浦剃须刀">				
			<h1>&#xe6cd;</h1>
			
		</section>
		<!-- 搜索框结束 -->
		<section id="zong">
			<section id="banner">
				<img src="<?php echo IMG_PATH;?>
/b1.jpg" alt="">
			</section>
			<section id="leixing">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
				<div class="wodefuwu_item">
					<a href="index.php?m=index&c=category&a=showcategory&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" class="wode_yuan wode_yuan10">
						<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt="">
					</a>
					<h1><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</h1>
				</div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</section>
			<section id="tuijian">
				<div class="tuijian_top">
					<h1>为你推荐</h1>
				</div>
				<div class="tuijian_item">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gdata']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
					<a href="index.php?m=index&c=category&a=showcontent&gid=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
" class="tuijian_item_up">
						<div class="tuijian_item_left">
							<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt="">
						</div>
						<div class="tuijian_item_left">
							<h1><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</h1>
							<h2><?php echo $_smarty_tpl->tpl_vars['v']->value['gdescription'];?>
</h2>
							<h4>¥<?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</h4>
						</div>
					</a>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</div>
			</section>	
		</section>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
