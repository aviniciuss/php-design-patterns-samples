<?php
class Printer
{
    public function visitSum(Sum $sum)
    {
        echo "(";
        echo $sum->getLeft()->accept($this);
        echo " + ";
        echo $sum->getRight()->accept($this);
        echo ")";
    }

    public function visitSubtraction(Subtraction $sub)
    {
        echo "(";
        echo $sub->getLeft()->accept($this);
        echo " - ";
        echo $sub->getRight()->accept($this);
        echo ")";
    }

    public function visitNumber(Number $number)
    {
        echo $number->getNumber();
    }
}
