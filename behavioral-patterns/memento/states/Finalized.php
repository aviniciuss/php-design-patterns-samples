<?php
class Finalized implements ContractType
{
    public function next(Contract $contract)
    {
        throw new Exception("Contract is finalized!");

    }
}
