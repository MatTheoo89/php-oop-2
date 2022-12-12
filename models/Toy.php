<?php

class Toy extends Product{

    public $feature;
    public $size;

    public function __construct($_id, $_name, $_brand, $_category, $_price, $_image, $_feature, $_size)
    {

        parent::__construct($_id, $_name, $_brand, $_category, $_price, $_image);

        $this->feature = $_feature;
        $this->size = $_size;
    }
}