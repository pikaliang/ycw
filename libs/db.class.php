<?php
class db
{
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $dbname = "app";
    public $port = 3306;

    function __construct($table)
    {
        $this->table = $table;
        $this->con = new mysqli($this->host, $this->user, $this->password, $this->dbname, $this->port);
        if ($this->con->connect_errno) {
            echo "数据库连接失败" . $this->con->connect_error;
            exit();
        }
        $this->con->query("SET NAMES UTF8");
    }

    function selectAll($fields = "*", $where = "1")
    {
        $sql = "select " . $fields . " from " . $this->table . " where " . $where;
        $r = $this->con->query($sql);
        $arr = $r->fetch_all(MYSQLI_ASSOC);
        return $arr;
    }

    function selectOne($where, $fields = "*")
    {
        $sql = "select " . $fields . " from " . $this->table . " where " . $where;
        $r = $this->con->query($sql);
        $arr = $r->fetch_array(MYSQLI_ASSOC);
        return $arr;
    }

    function insert($arr = [])
    {
       $keys="";
       $vals="";
       foreach ($arr as $k=>$v){
           $keys.="`".$k."`,";
           $vals.="'".$v."',";
       }
       $keys=substr($keys,0,strrpos($keys,","));
       $vals=substr($vals,0,strrpos($vals,","));
       $sql="insert into ".$this->table."($keys)values($vals)";
       $this->con->query($sql);
       if($this->con->affected_rows===1){
           return 1;
       }else{
           return  0;
       }
    }
    function delete($where){
        $sql="delete from ".$this->table." where $where";
        $this->con->query($sql);
        if($this->con->affected_rows===1){
            return 1;
        }else{
            return  0;
        }
    }
    function update($fields,$where){
        $sql="update ".$this->table." set $fields where $where";
        $this->con->query($sql);
        if($this->con->affected_rows===1){
            return 1;
        }else{
            return  0;
        }
    }
    function close(){
        $this->con->close();
    }
}