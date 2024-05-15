<?php
class Product{
    public $name;
    private $price;
    public $category;
    public $image;
    public $material;
    public $color;

    public function __construct($_name, Category $_category){
        $this->name = $_name;
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