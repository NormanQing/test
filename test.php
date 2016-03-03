<?php

//include 'test1.php';
//include 'test2.php';
spl_autoload_register('autoload1');
Test11::test();
Test22::test();

//function __autoload($class){
//    include  __DIR__.'/'.$class.'.php';
//}

function autoload1($class) {
    include __DIR__ . '/' . $class . '.php';
}
