<?php

abstract class Tax
{
    protected $decorateTax;

    public function __construct($decorateTax = null)
    {
        $this->decorateTax = $decorateTax;
    }

    public abstract function calculate(Budget $budget);

    public function calculateTaxDecorate(Budget $budget)
    {
        if(is_null($this->decorateTax)) return 0.0;
        return $this->decorateTax->calculate($budget);
    }
}
