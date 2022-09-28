<?php

trait PedBed {

    public function setColor($color){
        $this->color = $color;
    }

    public function setSize($size){
        if(is_array($size)){
            $this->size = $size;
        } else {
            throw new Exception('Invalid size');
        }
    }
}   