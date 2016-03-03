<?php

namespace IMooc;

/**
 * Description of User
 *
 * @author Administrator
 */
class User {

    public $id;
    public $name;
    public $mobile;
    public $regtime;
    private $db;

    public function __construct($id) {
        $this->db = new Database\MySQLi();
        $this->db->connect('127.0.0.1', 'root', '', 'test');
        $res = $this->db->query("select * from user where id=" . $id);
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->regtime = $data['regtime'];
    }

    public function __destruct() {
        $res = $this->db->query("update user set name='{$this->name}',mobile='{$this->mobile}',regtime='{$this->regtime}' where id=" . $this->id);
    }

}
