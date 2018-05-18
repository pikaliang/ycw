<?php
class goodsModel{
    function __construct()
    {
        $this->db=new db("goods");
    }
    function getgoodsnum(){
        $arr=$this->db->selectOne("1","count(*) as num");
        return $arr["num"];
    }
    function getgoods($limit){
        $this->db->table="goods,type";
        $arr=$this->db->selectAll("*","goods.tid=type.tid  $limit");
        $this->db->close();
        return $arr;
    }
    function delgoods(){
        $id=$_GET["id"];
        $r=$this->db->delete("gid=$id");
        $this->db->close();
        return $r;
    }
    function getalltype(){
        $this->db->table="type";
        $arr=$this->db->selectAll("*");
        return $arr;
    }
    function insertgoods(){
        $gname=$_POST["gname"];
        $gthumb=$_POST["gthumb"];
        $gpictures=$_POST["gpictures"];
        $gprice=$_POST["gprice"];
        $gdescription=$_POST["gdescription"];
        $tid=$_POST["tid"];
        $grecommend=$_POST["grecommend"];
        $gorder=$_POST["gorder"];
        $r=$this->db->insert(["gname"=>$gname,"gthumb"=>$gthumb,"gpictures"=>$gpictures,"gprice"=>$gprice,"gdescription"=>$gdescription,"tid"=>$tid,"grecommend"=>$grecommend,"gorder"=>$gorder]);
        $this->db->close();
        return $r;
    }
    function getsomegoods(){
        $this->db->table="goods";
        $id=$_GET["id"];
        $data=$this->db->selectOne("gid=$id");
        $this->db->close();
        return $data;
    }
    function updategoods(){
        $gid=$_POST["gid"];
        $gname=$_POST["gname"];
        $gthumb=$_POST["gthumb"];
        $gpictures=$_POST["gpictures"];
        $gprice=$_POST["gprice"];
        $gdescription=$_POST["gdescription"];
        $tid=$_POST["tid"];
        $grecommend=$_POST["grecommend"];
        $gorder=$_POST["gorder"];
        $r=$this->db->update("gname='{$gname}',gthumb='{$gthumb}',gpictures='{$gpictures}',gprice='{$gprice}',gdescription='{$gdescription}',tid='{$tid}',grecommend='{$grecommend}',gorder='{$gorder}'","gid=$gid");
        $this->db->close();
        return $r;
    }
}