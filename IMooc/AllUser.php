<?php

namespace IMooc;

/**
 * 迭代
 */
class AllUser extends \IteratorIterator {

    protected $ids;
    protected $index;
    protected $data = array();

    public function __construct() {
//        parent::__construct($iterator);
        $db = Factory::getDatabase();
        $res = $db->query("select id from user");
        $this->ids = $res->fetch_all(MYSQLI_ASSOC);
    }

    public function current() {
//        parent::current();
        $id=$this->ids[$this->index]['id'];
        return Factory::getUser($id);
    }

    public function next() {
//        parent::next();
        $this->index++;
    }

    public function valid() {
//        parent::valid();
        return $this->index < count($this->ids);
    }

    public function rewind() {
//        parent::rewind();
        $this->index = 0;
    }

    public function key() {
//        parent::key();
        return $this->index;
    }

}
