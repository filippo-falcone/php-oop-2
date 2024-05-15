<?php
class Product{
    public $name;
    public $image;
    private $price;
    public $category;
    public $material;
    public $color;

    public function __construct($_name, $_image, Category $_category){
        $this->name = $_name;
        $this->image = $_image;
        $this->category = $_category;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($newPrice){
        $this->price = $newPrice . '€';
    }
}
?>