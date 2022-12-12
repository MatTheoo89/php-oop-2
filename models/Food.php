<?php

class Food extends Product{
    public $weight;
    public $ingredients;
    public $taste;

    public function __construct($_weight, $_ingredients, $_taste)
    {
        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
        $this->taste = $_taste;
    }
}