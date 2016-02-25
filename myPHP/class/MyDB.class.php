<?php
//myDB内文件必须继承该文件
class MyDB extends mysqli {
    private $tableName;
    public function __construct($tableName='') {
        parent::__construct(HOST, USER, PASSWD, DATABASE);
        $this->tableName = $tableName;
    }
    public function query_select($where='') {
        if($where=='') {
            $str = "select * from ".$this->tableName;
        } else {
            $str = "select * from ".$this->tableName." where ".$where;
        }
        return parent::query($str);
    }
    public function query_insert($value) {
        $str = "insert into $this->tableName value ( $value )";
        return parent::query($str);
    }
    public function query_delete($id) {
        $str = "delete from $this->tableName where id=".$id;
        return parent::query($str);
    }
    public function query_update($id,$value) {
        $str = "update $this->tableName set $value where id=$id";
        //return $str;
        return parent::query($str);
    }
}