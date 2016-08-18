<?php
class Budget {
    private $value;
    private $items;

    function __construct($value)
    {
        $this->value = $value;
        $this->items = [];
    }

    public function getValue()
    {
        return $this->value;
    }

    public function itemsCount()
    {
        return count($this->items);
    }

    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }
}
