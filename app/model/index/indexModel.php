<?php
class indexModel{
    function __construct()
    {
    }
    function getcats(){
        $catdb=new db("category");
        $data=$catdb->selectAll("*","1 order by corder limit 0,10");
        $catdb->close();
        return $data;
    }
    function getgoods(){
       $goodsdb=new db("goods");
       $data=$goodsdb->selectAll("*","grecommend=1 order by gorder limit 0,3");
       $goodsdb->close();
       return $data;
    }

}