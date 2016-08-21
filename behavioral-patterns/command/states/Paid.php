<?php
class Paid implements State
{
    public function pay(Order $order)
    {
        throw new Exception("Already paid");
    }

    public function finalize(Order $order)
    {
        $order->setState(new Finalized());
    }
}
