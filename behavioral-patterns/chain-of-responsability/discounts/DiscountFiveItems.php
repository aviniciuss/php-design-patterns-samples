<?php

class DiscountFiveItems implements Discount {
    private $next;

    public function discount(Budget $budget)
    {
        if($budget->itemsCount() >= 5) {
            return $budget->getValue() * 0.1;
        }
        return $this->next->discount($budget);
    }

    public function setNext(Discount $discount) {
        $this->next = $discount;
    }
}
