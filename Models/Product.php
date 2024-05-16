<?php
class Product{
    public $name;
    public $image;
    private $price;
    public $category;
    public $material;

    public function __construct($_name, Category $_category, $_image){
        $this->name = $_name;
        $this->category = $_category;
        $this->image = $_image;
    }

    public function getPrice(){
        return $this->price . '€';
    }

    public function setPrice($newPrice){
        $this->price = $newPrice;
    }
}
?>