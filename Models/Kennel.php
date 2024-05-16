<?php
require_once __DIR__ . '/Product.php';

class Kennel extends Product{
    public $size;
    public $color;

    public function __construct($_name, $_price, Category $_category, $_size, $_color, $_image = 'https://media.istockphoto.com/id/1409329028/vector/no-picture-available-placeholder-thumbnail-icon-illustration-design.jpg?s=612x612&w=0&k=20&c=_zOuJu755g2eEUioiOUdz_mHKJQJn-tDgIAhQzyeKUQ='){
        parent::__construct($_name, $_category, $_image);
        $this->setPrice($_price);
        $this->size = $_size;
        $this->color = $_color;
    }
}
?>