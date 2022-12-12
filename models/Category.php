<!-- 

    cane <i class="fa-solid fa-dog"></i>
    gatto <i class="fa-solid fa-cat"></i>
-->
<?php

class category{

    public $name;
    public $icon;

    public function __construct($_name)
    {
        $this->name = $_name;
        $this->SetIcon();
    }

    public function SetIcon()
    {
        if($this->name == 'dog'){

            return $this->icon = '<i class="fa-solid fa-dog"></i>';
        } elseif($this->name == 'cat'){
            return $this->icon = '<i class="fa-solid fa-cat"></i>';
        }
    }
}