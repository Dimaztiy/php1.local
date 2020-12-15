<?php


class Item
{
    public $color;
    protected $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function show()
    {
        return 'Я стою ' . $this->price . ' рублей';
    }
}