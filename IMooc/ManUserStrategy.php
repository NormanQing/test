<?php

namespace Imooc;

/**
 * Description of ManUserStrategy
 *
 * @author Administrator
 */
class ManUserStrategy implements UserStrategy {

    public function showAd() {
        echo 'IPHONE 7';
    }

    public function showCategory() {
        echo "电子产品";
    }

}
