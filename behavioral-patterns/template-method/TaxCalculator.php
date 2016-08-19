<?php

class TaxCalculator
{
    function calculate(Budget $budget, Tax $tax)
    {
        return $tax->calculate($budget);
    }
}
