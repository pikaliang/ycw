<?php
header("Content-type:text/html;charset=utf-8");
// include include_once require require_once
// 路径分隔符    WINDOW \  linux /
define("DS",DIRECTORY_SEPARATOR);
// 本地文件根目录  E:\wamp\www\mvc\
define("ROOT",__DIR__.DS);
// 核心文件的目录  E:\wamp\www\mvc\libs\
define("LIBS_PATH",ROOT."libs".DS);
// smarty编译文件放置的目录 E:\wamp\www\mvc\compile
define("COMPILE_PATH",ROOT."compile");
// 应用文件的根目录 E:\wamp\www\mvc\app
define("APP_PATH",ROOT."app".DS);
// M  V  C 各自的根目录
define("MODEL_PATH",APP_PATH."model".DS);
define("VIEWS_PATH",APP_PATH."views".DS);
define("CONTROLLER_PATH",APP_PATH."controller".DS);
//定义本地字体文件目录
define("FONT_PATH",ROOT."static".DS."font".DS);
//定义上传目录
define("UPLOAD_PATH",ROOT."upload".DS);
// 定义网络地址根目录 http://localhost/mvc/
define("WEB_PATH","//".$_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")+1));
// css文件的网络地址
define("CSS_PATH",WEB_PATH."static/css");
// js文件的网络地址
define("JS_PATH",WEB_PATH."static/js");
// img文件的网络地址
define("IMG_PATH",WEB_PATH."static/images");

//引入核心类
include LIBS_PATH."db.class.php";
include LIBS_PATH."session.class.php";
include LIBS_PATH."router.class.php";
include LIBS_PATH."code.class.php";
include LIBS_PATH."smarty".DS."libs".DS."Smarty.class.php";
include LIBS_PATH."controller.class.php";
include LIBS_PATH."pager.class.php";
include LIBS_PATH."upload.class.php";
include LIBS_PATH."indexcontroller.class.php";
include LIBS_PATH."Ucpaas.class.php";
$router=new router();
$router->get();






