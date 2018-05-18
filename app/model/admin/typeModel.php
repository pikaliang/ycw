<?php
class typeModel{
    function __construct()
    {
        $this->db=new db("type");
    }
    function gettypenum(){
        $arr=$this->db->selectOne("1","count(*) as num");
        return $arr["num"];
    }
    function gettype($limit){
        $this->db->table="type,category";
        $arr=$this->db->selectAll("*","type.cid=category.cid order by type.torder $limit");
        $this->db->close();
        return $arr;
    }
    function deltype(){
        $id=$_GET["id"];
        $r=$this->db->delete("tid=$id");
        $this->db->close();
        return $r;
    }
    function getallcategory(){
        $this->db->table="category";
        $categorys=$this->db->selectAll("cname,cid");
        return $categorys;
    }
    function inserttype(){
        $tname=$_POST["tname"];
        $tthumb=$_POST["tthumb"];
        $torder=$_POST["torder"];
        $cid=$_POST["cid"];
        $r=$this->db->insert(["tname"=>$tname,"tthumb"=>$tthumb,"torder"=>$torder,"cid"=>$cid]);
        $this->db->close();
        return $r;
    }
    function getsometype(){
        $this->db->table="type";
        $id=$_GET["id"];
        $arr=$this->db->selectOne("tid=$id");
        $this->db->close();
        return $arr;
    }
    function updatetype(){
        $tid=$_POST["tid"];
        $tname=$_POST["tname"];
        $tthumb=$_POST["tthumb"];
        $torder=$_POST["torder"];
        $cid=$_POST["cid"];
        $r=$this->db->update("tname='{$tname}',tthumb='{$tthumb}',torder='{$torder}',cid='{$cid}'","tid=$tid");
        $this->db->close();
        return $r;
    }
}