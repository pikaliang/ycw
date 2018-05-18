<?php
/* Smarty version 3.1.30, created on 2018-04-21 10:32:46
  from "E:\wamp\www\mvc\app\views\admin\typeupdate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adaf72ea4da18_03401312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b551f6750219eb9e6279bf5cfe35a735a3acd8a' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\admin\\typeupdate.html',
      1 => 1524299553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5adaf72ea4da18_03401312 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改小分类</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="index.php?m=admin&c=type&a=checktypeupdate">
            <input type="hidden" name="tid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tid'];?>
">
            <div class="form-group">
                <div class="label">
                    <label>小分类名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tname'];?>
" name="tname" data-validate="required:请输入分类名称名"/>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>小分类图片：</label>
                </div>
                <div class="field">
                    <input type="file" id="url1" class="input tips" style="width:25%; float:left;" value="" data-toggle="hover" data-place="right" data-image="<?php echo $_smarty_tpl->tpl_vars['data']->value['tthumb'];?>
"/>
                    <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传" style="float:left;" data-url="index.php?m=admin&c=type&a=upload">
                    <div class="tipss">图片尺寸：500*500</div>
                    <input type="hidden" name="tthumb" id="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tthumb'];?>
">
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>分类排序：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['torder'];?>
" name="torder" data-validate="required:请输入分类排序"/>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cdata']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['cid'] == $_smarty_tpl->tpl_vars['data']->value['cid']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</option>

                        <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</option>
                        <?php }?>
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
