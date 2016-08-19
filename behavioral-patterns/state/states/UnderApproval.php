<?php
class UnderApproval implements State
{
    public function apply(Budget $budget)
    {
        $budget->setValue($budget->getValue() - $budget->getValue() * 0.02);
    }

    public function approve(Budget $budget)
    {
        $budget->setState(new Approved());
    }

    public function disapprove(Budget $budget)
    {
        $budget->setState(new Disapproved());
    }

    public function finalize(Budget $budget)
    {
        throw new Exception("under approval budget may not be finalized.");
    }
}
