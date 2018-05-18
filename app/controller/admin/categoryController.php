<?php
class category extends controller {
    function __construct()
    {
         parent::__construct();
         $this->categoryModel=new categoryModel();
    }
    function showcategory(){
         $num=$this->categoryModel->getcategorynum();
         $pager=new pager($num,5);
         $pager->output();
         $arr=$this->categoryModel->getcategory($pager->limit);
         $str=$pager->str;
         $this->smarty->assign("data",$arr);
         $this->smarty->assign("str",$str);
         $this->smarty->display("admin/categorylist.html");

    }
    function delcategory(){
        $r=$this->categoryModel->delcategory();
        if($r==1){
            $msg="删除成功";
        }else{
            $msg="删除失败";
        }
        $href="index.php?m=admin&c=category&a=showcategory";
        $this->jump($msg,$href);
    }
    function addcategory(){
        $this->smarty->display("admin/categoryadd.html");

    }
    function upload(){
        $upload=new upload();
        $path=$upload->upload("file");
    }
    function checkcategoryadd(){
        $r=$this->categoryModel->insertcategory();
        if($r==1){
            $msg="添加成功";
            $href="index.php?m=admin&c=category&a=showcategory";
        }else{
            $msg="添加失败";
            $href="index.php?m=admin&c=category&a=addcategory";
        }
        $this->jump($msg,$href);
    }
    function updatecategory(){
        $data=$this->categoryModel->getsomecategory();
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/categoryupdate.html");
    }
    function checkcategoryupdate(){
        $r=$this->categoryModel->updatecategory();
        $id=$_POST["cid"];
        if($r==1){
            $msg="修改成功";
            $href="index.php?m=admin&c=category&a=showcategory";
        }else{
            $msg="修改失败";
            $href="index.php?m=admin&c=category&a=updatecategory&id=$id";
        }
        $this->jump($msg,$href);
    }
}