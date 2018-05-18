<?php
class orders extends controller{
    function __construct()
    {
        parent::__construct();
        $this->check();
        $this->ordersModel=new ordersModel();
    }
    function showorders(){
        $num=$this->ordersModel->getordersnum();
        $page=new pager($num,5);
        $page->output();
        $data=$this->ordersModel->getorders($page->limit);
        $str=$page->str;
        $this->smarty->assign("str",$str);
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/orderslist.html");
    }
    function delorders(){
        $r=$this->ordersModel->delorders();
        if($r==1){
            $msg="删除成功";
        }else{
            $msg="删除失败";
        }
        $href="index.php?m=admin&c=orders&a=showorders";
        $this->jump($msg,$href);
    }
}