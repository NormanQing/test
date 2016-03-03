<?php

namespace IMooc;

/**
 * Description of EventGenerator
 *
 * @author Administrator
 */
abstract class EventGenerator {

    private $observers = array();

    public function addObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function notify(){
        foreach($this->observers as $observer){
            $observer->update();
        }
    }
}
