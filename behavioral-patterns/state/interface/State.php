<?php

interface State
{
    public function apply(Budget $budget);

    public function approve(Budget $budget);

    public function disapprove(Budget $budget);

    public function finalize(Budget $budget);
}
