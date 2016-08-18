<?php

class NotDiscount implements Discount {
    private $next;

    public function discount(Budget $budget)
    {
        return 0.0;
    }

    public function setNext(Discount $discount) {}
}
