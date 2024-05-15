<?php
include_once __DIR__ . '/Product.php';

class Game extends Product{
    public $type;

    public function __construct($_name, $_image,  $_price, Category $_category, $_type, $_material, $_color){
        parent::__construct($_name, $_image, $_category);
        $this->setPrice($_price);
        $this->type = $_type;
        $this->color = $_color;
        $this->material = $_material;
    }
}
?>