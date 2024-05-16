<?php
trait Size{
    protected $size;

    public function getSize(){
        return $this->size;
    }

    public function setSize($newSize){
        $this->size = $newSize;
    }
}
?>