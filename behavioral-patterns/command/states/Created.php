<?php
class Created implements State
{
    public function pay(Order $order)
    {
        $order->setState(new Paid());
    }

    public function finalize(Order $order)
    {
        throw new Exception("Was not paid");
    }
}
