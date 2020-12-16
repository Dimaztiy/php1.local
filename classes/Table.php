<?php
require_once __DIR__ . '/Item.php';
//class Table extends Item
class Table extends Item
{
    public $legs;

    public function __construct($price, $legs)
    {
        parent::__construct($price);
        $this->legs = $legs;
    }

    public function show()
    {

        return 'Я стол. о ножках' . $this->legs . parent::show();
    }
}