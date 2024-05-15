<?php
require_once __DIR__ . '/Product.php';

class Kennel extends Product{
    public $size;
    public $color;

    public function __construct($_name, $_image, $_price, Category $_category, $_size, $_color){
        parent::__construct($_name, $_image, $_category);
        $this->setPrice($_price);
        $this->size = $_size;
        $this->color = $_color;
    }
}
?>