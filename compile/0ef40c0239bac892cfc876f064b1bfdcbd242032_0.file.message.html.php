<?php
/* Smarty version 3.1.30, created on 2018-04-20 03:23:48
  from "E:\wamp\www\mvc\app\views\admin\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad94124569029_29428764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ef40c0239bac892cfc876f064b1bfdcbd242032' => 
    array (
      0 => 'E:\\wamp\\www\\mvc\\app\\views\\admin\\message.html',
      1 => 1524187423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad94124569029_29428764 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>系统信息</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/pintuer.css">
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        .error-container {
            background: #fff;
            border: 1px solid #0ae;
            text-align: center;
            width: 450px;
            margin: 250px auto;
            font-family: Microsoft Yahei;
            padding-bottom: 30px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .error-container h1 {
            font-size: 16px;
            padding: 12px 0;
            background: #0ae;
            color: #fff;
        }

        .errorcon {
            padding: 35px 0;
            text-align: center;
            color: #0ae;
            font-size: 18px;
        }

        .errorcon i {
            display: block;
            margin: 12px auto;
            font-size: 30px;
        }

        .errorcon span {
            color: red;
        }

        h4 {
            font-size: 14px;
            color: #666;
        }

        a {
            color: #0ae;
        }
    </style>
</head>
<body class="no-skin">
<div class="error-container">
    <h1> 后台管理系统-信息提示 </h1>
    <div class="errorcon">
        <i class="icon-smile-o"></i><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

    </div>
    <h4 class="smaller">页面自动 <a id="href" href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
">跳转</a> 等待时间： <b id="wait">1</b></h4>

</div>

<?php echo '<script'; ?>
 type="text/javascript">
    (function () {
        var wait = document.getElementById('wait'), href = document.getElementById('href').href;
        var interval = setInterval(function () {
            var time = --wait.innerHTML;
            if (time <= 0) {
                location.href = href;
                clearInterval(interval);
            };
        }, 1000);
    })();
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
