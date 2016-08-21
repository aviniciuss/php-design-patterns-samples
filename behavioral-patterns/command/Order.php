<?php
class Order {
    private $client;
    private $value;
    private $state;

    public function __construct($client, $value)
    {
        $this->client = $client;
        $this->value = $value;
        $this->state = new Created();
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function pay()
    {
        $this->state->pay($this);
    }

    public function finalize()
    {
        $this->state->finalize($this);
    }
}
