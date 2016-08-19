<?php
require "interfaces/Discount.php";
require "discounts/DiscountFiveItems.php";
require "discounts/FiveHundred.php";
require "discounts/NotDiscount.php";

class DiscountCalculator {
    public function discount(Budget $budget)
    {
        $discoutFiveItems = new DiscountFiveItems();
        $discoutFiveHundred = new FiveHundred();
        $notDiscount = new NotDiscount();

        $discoutFiveItems->setNext($discoutFiveHundred);
        $discoutFiveHundred->setNext($notDiscount);

        return $discoutFiveItems->discount($budget);
    }
}
