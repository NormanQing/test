<?php

namespace IMooc;

class Register{
    static protected $objects;
    static public function set($alias,$obj){
        self::$objects[$alias]=$obj;
    }
    
    static public function get($name){
        return self::$objects[$name];
    }


    static public function _unset(){
         self::$objects[$alias];
    }
    
}

