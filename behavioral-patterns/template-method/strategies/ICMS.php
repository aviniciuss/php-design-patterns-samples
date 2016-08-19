<?php

class ICMS extends TaxConditional
{
    public function maxTax(Budget $budget)
    {
        return $budget->getValue() * 0.15;
    }

    public function minTax(Budget $budget)
    {
        return $budget->getValue() * 0.05;
    }

    public function isTaxMax(Budget $budget)
    {
        return $budget->getValue() > 500;
    }
}
