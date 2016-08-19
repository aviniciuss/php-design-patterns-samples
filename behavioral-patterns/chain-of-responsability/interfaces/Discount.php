<?php

interface Discount {
    public function discount(Budget $budget);
    public function setNext(Discount $discount);
}
