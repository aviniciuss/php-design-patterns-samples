<?php
class Number implements Expression
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function evaluate()
    {
        return $this->number;
    }

    public function accept(Printer $printer)
    {
        $printer->visitNumber($this);
    }
}
