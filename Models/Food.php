<?php
include_once __DIR__ . '/Product.php';

class Food extends Product{
    public $weight;

    public function __construct($_name, $_image, $_price, Category $_category, $_weight, $_material, $_color){
        parent::__construct($_name, $_image, $_category);
        $this->setPrice($_price);
        $this->weight = $_weight;
        $this->color = $_color;
        $this->material = $_material;
    }

    public function getWeight(){
        if ($this->weight > 1){
            return $this->weight . 'kg';
        } else {
            return $this->weight . 'g';
        }
    }
}
?>