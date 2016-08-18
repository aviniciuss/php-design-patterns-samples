<?php

class FiveHundred implements Discount {
    private $next;

    public function discount(Budget $budget)
    {
        if($budget->getValue() >= 500) {
            return $budget->getValue() * 0.05;
        }
        return $this->next->descount($budget);
    }

    public function setNext(Discount $discount) {
        $this->next = $discount;
    }
}
