<?php
class PayCommand implements Command
{
    private $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function execute()
    {
        $this->order->pay();
    }
}
