<?php
class Disapproved implements State
{
    public function apply(Budget $budget)
    {
        throw new Exception("Budget disapproved can not receive a discount");
    }

    public function approve(Budget $budget)
    {
        throw new Exception("this budget already disapproved.");
    }

    public function disapprove(Budget $budget)
    {
        throw new Exception("disapproved budget may not be disapproved.");
    }

    public function finalize(Budget $budget)
    {
        throw new Exception("disapproved budget may not be finalized.");
    }
}
