<?php
class Product
{
    public $name;
    public $price;
    public $is_available;
    public $quantity;
    public $image;
    public $category;

    public function __construct($name, $price, $is_available, $quantity, $image, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->is_available = $is_available;
        $this->quantity = $quantity;
        $this->image = $image;
        $this->category = $category;
    }
}
