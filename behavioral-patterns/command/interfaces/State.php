<?php
interface State
{
    public function pay(Order $order);
    public function finalize(Order $order);
}
