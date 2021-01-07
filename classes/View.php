<?php


class View
{
    protected $data = [];

    public function assing($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        include $template;
    }
}