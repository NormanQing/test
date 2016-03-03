<?php

namespace IMooc;

/**
 * 工厂模式
 */
class Factory {

    static $proxy = null;

    static public function createDatabase() {
//        $db=new Database();
//        $db=  Database::getInstance();
//        return $db;
        $db = Database::getInstance();
        Register::set('db1', $db);
    }

    static function getUser($id) {
        $key = 'user_' . $id;
        $user = Register::get($key);
        if (!$user) {
            $user = new User($id);
            Register::set($key, $user);
        }

        return $user;
    }

    static function getDatabase() {
        $db = new Database\MySQLi();
        $db->connect('127.0.0.1', 'root', '', 'test');
        return $db;
    }

}
