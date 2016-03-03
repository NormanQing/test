<?php

namespace IMooc;
/**
 * Description of FemaleUserStrategy
 *
 * @author Administrator
 */
class FemaleUserStrategy implements UserStrategy{
    public function showAd(){
        echo '201新款女装';
    }
    public function showCategory() {
        echo "女装";
    }
}
