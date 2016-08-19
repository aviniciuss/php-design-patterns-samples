<?php
class Finalized implements State
{
    public function apply(Budget $budget)
    {
        throw new Exception("Budget finalized can not receive a discount");
    }

    public function approve(Budget $budget)
    {
        throw new Exception("this budget already finalized.");
    }

    public function disapprove(Budget $budget)
    {
        throw new Exception("finalized budget may not be finalized.");
    }

    public function finalize(Budget $budget)
    {
        throw new Exception("finalized budget may not be finalized.");
    }
}
