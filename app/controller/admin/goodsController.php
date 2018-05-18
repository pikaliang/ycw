<?php
class goods extends controller {
    function __construct()
    {
         parent::__construct();
         $this->goodsModel=new goodsModel();
    }
    function showgoods(){
         $num=$this->goodsModel->getgoodsnum();
         $pager=new pager($num,5);
         $pager->output();
         $arr=$this->goodsModel->getgoods($pager->limit);
         $str=$pager->str;
         foreach($arr as $k=>$v){
             $imgstr=$v['gpictures'];
             $imgarray=explode(";",$imgstr);
             $imgarray=array_slice($imgarray,0,3);
             $arr[$k]["gpictures"]=$imgarray;
         }
         $this->smarty->assign("data",$arr);
         $this->smarty->assign("str",$str);
         $this->smarty->display("admin/goodslist.html");

    }
    function delgoods(){
        $r=$this->goodsModel->delgoods();
        if($r==1){
            $msg="删除成功";
        }else{
            $msg="删除失败";
        }
        $href="index.php?m=admin&c=goods&a=showgoods";
        $this->jump($msg,$href);
    }
    function addgoods(){
        $data=$this->goodsModel->getalltype();
        $this->smarty->assign("types",$data);
        $this->smarty->display("admin/goodsadd.html");
    }
    function upload(){
        $upload=new upload();
        $path=$upload->upload("file");
    }
    function checkgoodsadd(){
        $r=$this->goodsModel->insertgoods();
        if($r==1){
            $msg="添加成功";
            $href="index.php?m=admin&c=goods&a=showgoods";
        }else{
            $msg="添加失败";
            $href="index.php?m=admin&c=goods&a=addgoods";
        }
        $this->jump($msg,$href);
    }
    function updategoods(){
        $types=$this->goodsModel->getalltype();
        $data=$this->goodsModel->getsomegoods();
        $this->smarty->assign("data",$data);
        $this->smarty->assign('types',$types);
        $this->smarty->display("admin/goodsupdate.html");
    }
    function checkgoodsupdate(){
        $r=$this->goodsModel->updategoods();
        $id=$_POST["gid"];
        if($r==1){
            $msg="修改成功";
            $href="index.php?m=admin&c=goods&a=showgoods";
        }else{
            $msg="修改失败";
            $href="index.php?m=admin&c=goods&a=updategoods&id=$id";
        }
        $this->jump($msg,$href);
    }
}