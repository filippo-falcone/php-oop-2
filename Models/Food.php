<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Size.php';

class Food extends Product{
    use Size;
    public $weight;

    public function __construct($_name, $_price, Category $_category, $_weight, $_material, $_size, $_image = 'https://media.istockphoto.com/id/1409329028/vector/no-picture-available-placeholder-thumbnail-icon-illustration-design.jpg?s=612x612&w=0&k=20&c=_zOuJu755g2eEUioiOUdz_mHKJQJn-tDgIAhQzyeKUQ='){
        parent::__construct($_name, $_category, $_image);
        $this->setPrice($_price);
        $this->weight = $_weight;
        $this->material = $_material;
        $this->setSize($_size);
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