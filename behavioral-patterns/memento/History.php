<?php
class History
{
    private $states;

    public function __construct()
    {
        $this->states = [];
    }

    public function getState($index)
    {
        return $this->states[$index];
    }

    public function addState(State $state)
    {
        $this->states[] = $state;
    }
}
