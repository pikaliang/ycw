<?php
class router{
    public $m=""; // admin index 是要进入前台
    public $c=""; // 当前要引入文件  实例化那个对象
    public $a=""; // 最终要调用的方法
    function __construct()
    {

    }
    function get(){
       $this->m=isset($_GET["m"])?$_GET["m"]:"index";
       $this->c=isset($_GET["c"])?$_GET["c"]:"index";
       $this->a=isset($_GET["a"])?$_GET["a"]:"init";
       $filename=CONTROLLER_PATH.$this->m.DS.$this->c."Controller.php";
       $modelpath=MODEL_PATH.$this->m.DS.$this->c."Model.php";
       if(is_file($modelpath)){
           include $modelpath;
       }
       if(is_file($filename)){
          include $filename;
          if(class_exists($this->c)){
              $classname=$this->c;
              $obj=new $classname();
              if(method_exists($obj,$this->a)){
                   $method=$this->a;
                   $obj->$method();
              }else{
                  echo "方法不存在";
                  include ROOT."404.html";
              }

          }else{
              echo "类不存在";
              include ROOT."404.html";
          }
       }else{
           echo "路径不存在";
           include ROOT."404.html";
       }
    }
}