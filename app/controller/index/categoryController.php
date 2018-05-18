<?php

class category extends indexcontroller
{
    function __construct()
    {
        parent::__construct();
        $this->smarty->assign("t", "2");
        $this->categoryModel = new categoryModel();
    }

    function init()
    {
        $cats = $this->categoryModel->getallcategory();
        $types = $this->categoryModel->getsometypes();
        $this->smarty->assign("cid",1);
        $this->smarty->assign("types", $types);
        $this->smarty->assign("cats", $cats);
        $this->smarty->display("index/category.html");
    }
    function showcategory(){
        $cid=$_GET["cid"];
        $cats = $this->categoryModel->getallcategory();
        $types = $this->categoryModel->getsometypes($cid);
        $this->smarty->assign("cid",$cid);
        $this->smarty->assign("types", $types);
        $this->smarty->assign("cats", $cats);
        $this->smarty->display("index/category.html");
    }
    function gettypes()
    {
        $cid = $_GET["cid"];
        $types = $this->categoryModel->getsometypes($cid);
        echo json_encode($types);
    }

    function showlist()
    {
        $data = $this->categoryModel->getgoods();
        $this->smarty->assign("tid", $_GET['tid']);
        $this->smarty->assign("data", $data);
        $this->smarty->display("index/list.html");
    }

    function getpricelist()
    {
        $data = $this->categoryModel->getgoods("order by gprice");
        echo json_encode($data);
    }

    function getorderlist()
    {
        $data = $this->categoryModel->getgoods();
        echo json_encode($data);
    }

    function getnewlist()
    {
        $data = $this->categoryModel->getgoods("order by gid desc");
        echo json_encode($data);
    }

    function showcontent()
    {
        $data = $this->categoryModel->getcontent();
        $imgstr = $data['gpictures'];
        $imgarray = explode(";", $imgstr);
        $data["gpictures"] = $imgarray;
        $this->smarty->assign("data", $data);
        $this->smarty->display("index/content.html");
    }
}