<?php
class user extends controller{
    function __construct()
    {
        parent::__construct();
        $this->check();
        $this->userModel=new userModel();
    }
    function showuser(){
        $num=$this->userModel->getusernum();
        $page=new pager($num,5);
        $page->output();
        $data=$this->userModel->getuser($page->limit);
        $str=$page->str;
        $this->smarty->assign("str",$str);
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/userlist.html");
    }
    function deluser(){
        $r=$this->userModel->deluser();
        if($r==1){
            $msg="删除成功";
        }else{
            $msg="删除失败";
        }
        $href="index.php?m=admin&c=user&a=showuser";
        $this->jump($msg,$href);
    }
    function adduser(){
        $this->smarty->display("admin/useradd.html");
    }
    function upload(){
        $upload=new upload();
        $path=$upload->upload("file");
    }
    function checkuseradd(){
        $r=$this->userModel->insertuser();
        if($r==1){
            $msg="添加成功";
            $href="index.php?m=admin&c=user&a=showuser";
        }else{
            $msg="添加失败";
            $href="index.php?m=admin&c=user&a=adduser";
        }
        $this->jump($msg,$href);
    }
    function updateuser(){
        $data=$this->userModel->getsomeuser();
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/userupdate.html");
    }
    function checkuserupdate(){
        $r=$this->userModel->updateuser();
        $id=$_POST["uid"];
        if($r==1){
            $msg="修改成功";
            $href="index.php?m=admin&c=user&a=showuser";
        }else{
            $msg="修改失败";
            $href="index.php?m=admin&c=user&a=updateuser&id=$id";
        }
        $this->jump($msg,$href);
    }
}