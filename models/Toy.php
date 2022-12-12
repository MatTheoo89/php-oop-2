<?php

class Toy extends Product{

    public $feature;
    public $size;

    public function __construct($_feature, $_size)
    {
        $this->feature = $_feature;
        $this->size = $_size;
    }
}