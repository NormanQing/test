<?php

namespace IMooc;

class Object {

    protected $array;

    public function __set($key, $value) {
        $this->array[$key] = $value;
    }

    public function __get($key) {
        return $this->array[$key];
    }

    public function __call($func, $arguments) {
        var_dump($func, $arguments);
        return 'magic function';
    }

    static public function __callStatic($func, $arguments) {
        var_dump($func, $arguments);
        return 'magic function';
    }
    
    public function __toString() {
        return __CLASS__;
    }
    
    public function __invoke($param) {
        var_dump($param);
        return 'invoke';
    }

}
