<?php

class ISS extends TaxConditional
{
    public function maxTax(Budget $budget)
    {
        return $budget->getValue() * 0.15;
    }

    public function minTax(Budget $budget)
    {
        return $budget->getValue() * 0.1;
    }

    public function isTaxMax(Budget $budget)
    {
        return $budget->getValue() > 300;
    }
}
