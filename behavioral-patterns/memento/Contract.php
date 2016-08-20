<?php

class Contract
{
    private $date;
    private $type;

    public function __construct($date, $type = null)
    {
        $this->date = $date;

        if(!is_null($type)) {
            $this->type = $type;
        } else {
            $this->type = new Waiting();
        }
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setType(ContractType $type)
    {
        $this->type = $type;
    }

    public function next()
    {
        $this->type->next($this);
    }

    public function saveState()
    {
        return new State(new Contract($this->date, $this->type));
    }
}
