<?php

class ICMS implements Tax {
    public function calculate(Budget $budget)
    {
        return $budget->getValue() * 0.05;
    }
}
