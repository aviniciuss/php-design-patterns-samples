<?php
abstract class TaxConditional implements Tax
{
    public function calculate(Budget $budget) {
        if($this->isTaxMax($budget)) {
            return $this->maxTax($budget);
        }
        return $this->minTax($budget);
    }

    public abstract function maxTax(Budget $budget);

    public abstract function minTax(Budget $budget);

    public abstract function isTaxMax(Budget $budget);
}
