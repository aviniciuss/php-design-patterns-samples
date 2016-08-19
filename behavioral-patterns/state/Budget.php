<?php
class Budget {
    private $value;
    private $state;

    function __construct($value)
    {
        $this->value = $value;
        $this->state = new UnderApproval();

    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function discountApply()
    {
        $this->state->apply($this);
    }

    public function approve()
    {
        $this->state->approve($this);
    }

    public function disapprove()
    {
        $this->state->disapprove($this);
    }

    public function finalize()
    {
        $this->state->finalize($this);
    }
}
