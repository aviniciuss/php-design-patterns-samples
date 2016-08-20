<?php
class Sum implements Expression
{
    private $left;
    private $right;

    public function __construct(Expression $left, Expression $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function evaluate()
    {
        $valueLeft = $this->left->evaluate();
        $valueRight = $this->right->evaluate();
        return $valueLeft + $valueRight;
    }

    public function getLeft()
    {
        return $this->left;
    }

    public function getRight()
    {
        return $this->right;
    }

    public function accept(Printer $printer)
    {
        $printer->visitSum($this);
    }
}
