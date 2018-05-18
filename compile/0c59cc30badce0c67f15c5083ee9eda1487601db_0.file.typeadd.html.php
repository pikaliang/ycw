<?php
/* Smarty version 3.1.30, created on 2018-04-21 10:21:24
  from "E:\wamp\www\mvc\app\views\admin\typeadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adaf48403f3b4_40054295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c59cc30badce0c67f15c5083ee9eda1487601db' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\admin\\typeadd.html',
      1 => 1524298880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5adaf48403f3b4_40054295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加小分类</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="index.php?m=admin&c=type&a=checktypeadd">
            <div class="form-group">
                <div class="label">
                    <label>小分类名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="" name="tname" data-validate="required:请输入分类名称名"/>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>小分类图片：</label>
                </div>
                <div class="field">
                    <input type="file" id="url1" class="input tips" style="width:25%; float:left;" value="" data-toggle="hover" data-place="right" data-image=""/>
                    <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传" style="float:left;" data-url="index.php?m=admin&c=type&a=upload">
                    <div class="tipss">图片尺寸：500*500</div>
                    <input type="hidden" name="tthumb" id="hidden">
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>分类排序：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="" name="torder" data-validate="required:请输入分类排序"/>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>所属大分类：</label>
                </div>
                <div class="field">
                    <select name="cid" class="input w50">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                    <div class="tips"></div>
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
