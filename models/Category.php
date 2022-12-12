<!-- 

    cane <i class="fa-solid fa-dog"></i>
    gatto <i class="fa-solid fa-cat"></i>
-->
<?php

class category{

    public $name;
    public $icon;

    public function __construct($_name, $_icon)
    {
        $this->name = $_name;
        $this->SetIcon($_icon);
    }

    public function SetIcon($_icon)
    {
        if($this->$_icon = 'dog'){
            return $this->icon = '<i class="fa-solid fa-dog"></i>';
        } elseif($this->$_icon = 'cat'){
            return $this->icon = '<i class="fa-solid fa-cat"></i>';
        }
    }
}