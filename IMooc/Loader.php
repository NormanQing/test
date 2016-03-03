<?php

/**
 * 自动载入
 */

namespace IMooc;

class Loader {

    static public function autoload($class) {
        require BASEDIR . '/'.  str_replace('//', '/', $class).'.php';
    }

}
