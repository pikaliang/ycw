<?php
class type extends controller {
    function __construct()
    {
         parent::__construct();
         $this->typeModel=new typeModel();
    }
    function showtype(){
         $num=$this->typeModel->gettypenum();
         $pager=new pager($num,5);
         $pager->output();
         $arr=$this->typeModel->gettype($pager->limit);
         $str=$pager->str;
         $this->smarty->assign("data",$arr);
         $this->smarty->assign("str",$str);
         $this->smarty->display("admin/typelist.html");

    }
    function deltype(){
        $r=$this->typeModel->deltype();
        if($r==1){
            $msg="删除成功";
        }else{
            $msg="删除失败";
        }
        $href="index.php?m=admin&c=type&a=showtype";
        $this->jump($msg,$href);
    }
    function addtype(){
        $categorys=$this->typeModel->getallcategory();
        $this->smarty->assign("data",$categorys);
        $this->smarty->display("admin/typeadd.html");
    }
    function upload(){
        $upload=new upload();
        $path=$upload->upload("file");
    }
    function checktypeadd(){
        $r=$this->typeModel->inserttype();
        if($r==1){
            $msg="添加成功";
            $href="index.php?m=admin&c=type&a=showtype";
        }else{
            $msg="添加失败";
            $href="index.php?m=admin&c=type&a=addtype";
        }
        $this->jump($msg,$href);
    }
    function updatetype(){
        $categorys=$this->typeModel->getallcategory();
        $data=$this->typeModel->getsometype();
        $this->smarty->assign("cdata",$categorys);
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/typeupdate.html");
    }
    function checktypeupdate(){
        $r=$this->typeModel->updatetype();
        $id=$_POST["tid"];
        if($r==1){
            $msg="修改成功";
            $href="index.php?m=admin&c=type&a=showtype";
        }else{
            $msg="修改失败";
            $href="index.php?m=admin&c=type&a=updatetype&id=$id";
        }
        $this->jump($msg,$href);
    }
}