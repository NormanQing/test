<?php

namespace IMooc;

/**
 * 单例
 */
class Database {

    static protected $db;

    private function __construct() {
        
    }

    static public function getInstance() {
        if (!self::$conn) {
            self::$conn = new self();
        }
        return self::$conn;
    }

    private function __clone() {
        ;
    }

    public function where() {
        return $this;
    }

    public function order() {
        return $this;
    }

    public function limit() {
        return $this;
    }

}
