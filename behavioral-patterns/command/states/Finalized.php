<?php
class Finalized implements State
{
    public function pay(Order $order)
    {
        throw new Exception("Already paid");
    }

    public function finalize(Order $order)
    {
        throw new Exception("Already finalized");
    }
}
