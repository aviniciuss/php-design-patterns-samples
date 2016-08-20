<?php
interface Expression
{
    public function evaluate();
    public function accept(Printer $printer);
}
