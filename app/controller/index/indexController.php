<?php
class index extends indexcontroller{
    function __construct()
    {
         parent::__construct();
         $this->indexModel=new indexModel();
         $this->smarty->assign("t","1");
    }
    function init(){
        $data=$this->indexModel->getcats();
        $goodsdata=$this->indexModel->getgoods();
        $this->smarty->assign("gdata",$goodsdata);
        $this->smarty->assign("data",$data);
        $this->smarty->display("index/index.html");
    }
}