<?php
abstract class TaxConditional extends Tax
{
    public function __construct($decorateTax) {
        parent::__construct($decorateTax);
    }

    public function calculate(Budget $budget) {
        if($this->isTaxMax($budget)) {
            return $this->maxTax($budget) + $this->calculateTaxDecorate($budget);
        }
        return $this->minTax($budget) + $this->calculateTaxDecorate($budget);
    }

    public abstract function maxTax(Budget $budget);

    public abstract function minTax(Budget $budget);

    public abstract function isTaxMax(Budget $budget);
}
