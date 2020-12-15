<?php
require_once __DIR__ . '/Item.php';

class Cabinet extends Item
{

    public $doors;

    public function __construct($price, $doors)
    {
        parent::__construct($price);
        $this->doors = $doors;
    }

    public function show()
    {
        return 'Я шкаф о ' . ' дверях '.$this->doors . parent::show();
    }
}