<?php
class Approved implements State
{
    public function apply(Budget $budget)
    {
        $budget->setValue($budget->getValue() - $budget->getValue() * 0.05);
    }

    public function approve(Budget $budget)
    {
        throw new Exception("this budget already approved.");
    }

    public function disapprove(Budget $budget)
    {
        throw new Exception("approved budget may not be reproved.");
    }

    public function finalize(Budget $budget)
    {
        $budget->setState(new Finalized());
    }
}
