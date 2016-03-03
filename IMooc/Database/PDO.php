<?php

namespace IMooc\Database;
use IMooc\IDatabase;

class PDO implements IDatabase{
    private $conn;
    public function connect($host,$user,$password,$dbname){
        
        $conn=new \PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $this->conn=$conn;
    }
    public function query($sql){
        $this->conn->query($sql);
        return $res;
    }
    public function close(){
        unset($this->conn);
    }
}
