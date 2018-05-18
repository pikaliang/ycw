<?php
class ordersModel{
    function __construct()
    {
        $this->db=new db("orders");
    }
    function getorders($limit){
        $arr=$this->db->selectAll("*","1 $limit");
        $this->db->close();
        return $arr;
    }
    function getordersnum(){
        $num=$this->db->selectOne("1","count(*) as num");
        return $num['num'];
    }
}